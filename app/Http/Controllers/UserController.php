<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Reg;

class UserController extends Controller
{
    
    public function show_user()
    {
        $data['user'] = Reg::all();
        return view('user.show_user', $data);
    }

    
}
