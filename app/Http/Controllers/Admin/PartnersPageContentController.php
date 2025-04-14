<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PartnersPageContentController extends Controller
{
    public function edit()
    {
        $title = 'Edit partners page content';
        return view('admin.pages.partners.edit', compact('title'));
    }
}
