<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;

class BlogsPageContentController extends Controller
{
    public function edit()
    {
        $title = 'Edit Blogs Page Content';
        $page = Page::where('slug', 'blogs')->first();
        return view('admin.pages.blog_page.edit', compact('title', 'page'));
    }

    public function detailEdit()
    {
        //
    }
}
