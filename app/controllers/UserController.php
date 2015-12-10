<?php

class UserController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
		$users= DB::table('users')->where('role','=', "cashier")->orderBy('created_at','desc')->get();
		
	
		return View::make('users.index')
			->with('users', $users);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()	
	{
		if(Auth::user()->role == 'admin' )
			return View::make('registerUser');
		else
			return Redirect::to('users');

	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$user = new User;

		$user->name = Input::get('name');
		$user->address = Input::get('address');
		$user->bday = Input::get('birthdate');
		$user->contact_no = Input::get('contactno');
		$user->username = Input::get('username');
		$user->password = Hash::make(Input::get('userpass'));
		$user->role = Input::get('role');
		$user->save();

		echo "Successfully add";
		//return Redirect::to('login');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$user = User::find($id);

		return View::make('users.show')
			->with('user', $user);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		
		// get the user
        $user = User::find($id);

        // show the edit form and pass the user
        return View::make('users.edit')
            ->with('user', $user);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$rules = array(
			'name' => 'required',
			'contact_no' => 'required|numeric',
			'bday' => 'required|date',
			'username' => 'required',
			'password' => 'required|alphaNum|min:8'

		);
		$validator = Validator::make(Input::all(), $rules);

		if($validator->fails()) {
			return Redirect::to('users/' . $id . '/edit')
				->withErrors($validator)
				->withInput(Input::except('password'));
		} else {
			$user = User::find($id);

			$user->name = Input::get('name');
			$user->contact_no = Input::get('contact_no');
			$user->bday = Input::get('bday');
			$user->username = Input::get('username');
			$user->password = Hash::make(Input::get('password'));
			$user->save();


			Session::flash('message', 'Successfully updated user!');
			
			echo "Success edit()";
			//return Redirect::to('users');


		}
	}

	public function editProfile()
    {
        return View::make('users.edit');
    }

    public function getProfile($id)
    {
    	$user = User::find($id);

        return View::make('users.view')
        	->with('user', $user);
    }

	public function profileSaveChanges($id)
    {
        // validate
        $rules = [
            'name'         =>  'required',
            'address'         =>  'required',
            'username'         =>  'required',
        ];

        

        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) 
        {
            return Redirect::to('editprofile')->with('message', 'Please fill up all fields');
        } 
        else 
        {
            $user = User::find($id);
            $user->name        = Input::get('name');
            $user->bday        = Input::get('bday');
            $user->contact_no   = Input::get('contactNo');
            $user->address      = Input::get('address');
            $user->username        = Input::get('username');
            $user->save();
            Session::flash('message', 'Profile updated.');
            return Redirect::to('/users/' .$user->id );
        }
    }
    
    public function profilechangepass($id)
    {
    	$pass = Input::get('password');
    	$newPassword = Input::get('newpassword');
    	$confirm = Input::get('confirm');
    	
    	$user = DB::table('users')->where('id', $id)->first();
    	if (Hash::check(Input::get('password'), $user->password)) 
    	{
    		// The passwords match...
    		if ($newPassword == $confirm) 
    		{
    			$user = User::find($id);
    			$user->password = Hash::make($newPassword);
    			$user->save();
    			Session::flash('message', 'Password successfully changed.');
    			return Redirect::to('/users/' .$id. '');
    		}
    		else 
    		{
    			return Redirect::to('editprofile')->with('message', 'Passwords do not match.');
    		}
    	}
    	else {
    		return Redirect::to('editprofile')->with('message', 'Please enter your current password.');
    	}
    }


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		// delete
        $user = User::find($id);
        $user->delete();

        // redirect
        Session::flash('message', 'Successfully deleted!');
        
        
        return Redirect::to('users');
	}





}
