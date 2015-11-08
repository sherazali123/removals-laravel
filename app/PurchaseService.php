<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchaseService extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'purchase_services';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['number_in_row', 'title', 'image', 'status', 'price'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = [];

	/**
	 * Scope: Active services
	 *
	 * @var object
	 */
	public function scopeActive($query){
		return $query->where('status', '<>', -1)->orderBy('number_in_row');
	}
}
