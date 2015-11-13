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
	protected $fillable = ['title', 'slug', 'location_id', 'advertiser_email', 'advertiser_name', 'advertiser_telephone', 'month', 'year', 'status', 'classic_ad_id', 'description'];

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

	/**
	 * The user classic ads images associated with specific ad
	 *
	 * @var object
	 */
	public function images(){	
		return $this->hasMany('App\UserClassicAdImage');
	}

	/**
	 * Scope: find ad by value of slug (which is unique)
	 *
	 * @var collection
	 */
	public function scopeFindBySlug($query, $slug){	
		return $query->where('slug', '=', $slug)->first();
	}

	/**
	 * Scope: search ads by location 
	 *
	 * @var collection
	 */
	public function scopeSearchLocation($query, $location_id){
		if($location_id){
			return $query->where('location_id', '=', $location_id);
		}
	}
	
	/**
	 * Scope: search ads by location 
	 *
	 * @var collection
	 */
	public function scopeSearchText($query, $text){
		if($text){
			return $query->where('title', 'LIKE', '%'.$text.'%')->orWhere('description', 'LIKE', '%'.$text.'%')->orWhere('advertiser_name', 'LIKE', '%'.$text.'%');
		}
	}

}
