<?php

class CustomerController extends BaseController {

	public function showMenu(){
		return View::make('customerIndex');
	}
}
