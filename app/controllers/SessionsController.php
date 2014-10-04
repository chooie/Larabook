<?php

use Larabook\Forms\SignInForm;

class SessionsController extends \BaseController {

	private $signInForm;

	function __construct(SignInForm $signInForm)
	{
		$this->signInForm = $signInForm;
		$this->beforeFilter('guest', ['except' => 'destroy']);
	}
	/**
	 * Show the form for signing in.
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
		// fetch the form input
		$input = Input::only('email', 'password');
		// validate the form
		$this->signInForm->validate($input);
		// if invalid, then go back
		// if is valid, then try to sign in
		if (Auth::attempt($input))
		{
			Flash::message('Welcome back!');
			// redirect to statuses
			return Redirect::intended('statuses');
		}
	}

	/**
	 * Log a user out of Larabook.
	 * @return mixed
	 */
	public function destroy()
	{
		Auth::logout();

		Flash::message('You have now been logged out.');

		return Redirect::home();
	}
}