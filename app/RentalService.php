<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class RentalService extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'rental_services';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['number_in_row', 'title', 'image', 'status', 'price', 'max_quantity'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = [];

	public function getQuantity($q = 10){
		$quantity = [];
		for ($i = 0; $i <= $q; $i++) {
			$quantity[$i] = $i;
		}
		return $quantity;
	}

	/**
	 * Scope: Active services
	 *
	 * @var object
	 */
	public function scopeActive($query){
		return $query->where('status', '<>', -1)->orderBy('number_in_row');
	}
}
