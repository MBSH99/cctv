<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //User view other user register
    public function viewUser()
    {
        $user = auth()->user();
        $user = User::all();
        return view('#', ['users' => $user]);
    }

    //register user
    public function RegisterUser(Request $request)
    {
       
    }

    //Login User
    public function loginUser(Request $request)
    {

    }
}
