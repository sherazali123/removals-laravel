<?php namespace App\Http\Controllers\Page;

use App\Http\Requests;
use App\Http\Controllers\BaseController;

use Illuminate\Http\Request;

class AboutController extends BaseController {


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
    	parent::__construct();
        $this->view_data['view_path_root'] = 'page.about';
    	$this->view_data['page_title'] = $this->view_data['page_title'] .' - About';
    	
    }
	
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $this->view_data['text'] = 'Finding a reputable moving company in Korea can be hard work without the help of MIK. Using anyone else would be just a waste of time for you. MIK has a lot of experience with moving and deliveries with many different foreigners in Korea. We can deliver to all places in Korea anytime you would like through our vast networking services. MIK will help you to make your move easier and quicker. Reasonable quotes and reliable information is what MIK aims to provide to you.';
		return view($this->view_data['view_path_root'].'.index', $this->view_data);
	}


}
