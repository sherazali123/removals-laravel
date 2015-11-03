<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassicAdProcess extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'classic_ad_processes';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['number_in_row', 'description', 'classic_ad_id'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = [];

	/**
	 * The process associated with ad
	 *
	 * @var object
	 */
	public function ad(){	
		return $this->belongsTo('App\ClassicAd');
	}
}
