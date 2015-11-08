<?php namespace App\Http\Controllers\Page;

use App\Http\Requests;
use App\Http\Controllers\BaseController;

use Illuminate\Http\Request;
use Config;

use App\RentalService;
use App\PurchaseService;

class BoxRentalController extends BaseController {


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
    	parent::__construct();
    	$this->view_data['page_title'] = $this->view_data['page_title'] .' - Box Rental';
    	$this->view_data['view_path_root'] = 'page.box-rental';

    }
	
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$this->view_data['rental_services'] = RentalService::active()->get();
		$this->view_data['purchase_services'] = PurchaseService::active()->get();

		$this->view_data['quantities'] = Config::get('constants.quantity');

		$this->view_data['cost'] = [];
		$this->view_data['cost']['rental_deposit_total'] = 0;
		$this->view_data['cost']['purchase_deposit_total'] = 0;
		$this->view_data['cost']['delivery_fee'] = (float) Config::get('constants.general')['delivery_fee'];
		$this->view_data['cost']['refund'] = (float) Config::get('constants.general')['refund'];
		$this->view_data['cost']['total_amount_due'] = $this->view_data['cost']['rental_deposit_total'] + $this->view_data['cost']['purchase_deposit_total'] + $this->view_data['cost']['delivery_fee'];



		return view($this->view_data['view_path_root'].'.index', $this->view_data);
	}

}
