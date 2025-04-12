<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactPageContentController extends Controller
{
    public function edit()
    {
        $title = 'Edit Contact Page Content';
        return view('admin.pages.contact.edit', compact('title'));
    }
}
