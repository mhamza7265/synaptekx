<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;

class AboutPageContentController extends Controller
{
    public function edit()
    {
        $title = 'Edit About Page Content';
        $page = Page::where('slug', 'about-us')->first();
        return view('admin.pages.about.edit', compact('title', 'page'));
    }

    public function updateHero(Request $request)
    {
        $request->validate([
            'bg_image' => 'required',
            'hero_title' => 'required',
            'hero_subtitle' => 'required',
        ]);

        $page = Page::where('slug', 'about-us')->first();

        $hero = [
            'hero_section' => [
                'bg_image' => $request->input('bg_image'),
                'hero_title' => $request->input('hero_title'),
                'hero_subtitle' => $request->input('hero_subtitle'),
            ],
        ];

        // Decode existing sections or start with an empty array
        $sections = $page->sections ?? [];

        // Overwrite or add the 'hero' section
        $sections['hero_section'] = $hero['hero_section'];

        // Update and save
        $page->sections = $sections;
        $page->save();

        return redirect()->back()->with('success', 'Hero section updated successfully!');
    }

    public function updateFeatures(Request $request)
    {
        $request->merge([
            'section_title' => array_filter($request->input('section_title', [])),
            'section_desc' => array_filter($request->input('section_desc', [])),
            'section_image' => array_filter($request->input('section_image', [])),
        ]);

        $request->validate([
            'section_title' => 'required|array|min:1',
            'section_desc' => 'required|array|min:1',
            'section_image' => 'required|array|min:1',
        ]);

        $page = Page::where('slug', 'about-us')->firstOrFail();

        // Prepare new feature sections
        $newFeatureSections = [];
        foreach ($request->section_title as $key => $value) {
            $newFeatureSections[] = [
                'type' => 'repeating',
                'group' => 'features',
                'title' => $value,
                'data' => [
                    'section_title' => $value,
                    'section_desc' => $request->section_desc[$key],
                    'section_image' => $request->section_image[$key],
                ],
            ];
        }

        // Load and decode existing sections
        $sections = $page->sections ?? [];

        // Make sure 'all' key exists
        $sections['all'] = $sections['all'] ?? [];

        // Remove old 'features' grouped sections from 'all'
        $sections['all'] = array_filter($sections['all'], function ($section) {
            return !(
                isset($section['type'], $section['group']) &&
                $section['type'] === 'repeating' &&
                $section['group'] === 'features'
            );
        });

        // Merge in new features
        $sections['all'] = array_merge($sections['all'], $newFeatureSections);

        // Save back to DB
        $page->sections = $sections;
        $page->save();

        return redirect()->back()->with('success', 'Feature sections updated!');
    }

    public function deleteFeatureSection(Request $request, $index)
    {
        // dd($request->all());
        $request->validate([
            'type' => 'required|string',
            'group' => 'required|string',
        ]);

        $page = Page::where('slug', 'about-us')->firstOrFail();
        $sections = $page->sections;

        if (!isset($sections['all']) || !is_array($sections['all'])) {
            return response()->json(['success' => false, 'message' => 'No sections found.'], 404);
        }

        $targetSection = $sections['all'][$index] ?? null;

        if (
            !$targetSection ||
            $targetSection['type'] !== $request->type ||
            $targetSection['group'] !== $request->group
        ) {
            return redirect()->back()->with('success', 'Section not found or mismatch.');
        }

        // Remove and reindex
        unset($sections['all'][$request->index]);
        $sections['all'] = array_values($sections['all']); // important to avoid gaps

        $page->sections = $sections;
        $page->save();

        return redirect()->back()->with('success', 'Section deleted successfully.');
    }

