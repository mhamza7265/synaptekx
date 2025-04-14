<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LegalPagesContentController extends Controller
{
    public function privacyPolicy()
    {
        $title = 'Edit privacy policy page';
        return view('admin.pages.legal.privacy-policy', compact('title'));
    }

    public function cookiesPolicy()
    {
        $title = 'Edit cookies policy page';
        return view('admin.pages.legal.cookies-policy', compact('title'));
    }

    public function terms()
    {
        $title = 'Edit privacy policy page';
        return view('admin.pages.legal.terms-of-use', compact('title'));
    }
}
