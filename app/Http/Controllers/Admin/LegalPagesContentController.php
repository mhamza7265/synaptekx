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

    public function updateHero(Request $request, $slug)
    {
        $request->validate([
            'title' => 'required',
            'bg_image' => 'required',
        ]);

        $page = Page::where('slug', $slug)->firstOrFail();

        // New hero section data
        $hero = [
            'hero' => [
                'hero_title' => $request->title,
                'hero_image' => $request->bg_image,
            ]
        ];

        // Decode existing sections or start with an empty array
        $sections = $page->sections ?? [];

        // Overwrite or add the 'hero' section
        $sections['hero'] = $hero['hero'];

        // Update and save
        $page->sections = $sections;
        $page->save();

        return redirect()->back()->with('success', 'Hero section updated.');
    }

    public function updateContent(Request $request, $slug)
    {
        $fieldToValidate = '';

        switch ($slug) {
            case 'privacy-policy':
                $fieldToValidate = 'privacy_policy_content';
                break;
            case 'cookies-policy':
                $fieldToValidate = 'cookie_policy_content';
                break;
            case 'terms-of-website-use':
                $fieldToValidate = 'terms_of_use_content';
                break;
            default:
                abort(404);
        }

        $request->validate([
            $fieldToValidate => 'required',
        ]);

        $page = Page::where('slug', $slug)->firstOrFail();

        // New hero section data
        $content = [
            'content' => $request->$fieldToValidate,
        ];

        // Decode existing sections or start with an empty array
        $sections = $page->sections ?? [];

        // Overwrite or add the 'hero' section
        $sections['content'] = $content['content'];

        // Update and save
        $page->sections = $sections;
        $page->save();

        return redirect()->back()->with('success', 'Content updated.');
    }
}
