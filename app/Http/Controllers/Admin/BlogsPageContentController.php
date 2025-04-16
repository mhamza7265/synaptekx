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

    public function updateBlogsHero(Request $request)
    {
        $request->validate([
            'hero_title' => 'required',
            'bg_image' => 'required',
        ]);

        $page = Page::where('slug', 'blogs')->firstOrFail();

        // New hero section data
        $hero = [
            'hero' => [
                'hero_title' => $request->hero_title,
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

    public function updateBlogsDetails(Request $request)
    {
        $request->validate([
            'section_title' => 'required',
        ]);

        $page = Page::where('slug', 'blogs')->firstOrFail();

        // New hero section data
        $hero = [
            'section_title' => $request->section_title,
        ];

        // Decode existing sections or start with an empty array
        $sections = $page->sections ?? [];

        // Overwrite or add the 'hero' section
        $sections['section_title'] = $hero['section_title'];

        // Update and save
        $page->sections = $sections;
        $page->save();

        return redirect()->back()->with('success', 'Section title updated.');
    }

    public function detailEdit()
    {
        //
    }
}
