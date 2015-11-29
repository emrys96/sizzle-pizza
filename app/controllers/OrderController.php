<?php

class OrderController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
	
		return View::make('order.index');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('order.index');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$user = User::find(Auth::user()->id);
		$order= new Order;
		$order->user()->associate($user);
		$order->save();

		
		return View::make('/pizza/create')
			->with('order', $order);	
		
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//

		$order= Order::find($id);

		return View::make('order.show')
			->with('order', $order);
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
		$order = Order::find($id);

		return View::make('pizza.edit')
			->with('order', $order);
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

		$user = User::find(Auth::user()->id);
		$order= Order::find($id);
		$order->user()->associate($user);
		$order->toAddress = 'Caimito St., Balite Drive, Brgy. Santiago';
		$order->amount = 125.00;
		$order->save();
		

		$pizza = new Pizza;

		$pizza->pizza_name='Jets Pizza';
		$pizza->amount=0;
		$quantity = Input::get('quantity');
		$pizza->quantity = $quantity;
		$pizza->save();
		


		$base = Input::get('base');
			$pizza->ingredients()->attach($base);
			
		$cheese = Input::get('cheese');
			$pizza->ingredients()->attach($cheese);
			
		$meats = Input::get('meat');

		if(sizeof($meats) != 0) {
			foreach ($meats as $meat) {
			$pizza->ingredients()->attach($meat);
			
			}	
		}
		

		$chilis = Input::get('chili');

		if(sizeof($chilis) != 0) {
			foreach ($chilis as $chill) {
			$pizza->ingredients()->attach($chill);
			}	
		}
		

		$toppings = Input::get('toppings');

		if(sizeof($toppings) != 0){
			foreach ($toppings as $topping) {
			$pizza->ingredients()->attach($topping);
			}
		}
		
		$amount = 0;

		foreach($pizza->ingredients as $ingr){
			$amount = $amount + $ingr->price;
		}

		
		$total_amount;

		$pizza->amount = $amount;
		
		
		$pizza->save();

		$order->pizzas()->attach($pizza);


		$order->save();

		return Redirect::to('/order/' .$order->order_id. '');
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
		$order = Order::find($id);
		$pizza = Input::get('pizza_id');


		$order->pizzas()->detach($pizza);

		return Redirect::to('/order/' .$id. '');
	}


}
