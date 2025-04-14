<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogsPageContentController extends Controller
{
    public function edit()
    {
        $title = 'Edit Blogs Page Content';
        return view('admin.pages.blog_page.edit', compact('title'));
    }

    public function detailEdit()
    {
        //
    }
}
