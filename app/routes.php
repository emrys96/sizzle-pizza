		

<?php

// route to show the login form
Route::get('login', array('uses' => 'LoginController@viewLogin'));

// route to process the form
Route::post('login', array('uses' => 'LoginController@processLogin'));

Route::any('/logout', array('uses' => 'LoginController@logout'));



Route::get('/customerindex', array('uses' => 'CustomerController@showMenu'));


Route::resource('users', 'UserController');
Route::resource('pizza', 'PizzaController');





	
