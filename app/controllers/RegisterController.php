<?php

class RegisterController extends BaseController {
	
	public function showForm(){
		return View::make('create');
	}
}

