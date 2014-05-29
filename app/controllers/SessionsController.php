<?php
use UG\Validation\Forms\Login as LoginForm;
use Laracasts\Validation\FormValidationException;

class SessionsController extends \BaseController {

	protected $loginForm;

	public function __construct(LoginForm $loginForm)
	{
	    $this->loginForm = $loginForm;
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('sessions.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::only('username', 'password');

	    try
	    {

	        $this->loginForm->validate($input); 

	        $username = Input::get('username');
			$password = Input::get('password');
			$remember = Input::has('remember') ? true : false;

			if (!Auth::attempt(array('username' => $username, 'password' => $password),$remember))
			{
			    return Redirect::route('login')->with('form_error', 'Invalid login credentials!');   
			}
			
			return Redirect::to('/');

	    }
	    catch (FormValidationException $e)
	    {
	        return Redirect::back()->withInput()->withErrors($e->getErrors());
	    }

	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id = null)
	{
		Auth::logout();

		return Redirect::to('/login');
	}


}
