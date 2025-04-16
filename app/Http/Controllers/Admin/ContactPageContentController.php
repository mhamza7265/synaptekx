<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;

class ContactPageContentController extends Controller
{
    public function edit()
    {
        $title = 'Edit Contact Page Content';
        $page = Page::where('slug', 'contact-us')->first();
        return view('admin.pages.contact.edit', compact('title', 'page'));
    }

    public function updateHero(Request $request)
    {
        $request->validate([
            'hero_title' => 'required',
            'bg_file' => 'required',
        ]);

        $page = Page::where('slug', 'contact-us')->firstOrFail();

        // New hero section data
        $hero = [
            'hero' => [
                'hero_title' => $request->hero_title,
                'hero_image' => $request->bg_file,
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

    public function updateDetails(Request $request)
    {
        $request->validate([
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);

        $page = Page::where('slug', 'contact-us')->firstOrFail();

        // New hero section data
        $details = [
            'details' => [
                'address' => $request->address,
                'phone' => $request->phone,
                'email' => $request->email,
            ]
        ];

        // Decode existing sections or start with an empty array
        $sections = $page->sections ?? [];

        // Overwrite or add the 'hero' section
        $sections['details'] = $details['details'];

        // Update and save
        $page->sections = $sections;
        $page->save();

        return redirect()->back()->with('success', 'Contact details updated.');
    }
}
