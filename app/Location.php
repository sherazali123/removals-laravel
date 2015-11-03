<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'locations';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['location', 'code'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = [];

	/**
	 * Scope: active locations
	 *
	 * @var collection
	 */
	public function scopeActive($query){	
		return $query->where('status', '<>', -1);
	}
}
