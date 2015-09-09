<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Reg;
use Redirect;
use DB;
use Session;

class UserController extends Controller
{
    public function index(){

        $user['pol'] ="it's life";
        return view ('home',$user);
    }
    public function insert(Request $request){

        $data = new Reg ();
        $data ->name =$request->name;
        $data ->email =$request->email;
        $data ->save();
    }

    public function show_user(){

        $user ['data'] = Reg:: all();
        return view ('user.show_user',$user);
    }
    public function delete($id){

        $data = Reg:: where ('id',$id)->first();
        $data->delete();
        return redirect ('show_user'); 
    }

    public function edit ($id){
        $data['user'] = DB::table('reg')->where('id', '=', $id)->first();
        //$data['user'] = DB::table('reg')->where('id',$id)->first();
        return view ('user.edit',$data);
    }

    public function update (Request $request,$id){

        $data = Reg::find($id);
        $data ->name = $request->input('name'); 
        $data ->email = $request->input('email'); 
        $data ->save();
    }
    
}
