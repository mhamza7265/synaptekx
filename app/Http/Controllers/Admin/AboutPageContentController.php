<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutPageContentController extends Controller
{
    public function edit()
    {
        $title = 'Edit About Page Content';
        return view('admin.pages.about.edit', compact('title'));
    }
}
