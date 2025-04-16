<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;

class HomePageContentController extends Controller
{
    public function edit()
    {
        $title = 'Edit Home Page Content';
        $page = Page::where('slug', 'home')->first();
        return view('admin.pages.home.edit', compact('title', 'page'));
    }

    public function updateHero(Request $request)
    {
        // dd($request->all());
        // Clean up empty values in arrays before validation
        $request->merge([
            'bg_type' => array_filter($request->input('bg_type', [])),
            'bg_file' => array_filter($request->input('bg_file', [])),
            'hero_title' => array_filter($request->input('hero_title', [])),
            'hero_subtitle' => array_filter($request->input('hero_subtitle', [])),
        ]);

        $request->validate([
            'bg_type' => 'required|array|min:1',
            'bg_file' => 'required|array|min:1',
            'hero_title' => 'required|array|min:1',
            'hero_subtitle' => 'required|array|min:1',
        ]);

        $page = Page::where('slug', 'home')->first();

        $heroSections = [];

        foreach ($request->hero_title as $key => $value) {
            $bgType = $request->bg_type[$key];
            $bgFile = $request->bg_file[$key];
            $heroSubtitle = $request->hero_subtitle[$key];
            $heroSections[$key] = [
                'bg_type' => $bgType,
                'bg_file' => $bgFile,
                'hero_title' => $value,
                'hero_subtitle' => $heroSubtitle,
            ];
        }

        $hero = [
            'hero_sections' => $heroSections,
        ];

        // Decode existing sections or start with an empty array
        $sections = $page->sections ?? [];

        // Overwrite or add the 'hero' section
        $sections['hero_sections'] = $hero['hero_sections'];

        // Update and save
        $page->sections = $sections;
        $page->save();

        return redirect()->back()->with('success', 'Hero section(s) updated.');
    }

    public function updateServices(Request $request)
    {
        dd($request->all());
    }
}
