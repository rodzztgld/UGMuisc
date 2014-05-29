<?php

use UG\Validation\Forms\Register as RegisterForm;
use Laracasts\Validation\FormValidationException;

class AccountController extends \BaseController {

	protected $registerForm;

	public function __construct(RegisterForm $registerForm)
	{
	    $this->registerForm = $registerForm;
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('account.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::only('username','email','password','confirm_password');

	    try
	    {
	        $this->registerForm->validate($input);

	        $user = User::create($input);

	        Auth::login($user);

	        return Redirect::home();
	    }
	    catch (FormValidationException $e)
	    {
	        return Redirect::back()->withInput()->withErrors($e->getErrors());
	    }
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
