<?php 

namespace App\Http\Controllers;

use App\Models\Reg;
use Illuminate\Http\Request;
use Session;
// use DB;



class HomeController extends Controller {
	
	 public function __construct() {
        //$this->middleware('guest');
        $this->middleware('auth');
    }

	
    public function home(){

        echo 'you are logged in';
    }
    
}

?>