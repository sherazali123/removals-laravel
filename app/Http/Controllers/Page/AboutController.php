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
		return view($this->view_data['view_path_root'].'.index', $this->view_data);
	}


}
