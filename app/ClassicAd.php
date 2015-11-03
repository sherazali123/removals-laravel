<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassicAd extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'classic_ads';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['number_in_row', 'title', 'slug', 'image', 'description', 'process'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = [];

	/**
	 * The benefits associated with ad
	 *
	 * @var object
	 */
	public function benefits(){	
		return $this->hasMany('App\ClassicAdBenefits');
	}

	/**
	 * The conditions associated with ad
	 *
	 * @var object
	 */
	public function conditions(){	
		return $this->hasMany('App\ClassicAdConditions');
	}

	/**
	 * The benefits associated with ad
	 *
	 * @var object
	 */
	public function processes(){	
		return $this->hasMany('App\ClassicAdProcesses');
	}

	/**
	 * The user classic ads associated with specific ad
	 *
	 * @var object
	 */
	public function userClassicAds(){	
		return $this->hasMany('App\UserClassicAd');
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
	 * Scope: find ad by value of slug (which is unique)
	 *
	 * @var collection
	 */
	public function scopeFindBySlug($query, $slug){	
		return $query->where('slug', '=', $slug)->first();
	}
}
