<?php

class IngredientController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$ingredients = DB::table('ingredients')->paginate(10);

		return View::make('ingredients.index')
			->with('ingredients', $ingredients);
	
		
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('ingredients.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//

		$ingr = new Ingredient;

		//Get the name of the ingredient
		$name = Input::get('ingrName');
		$ingr->ingredient_name = $name;

		$category = Input::get('category');
		$ingr->category = $category;

		$price = Input::get('price');
		$ingr->price = $price;

		$size = Input::get('size');
		$ingr->size = $size;


		$stock = Input::get('curr_stock');
		$ingr->current_stock = $stock;

		$ingr->save();

		return Redirect::to('ingredient');
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
		$ingredient = Ingredient::find($id);

		return View::make('ingredients.edit')
			->with('ingredient', $ingredient);
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

		$ingr = Ingredient::find($id);

		
		$price = Input::get('price');
		$ingr->price = $price;

		$stock = Input::get('curr_stock');
		$ingr->current_stock = $stock;

		$ingr->save();
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$ingr = Ingredient::find($id);

		$ingr->delete();

		return Redirect::to('ingredient');
	}


}
