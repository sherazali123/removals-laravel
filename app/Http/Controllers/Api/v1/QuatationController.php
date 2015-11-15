<?php namespace App\Http\Controllers\Api\v1;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Config;
use Input;
use Mail;

use App\Item;

use Illuminate\Http\Request;

class QuatationController extends Controller {
	
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
	public function store(Request $request)
	{
		$res['status'] = 400;
		$res['message'] = '';
		$res['errors'] = [];

		// $input = $request->only('firstname_quote', 'lastname_quote', 'email_quote', 'phone_quote', 'date_quote', 'time_quote', 'passengers', 'pickup_addr', 'pickup_building', 'pickup_floors', 'pickup_room_no', 'pickup_elevator', 'delivery_addr', 'delivery_building', 'delivery_floors', 'delivery_room_no' , 'delivery_elevator');
		$input = $request->all();

		$data = $input;
		
		$rules = [
								        'firstname_quote' => 'required|max:150',
								        'lastname_quote' => 'required|max:150',
								        'email_quote' => 'required|email',
								        'phone_quote' => 'required|numeric',
								        'date_quote' => 'required|max:20',
								        'passengers' => 'required|numeric',
								        'pickup_addr' => 'required|max:255',
								        'pickup_building' => 'required|max:255',
								        'pickup_floors' => 'required|numeric',
								        'pickup_room_no' => 'required|numeric',
								        'pickup_elevator' => 'required|max:3',
								        'delivery_addr' => 'required|max:255',
								        'delivery_building' => 'required|max:255',
								        'delivery_floors' => 'required|numeric',
								        'delivery_room_no' => 'required|numeric',
								        'delivery_elevator' => 'required|max:3',
								        'message_quote' => 'required|max:1000'
								    ];
		$this->validate($request, $rules);

		$items = Item::active()->orderBy('number_in_row')->get();

		foreach ($items as $item) {
			if(!isset($input[$item->id.'___quantity'])){
				$res['message'] = 'An error occour, please refresh page and try again.';
				return response()->json($res);
			}
			$data['selected_items'][$item->id]['title'] = $item->title;
			$data['selected_items'][$item->id]['image'] = $item->image;
			$data['selected_items'][$item->id]['quantity'] = (int) $input[$item->id.'___quantity'];
		}

		$res['data'] = $data;
		$res['status'] = 200;

		Mail::send('emails.quotation', $res, function ($m) use ($data) {
            $m->to(Config::get('constants.admin')['email'], Config::get('constants.admin')['name'])->subject($data['firstname_quote'].' has filled a quotation for you.');
        });
		return redirect('/box-rental');
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

}
