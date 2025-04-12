<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;



class AdminController extends Controller
{
    public function index()
    {
        return view('admin.pages.index')->with('title', 'Dashboard');
    }

    public function pages()
    {
        return view('admin.pages.pages')->with('title', 'Pages');
    }
}
