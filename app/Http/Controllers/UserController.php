<?php

namespace AdvancedELOQUENT\Http\Controllers;

use Illuminate\Http\Request;
use AdvancedELOQUENT\User;

use AdvancedELOQUENT\Http\Requests;

class UserController extends Controller
{

    public function getUser($id){
        $user = User::find($id);
        
        return view('user', compact('user'));
    }

}
