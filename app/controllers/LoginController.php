<?php

class LoginController extends BaseController {

	public function viewLogin(){
		return View::make('login');
	}

	public function home(){
		$role = Auth::user()->role;

		if($role == 'customer')	
			return View::make('customerIndex');
		else if($role == 'admin')
			return View::make('adminIndex');
		else if($role == 'cashier')
			return View::make('cashierIndex');
	}

	public function processLogin(){
		 if (Auth::attempt(array('username'=>Input::get('logUser'), 
            'password'=>Input::get('logPass')))) {
        return Redirect::to('/home');
        } 
        else {
            if((Input::get('logUser') == null) || (Input::get('logPass') == null)){
                return Redirect::to('login')
            ->with('message', 'Required field/s missing.')
            ->withInput(Input::except('logPass'));
            }
            else{
                return Redirect::to('login')
            ->with('message', 'Username and password did not match.')
            ->withInput(Input::except('logPass'));
            }
        }

		// $loginData = array (
		// 	'username' => Input::get('logUser'),
		// 	'password' => Input::get('logPass')
		// );

		
		
		// if(Auth::attempt($loginData, true)){
		// 	return Redirect::to('/home');
		// } 
		// else
		// 	return Redirect::to('login');
	}

	public function logout() {

		Auth::logout();
		return Redirect::to('login');

		
	}


}
