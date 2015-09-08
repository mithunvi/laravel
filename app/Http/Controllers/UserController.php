<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use App\Http\Requests;
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

    public function destroy($id)
    {
    	$data = Reg::where('id', $id)->first();
    	$data->delete();
    	// DB::table('reg')->where('id', '=', $id)->delete();
    	return redirect ('show_user');
    }
    public function edit($id)
    {
    	$data['user'] = DB::table('reg')->where('id', '=', $id)->first();
    	return view ('user.edit', $data);
    }

    public function update(Request $request, $id){
    	$data = Reg::find($id);
    	$data->name = $request->input('name');
    	$data->save();
    	echo 'data saved';
    }
}