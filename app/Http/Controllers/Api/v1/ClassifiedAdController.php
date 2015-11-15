<?php namespace App\Http\Controllers\Api\v1;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Validator;
use Redirect;
use Session;
use Image;

use App\ClassicAd;
use App\UserClassicAd;
use App\UserClassicAdImage;
use App\Location;
use App\Item;

class ClassifiedAdController extends Controller {

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
		$input = $request->only('title', 'location', 'email', 'phone_no', 'month', 'year', 'comment', 'classic_ad_id', 'images');
		
		$classic_ad = ClassicAd::find($input['classic_ad_id']);
		
		$rules = [
								        'title' => 'required|max:255',
								        'location' => 'required',
								        'email' => 'required|email',
								        'phone_no' => 'required|numeric',
								        'month' => 'required|numeric',
								        'year' => 'required|numeric',
								        'comment' => 'required|max:1500',
								        'classic_ad_id' => 'required|numeric',
								    ];

		if($classic_ad->type == 0){
			$this->validate($request, $rules);
		} else {
			$this->validate($request, $rules + ['images' => 'required']);

			$files = $input['images'];

			$file_count = count($files);

			if($file_count > 0){
				// start count how many uploaded
			    $uploadcount = 0;

			    foreach($files as $file) {
			      $rules = array('file' => 'required|mimes:png,gif,jpeg,jpg'); //'required|mimes:png,gif,jpeg,txt,pdf,doc'
			      $validator = Validator::make(array('file'=> $file), $rules);
			      // var_dump($validator->messages());die;
			      if($validator->passes()){
			        $uploadcount ++;
			      }
			    }

			    if($uploadcount != $file_count){
				     Session::flash('error', 'File (s) is not valid.');
				     return Redirect::to('/classified-ad/create?ad='.$classic_ad->slug);
				} 
			}
		}


		$input['slug'] = $this->makeUserAdSlug($input['title']);
		// var_dump($input);die;
		if($classic_ad->type == 1){

			$files = $input['images'];

			$file_count = count($files);

			if($file_count > 0){
				// start count how many uploaded
			    $uploadcount = 0;

			    foreach($files as $file) {
			      $rules = array('file' => 'required|mimes:png,gif,jpeg,jpg'); //'required|mimes:png,gif,jpeg,txt,pdf,doc'
			      $validator = Validator::make(array('file'=> $file), $rules);
			      // var_dump($validator->messages());die;
			      if($validator->passes()){
			        $destinationPath = 'uploads/user_classic_ads/'.$input['slug'];
			        if (!file_exists($destinationPath)) {
						    mkdir($destinationPath, 0777, true);
					}
			        // var_dump($file);die;
			        $filename = $file->getClientOriginalName();
			        $upload_success = $file->move($destinationPath, $filename);

			        // $full_path = public_path($destinationPath.'/' . $filename);
			        // Image::make($file->getRealPath())->resize(20, 20)->save($full_path);

			        $uploadcount ++;
			      }
			    }
			}
		     
		}
		


		$new_user_classic_ad = UserClassicAd::create([
			'title' => $input['title'],
			'location_id' => $input['location'],
			'slug' => $input['slug'],
			'advertiser_email' => $input['email'],
			'advertiser_name' => $input['email'],
			'advertiser_telephone' => $input['phone_no'],
			'month' => $input['month'],
			'year' => $input['year'],
			'status' => 0,
			'classic_ad_id' => $input['classic_ad_id'],
			'description' => $input['comment'],
			]);

		if($classic_ad->type == 1){ 
			foreach ($files as $file) {
				UserClassicAdImage::create([
					'image' => 'uploads/user_classic_ads/'.$input['slug'].'/'.$file->getClientOriginalName(),
					'status' => 0,
					'user_classic_ad_id' => $new_user_classic_ad->id
					]);
			}
		}
		return redirect('/classified-ad/'.$classic_ad->slug);
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
	 * Create a unique slug for ad added by user
	 *
	 * @param  string  $title
	 * @return string $slug
	 */
	public function makeUserAdSlug($title)
	{
		$slug = str_replace(' ', '_', $title);

		do{

			$isSlugExists = UserClassicAd::findBySlug($slug);
			if($isSlugExists->count() === 0) {
				break;
			}
			else {
				$slug = time().'_'.$slug;
			}

		}while (true);
		return $slug;
	}


}
