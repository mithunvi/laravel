<?php 

namespace App\Http\Controllers;

use App\Models\Reg;
use Illuminate\Http\Request;
use Session;
// use DB;

class HomeController extends Controller {

    function index() {
        $data['foo']=  "it's home";
        return view('home', $data);
    }
    public function do_reg(Request $request){
    	
    	$user = new Reg();
    	$user->name = $request->name;
    	$user->save();
    	
    	if($user->id){
    		Session::flash('success_message', 'Your data has been inserted');
    		return redirect('hosue');
    	}
    	

    }


}

?>