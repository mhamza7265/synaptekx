<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Services;
use App\Models\Blog;



class AdminController extends Controller
{
    public function index()
    {
        $services = Services::all();
        $blogs = Blog::all();
        $title = 'Dashboard';
        return view('admin.pages.index', compact('title', 'services', 'blogs'));
    }

    public function pages()
    {
        $pages = Page::get();
        return view('admin.pages.pages', compact('pages'));
    }
}
