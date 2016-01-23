<?php namespace App\Http\Controllers\Page;

use App\Http\Requests;
use App\Http\Controllers\BaseController;

use Input;
use Config;

use Illuminate\Http\Request;

use App\Item;

class QuatationController extends BaseController {


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        parent::__construct();
        $this->view_data['view_path_root'] = 'page.quatation';
        $this->view_data['page_title'] = $this->view_data['page_title'] .' - Quotation';

        $this->view_data['heading'] = 'Ask for a quotation';
        $this->view_data['sub_heading'] = 'Complete the following steps complete the quotation!';

    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $this->view_data['pessengers'] = Config::get('constants.pessengers');
        $this->view_data['quantities'] = Config::get('constants.quantity');
        $this->view_data['floors'] = Config::get('constants.floors');
        $this->view_data['elevators'] = Config::get('constants.elevators');

         $this->view_data['items_1']['name'] = "Small goods (one person moveable)";
         $this->view_data['items_1']['list'] = Item::byType(1)->active()->orderBy('number_in_row')->get();

         $this->view_data['items_2']['name'] = "Larger goods (two person moveable)";
         $this->view_data['items_2']['list'] = Item::byType(2)->active()->orderBy('number_in_row')->get();

         $this->view_data['items_3']['name'] = "Goods that need to be dissemble and assemble";
         $this->view_data['items_3']['list'] = Item::byType(3)->active()->orderBy('number_in_row')->get();

        return view($this->view_data['view_path_root'].'.index', $this->view_data);
	}

}
