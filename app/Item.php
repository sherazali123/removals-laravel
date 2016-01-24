<?php namespace App;

use Illuminate\Database\Eloquent\Model;

use Config;

class Item extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'item';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['number_in_row', 'title', 'image', 'type', 'status'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = [];


	public function getQuantity(){
		if(in_array($this->title, ['Box', 'Small bag', 'Big bag'])){

			return Config::get('constants.quantity_30');
		} else {
			return Config::get('constants.quantity_10');
		}
	}

	/**
	 * Scope: active ads
	 *
	 * @var collection
	 */
	public function scopeActive($query){
		return $query->where('status', '<>', -1);
	}

	/**
	 * Scope: by type
	 *
	 * @var collection
	 */
	public function scopeByType($query, $type = 1){
		return $query->where('type', '=', $type);
	}

}
