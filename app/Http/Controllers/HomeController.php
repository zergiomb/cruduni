<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    
    
    public function index()
    {
     $users = User::get();
        return view('home',compact('users'));
    }
    
    //
}
