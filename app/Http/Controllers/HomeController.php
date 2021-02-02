<?php

namespace App\Http\Controllers;
use App\Campu;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $idcam = session('campu_id');
        
        $campus = Campu::find($idcam,['campusname']);
    //  return view('home');
        return view('/home',compact('campus'));
    }
}
