<?php



class Pizza extends Eloquent {


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'pizzas';
	protected $primaryKey = 'pizza_id';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */


	public function ingredients(){
		// hasMany('ngalan sa model', 'ngalan sa junction table', 'name id sa gi-gikanan', 'name sa id sa padulngan nga junction table')
		return $this->belongsToMany('Ingredient','pizza_details'  , 'pizza_id', 'ingredients_id' );
	}

	public function orders(){
		// belongsToMany('ngalan sa model', 'ngalan sa junction table' , 'name sa id sa padulngan nga junction table',  'name id sa gi-gikanan')
		return $this->belongsToMany('Order','order_details', 'ingredients_id' , 'pizza_id');
	}
}
