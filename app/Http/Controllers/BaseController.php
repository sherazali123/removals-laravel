<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class BaseController extends Controller {

	/**
     * Intialize view data for current view
     *
     * @var string
     */
    public $view_data = array();

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        
        $this->view_data['page_title'] = 'Korea Moving Services';

        self::MetaData();
    }
	
    /**
     * Create default meta data for page
     *
     * @return void
     */
    private function MetaData(){
        $this->view_data['meta_data']['keywords'] = "removals, moving services, relocation, international removal, domesitc removal, transportation";
        $this->view_data['meta_data']['description'] = "removal and moving services for koreans";
        $this->view_data['meta_data']['author'] = "Sheraz Ali";
    }

    public function printArray($arr){
        echo '<pre>';
        print_r($arr);
        echo '</pre>';
        die;
    }

}
