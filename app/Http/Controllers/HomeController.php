<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::User()->type=='0'){

//            dd('this is an admin');

            return view('layouts.admin.app');
        } elseif(Auth::User()->type=='1'){

//            dd('this is a user');

            return view('layouts.user.app');
        }
//        return view('home');
    }
}
