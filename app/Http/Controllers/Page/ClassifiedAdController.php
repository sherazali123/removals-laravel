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
		$this->view_data['page_size'] = (int) Config::get('constants.general')['page_size'];

		$this->view_data['offset'] = (int) Input::get('offset', 0);
		$this->view_data['ajax'] = (bool) Input::get('ajax', false);

		if($this->view_data['offset'] < 0) {
			$this->view_data['offset'] = 0;
		}

		$this->view_data['page_no'] = $this->view_data['offset'] + 1;

		$search_query = Input::get('search_query', false);
		$location = Input::get('location', false);

		// var_dump($page_size, $page_no, $search_query);die;

		$this->view_data['classic_ad'] = ClassicAd::findBySlug($slug);

		$this->view_data['result_count'] = $this->view_data['classic_ad']->userClassicAds()->searchLocation($location)->searchText($search_query)->orderBy('created_at', 'desc')->count();

		$this->view_data['user_classic_ads'] = $this->view_data['classic_ad']->userClassicAds()->searchLocation($location)->searchText($search_query)->orderBy('created_at', 'desc')->take($this->view_data['page_size'])->skip($this->view_data['offset'] * $this->view_data['page_size'])->get();
		// echo count($this->view_data['user_classic_ads']);die;

		$this->view_data['heading'] = $this->view_data['classic_ad']->title;

		$this->view_data['locations'] = Location::active()->orderBy('location')->lists('location', 'id');
		if($this->view_data['ajax'] == true) {
			$returnHTML = view($this->view_data['view_path_root'].'.show_partials.list', $this->view_data)->render();
			return response()->json(array('status' => 200, 'html'=>$returnHTML));
		}
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
		$this->view_data['user_classic_ad'] = UserClassicAd::findBySlug($user_classic_ad_slug);

		$this->view_data['heading'] = $this->view_data['user_classic_ad']->title;
		$this->view_data['sub_heading'] = 'Added By <strong>'.$this->view_data['user_classic_ad']->advertiser_name.'</strong>';


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
