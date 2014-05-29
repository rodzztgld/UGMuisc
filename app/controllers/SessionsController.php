<?php
use UG\Forms\Login as LoginForm;
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
		$input = Input::all();

	    try
	    {
	        $this->loginForm->validate($input);

	        
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

		return Redirect::home();
	}


}
