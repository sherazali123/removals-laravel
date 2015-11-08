<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class UserClassicAdImage extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'user_classic_ad_images';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['image', 'status', 'user_classic_ad_id'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = [];

	/**
	 * The condition associated with ad
	 *
	 * @var object
	 */
	public function userClassicAd(){	
		return $this->belongsTo('App\UserClassicAd');
	}

}
