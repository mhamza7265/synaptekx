<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingsPageContentController extends Controller
{
    public function edit()
    {
        $title = 'Edit Site Settings';
        return view('admin.pages.settings', compact('title'));
    }
}
