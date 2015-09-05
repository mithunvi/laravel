<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Reg;
use DB;
use Redirect;

class UserController extends Controller
{
    
    public function show_user()
    {
        $data['user'] = Reg::all();
        return view('user.show_user', $data);
    }

    public function destroy($id){
    	DB::table('reg')->where('id', '=', $id)->delete();
    	return redirect ('show_user');
    }

    
}
