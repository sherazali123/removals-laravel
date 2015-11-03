<?php namespace App\Http\Controllers\Page;

use App\Http\Requests;
use App\Http\Controllers\BaseController;

use Illuminate\Http\Request;

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
		//
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
		$this->view_data['user_classic_ads'] = $this->view_data['classic_ad']->userClassicAds;
		
		$this->view_data['heading'] = $this->view_data['classic_ad']->title;

		$this->view_data['locations'] = Location::active()->orderBy('location')->lists('location', 'id');

		return view($this->view_data['view_path_root'].'.show', $this->view_data);
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
