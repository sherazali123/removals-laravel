<?php namespace App\Http\Controllers\Api\v1;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Config;

use App\RentalService;
use App\PurchaseService;

class BoxRentalController extends Controller {

	/**
     * Intialize response array for current request
     *
     * @var string
     */
    public $response = array();

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {

    	// code here
    	
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		die("here");
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		die;		
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$input = $request->all();

		$res['status'] = 400;
		$res['message'] = '';
		$res['errors'] = [];

		$rental_services = RentalService::active()->get();
		$purchase_services = PurchaseService::active()->get();

		$data['cost'] = [];
		$data['cost']['rental_deposit_total'] = 0;
		$data['cost']['purchase_deposit_total'] = 0;
		$data['cost']['delivery_fee'] = (float) Config::get('constants.general')['delivery_fee'];
		$data['cost']['refund'] = (float) Config::get('constants.general')['refund'];
		$data['cost']['total_amount_due'] = 0;

		$data['rental_services'] = [];
		foreach ($rental_services as $rental_service) {
			if(!isset($input[$rental_service->id.'___rental'])){
				$res['message'] = 'An error occour, please refresh page and try again.';
				return response()->json($res);
			}
			$data['rental_services'][$rental_service->id]['title'] = $rental_service->title;
			$data['rental_services'][$rental_service->id]['quantity'] = (int) $input[$rental_service->id.'___rental'];
			$data['rental_services'][$rental_service->id]['unit_price'] = (float) $rental_service->price;
			$data['rental_services'][$rental_service->id]['price'] = $data['rental_services'][$rental_service->id]['quantity'] * $data['rental_services'][$rental_service->id]['unit_price'];
			$data['cost']['rental_deposit_total'] = $data['cost']['rental_deposit_total'] + $data['rental_services'][$rental_service->id]['price'];
		}

		
		$data['purchase_services'] = [];
		foreach ($purchase_services as $purchase_service) {
			if(!isset($input[$purchase_service->id.'___purchase'])){
				$res['message'] = 'An error occour, please refresh page and try again.';
				return response()->json($res);
			}
			$data['purchase_services'][$purchase_service->id]['title'] = $purchase_service->title;
			$data['purchase_services'][$purchase_service->id]['quantity'] = (int) $input[$purchase_service->id.'___purchase'];
			$data['purchase_services'][$purchase_service->id]['unit_price'] = (float) $purchase_service->price;
			$data['purchase_services'][$purchase_service->id]['price'] = $data['purchase_services'][$purchase_service->id]['quantity'] * $data['purchase_services'][$purchase_service->id]['unit_price'];
			$data['cost']['purchase_deposit_total'] = $data['cost']['purchase_deposit_total'] + $data['purchase_services'][$purchase_service->id]['price'];
		}

		$data['cost']['total_amount_due'] = $data['cost']['rental_deposit_total'] + $data['cost']['purchase_deposit_total'] + $data['cost']['delivery_fee'];

		$data['delievery_info'] = [];
		$data['delievery_info']['preferred_delivery_address'] = $input['preferred_delivery_address'];
		$data['delievery_info']['building_name'] = $input['building_name'];
		$data['delievery_info']['room_no'] = $input['room_no'];
		$data['delievery_info']['phone_no'] = $input['phone_no'];

		$data['bank_details'] = [];
		$data['bank_details']['bank_name'] = $input['bank_name'];
		$data['bank_details']['account_no'] = $input['account_no'];
		$data['bank_details']['reveiver_name'] = $input['reveiver_name'];

		$res['data'] = $data;

		$res['status'] = 200;

		return response()->json($res);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
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


	/**
	 * Email box rental details to owner
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function email(Request $request)
	{
		$res['status'] = 400;
		$res['message'] = '';
		$res['errors'] = [];

		$input = $request->all();

		$res['status'] = 200;

		return response()->json($res);

	}

}
