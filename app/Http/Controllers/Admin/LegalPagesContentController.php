<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;

class LegalPagesContentController extends Controller
{
    public function privacyPolicy()
    {
        $title = 'Edit privacy policy page';
        $page = Page::where('slug', 'privacy-policy')->first();
        return view('admin.pages.legal.privacy-policy', compact('title', 'page'));
    }

    public function cookiesPolicy()
    {
        $title = 'Edit cookies policy page';
        $page = Page::where('slug', 'cookies-policy')->first();
        return view('admin.pages.legal.cookies-policy', compact('title', 'page'));
    }

    public function terms()
    {
        $title = 'Edit terms of website use page';
        $page = Page::where('slug', 'terms-of-website-use')->first();
        return view('admin.pages.legal.terms-of-use', compact('title', 'page'));
    }
}
