<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\bricole;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $bricoles = bricole::all();
 
        return view('welcome',compact('bricoles'));
    }
}
