<?php



class Order extends Eloquent {


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'orders';
	protected $primaryKey = 'order_id';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	
	public function pizzas(){
		// hasMany('ngalan sa model padulngan', 'ngalan sa junction table', 'name id sa gi-gikanan', 'name sa id sa padulngan nga junction table')
		return $this->belongsToMany('Pizza','order_details','order_id','pizza_id');
	}

	public function user(){
		// belongsTo('ngalan sa model', 'ngalan sa id adto nga table sa model')
		return $this->belongsTo('User','user_id');
	}
	
}
