<?php namespace App\Http\Controllers\Blog;

use App\Http\Requests;
use App\Http\Controllers\BaseController;

use Illuminate\Http\Request;

class IndexController extends BaseController {


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
    	parent::__construct();
		$this->view_data['view_path_root'] = 'blog.index';
        $this->view_data['page_title'] = $this->view_data['page_title'] .' - Blog';
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
