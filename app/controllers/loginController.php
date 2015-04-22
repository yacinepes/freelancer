<?php

class loginController extends \BaseController {

	public function login()
	{
		return View::make('login');
	}
		public function navbar()
	{
		return View::make('navbar');
	}

public function postlogin()
	{
		$input =Input::all();
		$rules =array(
			'email'=>'required|email',
			'password'=>'required|min:6'
			);
		$validator=Validator::make($input,$rules);
		if($validator->fails())
		{
			return Redirect::to('login')->withInput()->withErrors($validator);

		}
		else {
			$method= array('email' =>$input['email'],'password'=>$input['password']  );
			if(Auth::attempt($method))
			{	return Redirect::intended('/');
			}else {
				return Redirect::to('login');
				}
		}


	
	}

	public function logout(){
		Auth::logout();
		return Redirect::to('login');
	}

													}
