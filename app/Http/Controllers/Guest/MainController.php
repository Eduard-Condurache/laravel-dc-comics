<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() 
    {
        return view('welcome');
    }

    public function about()
    {
        return view('pages.about');
    }
}
