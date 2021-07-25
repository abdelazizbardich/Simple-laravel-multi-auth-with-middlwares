<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
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
        // switch (Auth::user()->role) {
        //     case 'USR':
        //         return view('member.home');
        //         break;
        //     case 'ADM':
        //         return view('admin.home');
        //         break;
        //     case 'TRN':
        //         return view('trainer.home');
        //         break;
        //     default:
        //         return view('home');
        //     break;
        // }
        return view('home');
    }
}
