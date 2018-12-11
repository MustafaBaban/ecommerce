<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function showAll(){
        $users = User::all();
        return view('users')->with('users',$users);
   }
}
