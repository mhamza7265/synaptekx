<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;

class AboutPageContentController extends Controller
{
    public function edit()
    {
        $title = 'Edit About Page Content';
        $page = Page::where('slug', 'about-us')->first();
        return view('admin.pages.about.edit', compact('title', 'page'));
    }
}
