<?php

class PizzaController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('pizza.index');	
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{	
		//Session ID
		if(Session::has('order'))
			$id = Session::get('order');
		else
			$id = Input::get('order');

		$order = Order::find($id);

		Session::put('order', $id);

		if(Auth::user()->role == "customer"){
			return View::make('pizza.create')
				->with('order', $order);
		} else if(Auth::user()->role == "cashier"){
			return View::make('pizza.cashier')
				->with('order', $order);
		}

	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		
		$pizza = new Pizza;
		$order_id = Input::get('order');
		
		$order = Order::find($order_id);
		$order->save();

		$pizza_name = Input::get('pizza_name');
		if($pizza_name)
			$pizza->pizza_name= $pizza_name;
		else
			$pizza->pizza_name= "N/A";

		$pizza->amount=0;
		$pizza->total=0;
		$quantity = Input::get('quantity');
		$pizza->quantity = $quantity;
		$pizza->save();


		
		


		
	$size = Input::get('size');
	if($size == 'solo') {
		$pizza->size = $size;
		$base = Input::get('base');
			if($base)
				$pizza->ingredients()->attach($base);
			else
				return Redirect::to('/pizza/create')
					->with(array('order' => $order->order_id,'message' => "It ain't pizza if there ain't no base!"))
					->withInput(Input::only('pizza_name','quantity','size'));
			

		$sauce = Input::get('sauce');
			$pizza->ingredients()->attach($sauce);	
			
		$cheese = Input::get('cheese');
			$pizza->ingredients()->attach($cheese);
			
		$meats = Input::get('meats');

		if(sizeof($meats) != 0) {
			foreach ($meats as $meat) {
			$pizza->ingredients()->attach($meat);
			
			}	
		}
		

		$chilis = Input::get('chilis');

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
	} 
	
	else if($size == 'large') {
		$pizza->size = $size;
		$base = Input::get('base2');
			$pizza->ingredients()->attach($base);

		$sauce = Input::get('sauce2');
			$pizza->ingredients()->attach($sauce);	
			
		$cheese = Input::get('cheese2');
			$pizza->ingredients()->attach($cheese);
			
		$meats = Input::get('meats2');

		if(sizeof($meats) != 0) {
			foreach ($meats as $meat) {
			$pizza->ingredients()->attach($meat);
			
			}	
		}
		

		$chilis = Input::get('chilis2');

		if(sizeof($chilis) != 0) {
			foreach ($chilis as $chill) {
			$pizza->ingredients()->attach($chill);
			}	
		}
		

		$toppings = Input::get('toppings2');

		if(sizeof($toppings) != 0){
			foreach ($toppings as $topping) {
			$pizza->ingredients()->attach($topping);
			}
		}

	}	
		


		if(sizeof($pizza->ingredients) <= 4){
			return Redirect::to('/pizza/create')
					->with(array('order' => $order->order_id,'message' => "Too few ingredients. Should have at least 4."))
					->withInput(Input::only('pizza_name'));
			
		}
		else{
			$amount = 0;

			foreach($pizza->ingredients as $ingr){
				$amount = $amount + $ingr->price;
			}

			//price of the individual pizza
			$pizza->amount = $amount;

			//total amount = price of pizza * quantity
			$total = $amount * $quantity;

			$pizza->total = $total;
			
			
			$pizza->save();

			$order->pizzas()->attach($pizza);
			$order->save();
			//Show newly created pizza 
			return Redirect::to('/order/' . $order->order_id . '');
		}
		
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{

		$pizza = Pizza::find($id);

		return View::make('pizza.show')
			->with('pizza', $pizza);

	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		
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
		$pizza = Pizza::find($id);

		$pizza->pizza_name = Input::get('pizza_name');
		


		$base = Input::get('base');
			$pizza->ingredients()->attach($base);
			
		$cheese = Input::get('cheese');
			$pizza->ingredients()->attach($cheese);
			
		$meats = Input::get('meats');

		if(sizeof($meats) != 0) {
			foreach ($meats as $meat) {
			$pizza->ingredients()->attach($meat);
			
			}	
		}
		

		
		
		$pizza->save();


	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$order_id = Input::get('orderID');

		$order = Order::find($order_id);
		

		$order->pizzas()->detach($id);

		return Redirect::to('/order/' .$order->order_id. '');
	}


}
