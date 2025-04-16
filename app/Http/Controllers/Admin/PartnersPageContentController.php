<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;

class PartnersPageContentController extends Controller
{
    public function edit()
    {
        $title = 'Edit partners page content';
        $page = Page::where('slug', 'partners')->first();
        return view('admin.pages.partners.edit', compact('title', 'page'));
    }
}
