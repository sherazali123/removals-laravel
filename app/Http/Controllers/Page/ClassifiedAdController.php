<?php namespace App\Http\Controllers\Page;

use App\Http\Requests;
use App\Http\Controllers\BaseController;

use Illuminate\Http\Request;
use Input;
use Config;
use Validator;
use Redirect;
use Session;

use App\ClassicAd;
use App\UserClassicAd;
use App\Location;

class ClassifiedAdController extends BaseController {


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
    	parent::__construct();
        $this->view_data['view_path_root'] = 'page.classified-ad'; 
    	$this->view_data['page_title'] = $this->view_data['page_title'] .' - Classified Ad';

    	$this->view_data['heading'] = 'Classified Ads';
		$this->view_data['sub_heading'] = 'Select from the following ads and view/post your ad!';
    	
    }
	
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
		$this->view_data['classic_ads'] = ClassicAd::active()->orderBy('number_in_row')->get();
		return view($this->view_data['view_path_root'].'.index', $this->view_data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$slug  = Input::get('ad');
		$this->view_data['classic_ad'] = ClassicAd::findBySlug($slug);

		$this->view_data['locations'] = Location::active()->orderBy('location')->lists('location', 'id');
		$this->view_data['months'] = Config::get('constants.months');
		$this->view_data['years'] = Config::get('constants.years');

		return view($this->view_data['view_path_root'].'.create', $this->view_data);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($slug)
	{
		$this->view_data['classic_ad'] = ClassicAd::findBySlug($slug);

		$this->view_data['user_classic_ads'] = $this->view_data['classic_ad']->userClassicAds()->orderBy('created_at', 'desc')->get();
		
		$this->view_data['heading'] = $this->view_data['classic_ad']->title;

		$this->view_data['locations'] = Location::active()->orderBy('location')->lists('location', 'id');

		return view($this->view_data['view_path_root'].'.show', $this->view_data);
	}

	/**
	 * Show the single ad added by user
	 *
	 * @return Response
	 */
	public function showSingleAd($classic_ad_slug, $user_classic_ad_slug)
	{
		$this->view_data['classic_ad'] = ClassicAd::findBySlug($classic_ad_slug);
		$this->view_data['user_classic_ad_slug'] = UserClassicAd::findBySlug($user_classic_ad_slug);

		$this->view_data['heading'] = $this->view_data['user_classic_ad_slug']->title;
		$this->view_data['sub_heading'] = 'Added By <strong>'.$this->view_data['user_classic_ad_slug']->advertiser_name.'</strong>';

		$this->view_data['locations'] = Location::active()->orderBy('location')->lists('location', 'id');
		$this->view_data['months'] = Config::get('constants.months');
		$this->view_data['years'] = Config::get('constants.years');

		return view($this->view_data['view_path_root'].'.single_ad', $this->view_data);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
