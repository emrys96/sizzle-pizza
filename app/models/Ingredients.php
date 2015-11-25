<?php



class Ingredient extends Eloquent {


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'ingredients';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	
	public function pizzas(){
		// hasMany('ngalan sa model', 'ngalan sa junction table', 'name id sa gi-gikanan', 'name sa id sa padulngan nga junction table')
		return $this->belongsToMany('Pizza','pizza_details','ingredients_id','pizza_id');
	}
	
}
