		

<?php

// route to show the login form


Route::get('login', array('uses' => 'LoginController@viewLogin'));

Route::get('/home', array('uses' => 'LoginController@home'));
// route to process the form
Route::post('login', array('uses' => 'LoginController@processLogin'));

Route::any('/logout', array('uses' => 'LoginController@logout'));

Route::get('/cart', array('uses' => 'OrderController@cart'));

Route::get('/customerindex', array('uses' => 'CustomerController@showMenu'));
Route::get('displayEditCart/{order_id}', 'OrderController@displayEditCart');

Route::resource('users', 'UserController');
Route::resource('pizza', 'PizzaController');
Route::resource('order', 'OrderController');
Route::resource('ingredients', 'IngredientController');




	
