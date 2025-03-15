<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $title = "Home Page";
        return view('frontend.pages.home', compact('title'));
    }

    public function services()
    {
        $title = "Services";
        return view('frontend.pages.services', compact('title'));
    }
}
