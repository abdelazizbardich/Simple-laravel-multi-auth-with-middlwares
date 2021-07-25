<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrainerController extends Controller
{
    //

    public function getDashboard(){
        return view("trainer.home");
    }
}
