<?php

class LoginController extends BaseController {

	public function viewLogin(){
		return View::make('login');
	}

	public function home(){
		return View::make('customerIndex');
	}

	public function processLogin(){
		$loginData = array (
			'username' => Input::get('logUser'),
			'password' => Input::get('logPass')
		);

		
		
		if(Auth::attempt($loginData, true)){
			return Redirect::to('/home');
		} 
		else
			return Redirect::to('login');
	}

	public function logout() {

		Auth::logout();
		return Redirect::to('login');

		
	}


}
