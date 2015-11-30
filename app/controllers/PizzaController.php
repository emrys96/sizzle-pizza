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
		return View::make('pizza.create');
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
		$order_id = Input::get('order_id');

		$order = Order::find($order_id);

	
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
		//Show newly created pizza 
		return Redirect::to('/order/' . $order->order_id . '');
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
		$pizza = Pizza::find($id);
		$ingr = $pizza->ingredients(); //->list('ingredients_id','ingredient_name'); 

		return View::make('pizza.edit')->with(array('pizza' => $pizza, 'ingr' => $ingr));

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
		//
		$pizza = Pizza::find($id);
		//$order_id = $pizza->orders()->order_id;


		echo $id;
		// $order = Order::find($order_id);
		// $order->pizzas()->detach($id);

		// return Redirect::to('/order/' .$order_id. '');
	}


}
