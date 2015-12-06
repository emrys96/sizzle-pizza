<?php

class OrderController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
		$orders = Order::all();

		return View::make('order.index')
			->with('orders', $orders);
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
		$order->status = 'unconfirmed';
		$order->save();

		
		return Redirect::to('/pizza/create')
			->with('order', $order->order_id);	
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


		//Test Map
		
	}

	public function getUserOrders()
	{
		//
		$user = User::find(Auth::user()->id);

		$orders= DB::table('orders')->where('user_id','=', $user->id)->orderBy('created_at','desc')->paginate(10);
		
		return View::make('users.userOrders')
			->with('orders', $orders);
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

		return View::make('order.edit')
			->with('order', $order);
	}


	/**
	 * Update the specified resource in storage.x
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$order = Order::find($id);

		$lng = Input::get('lng');
		$lat = Input::get('lat');

		$order->lng = $lng;
		$order->lat = $lat;
		$order->save();

		return Redirect::to('/home');
	}

	public function viewOrder($id){

		$order = Order::find($id);

		return View::make('order.view')
			->with('order', $order);
	}

	public function viewAllOrders(){

		$orders = DB::table('orders')->orderBy('created_at','desc')->paginate(10);

		return View::make('order.list')
			->with('orders', $orders);
	}

	public function inputOrderDetails($id) {

		$order = Order::find($id);

		return View::make('order.input')
			->with('order', $order);
	}

	public function updateStatus($id){
		$id = Input::get('order_id');
		$stat = Input::get('status');

		$order = Order::find($id);

		$order->status = $stat;
		$order->save();
	}
	public function getCoordinates($id) {

		$order = Order::find($id);

		//Get the time
		$time = Input::get('time');
		//Get the input address
		$addr = Input::get('address');
		//Get the mode of delivery
		$mode = Input::get('mode');
		//Get the longitude
		$lng = Input::get('lng');
		//Get the latitute
		$lat = Input::get('lat');

		//Appends all the newly input infos 

		//Check if there is addr
		if($addr)
			$order->toAddress = $addr;
		else
			$order->toAddress = "N/A";


	

		//Check the mode then save
		if($mode == 0){
			$order->mode = "delivery";
			$order->lng = $lng;
			$order->lat = $lat;
		}	
		else{
			$order->mode = "pick-up";
			$order->time = $time;
		}
			

		//Saves the changes
		$order->save();

		echo 'Successful';
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
			
	}


}
