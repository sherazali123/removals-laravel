<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class UserClassicAd extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'user_classic_ads';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['title', 'slug', 'location_id', 'advertiser_email', 'advertiser_name', 'advertiser_telephone', 'month', 'year', 'status', 'classic_ad_id', 'description', 'process'];

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
	public function ad(){	
		return $this->belongsTo('App\ClassicAd');
	}

	/**
	 * The location associated with ad
	 *
	 * @var object
	 */
	public function location(){	
		return $this->belongsTo('App\Location');
	}

	

}
