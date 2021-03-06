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
		if(Auth::user()->role == "cashier")
			$order->mode = "in-store";

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

	public function previewOrder($id)
	{
		//

		$order= Order::find($id);

		return View::make('order.preview')
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

		$today = Carbon\Carbon::toDay()->toDateTimeString();
		
		if(Auth::user()->role == "admin" || Auth::user()->role == "cashier"){
			$orders_today = Order::where('created_at', '>=', Carbon\Carbon::now()->startOfDay())->orderBy('created_at','desc')->paginate(10);

			$orders_all = Order::orderBy('created_at','desc')->paginate(10);

			return View::make('order.list')
				->with(array('orders_today' => $orders_today, 'orders_all' => $orders_all));
		} else {
			echo "Access Denied. You have no permission to access this area.";
		}
		
	}

	public function inputOrderDetails($id) {

		$order = Order::find($id);

		if(Auth::user()->role == "admin" || Auth::user()->role == "cashier"){
			return View::make('order.input2')
				->with('order', $order);
		} else {
			return View::make('order.input')
				->with('order', $order);
		}
	}

	public function updateStatus($id){
		if(Auth::user()->role == "admin" || Auth::user()->role == "cashier"){
			$id = Input::get('order_id');
			$stat = Input::get('status');

			$order = Order::find($id);

			$order->status = $stat;
			$order->save();

			return Redirect::to('/viewAllOrders');
		} else {
			echo "Access Denied. You have no permission to access this area.";
		}
		
	}
	public function getCoordinates($id) {

		$order = Order::find($id);

		//Get the total
		$total = Input::get('total');
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


	
		if(Auth::user()->role == 'customer'){
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
		}
		
			
		$order->amount = $total;
		//Saves the changes
		$order->save();

		return Redirect::to('/home');
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

	public function deleteOrders()
	{
		$IDs = Input::get('action2');


		if(sizeof($IDs)){
			foreach($IDs as $id) {
			$order = Order::find($id);
			foreach ($order->pizzas as $pizza) {
				$order->pizzas()->	detach($pizza->pizza_id);
			}
			$order->delete();
			}	
		}
		
		return Redirect::to('/viewAllOrders');
			
	}

	public function changeStatus()
	{
		$IDs = Input::get('action');
		$stat = Input::get('status1');

				

		if(sizeof($IDs)){
			foreach($IDs as $id) {
				$order = Order::find($id);
				// echo $order->order_id;
				$order->status = $stat;
				// echo $stat;
				
				$order->save();
			}	
		}

		//echo "nganong dli man ka?";
		return Redirect::to('/viewAllOrders');

	}



}