    public function updateStickySection(Request $request)
    {
        $request->merge([
            'detail_title' => array_filter($request->input('detail_title', [])),
            'detail_description' => array_filter($request->input('detail_description', [])),
        ]);

        $request->validate([
            'section_title' => 'required|string',
            'detail_title' => 'required|array',
            'detail_description' => 'required|array',
        ]);

        $page = Page::where('slug', 'about-us')->firstOrFail();

        $details = [];
        foreach ($request->detail_title as $index => $title) {
            $desc = $request->detail_description[$index] ?? null;

            // You may want to skip empty rows
            if ($title || $desc) {
                $details[] = [
                    'title' => $title,
                    'description' => $desc,
                ];
            }
        }

        $newSection = [
            'type' => 'unique',
            'group' => 'scroll_section',
            'title' => $request->section_title,
            'data' => [
                'details' => $details,
            ],
        ];

        // insert/update into sections['all']
        $sections = $page->sections ?? [];
        $sections['all'] = $sections['all'] ?? [];

        // find index of existing unique_1 if exists
        $existingIndex = collect($sections['all'])->search(function ($item) {
            return $item['type'] === 'unique' && $item['group'] === 'scroll_section';
        });

        if ($existingIndex !== false) {
            $sections['all'][$existingIndex] = $newSection;
        } else {
            $sections['all'][] = $newSection;
        }

        $page->sections = $sections;
        $page->save();

        return redirect()->back()->with('success', 'Section updated successfully!');
    }

    public function deleteDetail($index)
    {
        $page = Page::where('slug', 'about-us')->firstOrFail();
        $sections = $page->sections ?? [];
        $sections['all'] = $sections['all'] ?? [];

        // Find the target section using type + group
        $sectionIndex = collect($sections['all'])->search(function ($item) {
            return $item['type'] === 'unique' && $item['group'] === 'scroll_section';
        });

        if ($index === false) {
            return redirect()->back()->withErrors(['Section not found.']);
        }

        // Get section reference
        $targetSection = &$sections['all'][$index];

        // Delete the detail by index
        if (isset($targetSection['data']['details'][$index])) {
            unset($targetSection['data']['details'][$index]);

            // Reindex the details array to keep it clean
            $targetSection['data']['details'] = array_values($targetSection['data']['details']);

            $page->sections = $sections;
            $page->save();

            return redirect()->back()->with('success', 'Detail deleted successfully.');
        }

        return redirect()->back()->withErrors(['Detail not found.']);
    }

    public function updateFeaturesTwo(Request $request)
    {
        // dd($request->all());
        $request->merge([
            'section_title' => array_filter($request->input('section_title', [])),
            'section_desc' => array_filter($request->input('section_desc', [])),
            'feat_image' => array_filter($request->input('feat_image', [])),
        ]);

        $request->validate([
            'section_title' => 'required|array|min:1',
            'section_desc' => 'required|array|min:1',
            'feat_image' => 'required|array|min:1',
        ]);

        $page = Page::where('slug', 'about-us')->firstOrFail();

        // Prepare new feature sections
        $newFeatureSections = [];
        foreach ($request->section_title as $key => $value) {
            $newFeatureSections[] = [
                'type' => 'repeating_2',
                'group' => 'features_2',
                'title' => $value,
                'data' => [
                    'section_title' => $value,
                    'section_desc' => $request->section_desc[$key],
                    'section_image' => $request->feat_image[$key],
                ],
            ];
        }

        // Load and decode existing sections
        $sections = $page->sections ?? [];

        // Make sure 'all' key exists
        $sections['all'] = $sections['all'] ?? [];

        // Remove old 'features' grouped sections from 'all'
        $sections['all'] = array_filter($sections['all'], function ($section) {
            return !(
                isset($section['type'], $section['group']) &&
                $section['type'] === 'repeating_2' &&
                $section['group'] === 'features_2'
            );
        });

        // Merge in new features
        $sections['all'] = array_merge($sections['all'], $newFeatureSections);

        // Save back to DB
        $page->sections = $sections;
        $page->save();

        return redirect()->back()->with('success', 'Feature sections updated!');
    }
}
