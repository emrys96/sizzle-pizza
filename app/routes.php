		

<?php

// route to show the login form


Route::get('login', array('uses' => 'LoginController@viewLogin'));

Route::get('/home', array('uses' => 'LoginController@home'));
// route to process the form
Route::post('login', array('uses' => 'LoginController@processLogin'));

Route::any('/logout', array('uses' => 'LoginController@logout'));



Route::get('/customerindex', array('uses' => 'CustomerController@showMenu'));
Route::get('displayEditCart/{order_id}', 'OrderController@displayEditCart');

//Resource Routes
Route::resource('users', 'UserController');
Route::resource('pizza', 'PizzaController');
Route::resource('order', 'OrderController');
Route::resource('ingredient', 'IngredientController');


//Additional Routes

Route::any('userOrders', array('uses' => 'OrderController@getUserOrders'));
Route::any('/carryOut/{id}',[
        "as" => "carryOut",
        "uses" => "OrderController@inputOrderDetails"
]);

Route::any('/getCoordinates{id}',[
        "as" => "getCoordinates",
        "uses" => "OrderController@getCoordinates"
]);

Route::any('/viewOrder/{id}',[
        "as" => "viewOrder",
        "uses" => "OrderController@viewOrder"
]);

Route::any('/viewAllOrders',[
        "as" => "viewAllOrder",
        "uses" => "OrderController@viewAllOrders"
]);

Route::any('/updateStatus/{id}',[
        "as" => "updateStatus",
        "uses" => "OrderController@updateStatus"
]);




	
