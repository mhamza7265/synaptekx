<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Services;

class ServicesController extends Controller
{
    public function updatePageData(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'page_icon' => 'required',
        ]);

        $service = Services::findOrFail($id);

        $service->name = $request->input('name');
        $service->page_icon = $request->input('page_icon');
        $service->save();

        return redirect()->back()->with('success', 'Page data updated successfully!');
    }

    public function updateHero(Request $request, $id)
    {
        $request->validate([
            'bg_image' => 'required',
            'hero_title' => 'required',
            'hero_subtitle' => 'required',
        ]);

        $service = Services::findOrFail($id);
        $sections = $service->sections ?? [];

        // Build new hero section structure
        $heroSection = [
            'bg_image' => $request->input('bg_image'),
            'hero_title' => $request->input('hero_title'),
            'hero_subtitle' => $request->input('hero_subtitle'),
        ];

        // Extract the existing all sections (if any), ignoring previous hero_section
        $allSections = $sections['all'] ?? [];

        // Set the new sections array with separate hero_section and grouped all
        $service->sections = [
            'hero_section' => $heroSection,
            'all' => array_values($allSections),
        ];

        $service->save();

        return redirect()->back()->with('success', 'Hero section updated successfully!');
    }

    public function updateFeatureSection(Request $request, $id)
    {
        $request->validate([
            'section_title' => 'required|string',
            'detail_title' => ['required', 'array', 'min:1'],
            'detail_description' => ['required', 'array', 'min:1'],
        ]);

        $service = Services::findOrFail($id);
        $sections = $service->sections ?? [];

        $heroSection = $sections['hero_section'] ?? null;
        $allSections = $sections['all'] ?? [];

        $detailTitles = $request->input('detail_title', []);
        $detailDescriptions = $request->input('detail_description', []);

        $details = [];

        foreach ($detailTitles as $index => $title) {
            $details[] = [
                'detail_title' => $title,
                'detail_description' => $detailDescriptions[$index] ?? null,
            ];
        }

        $updated = false;

        foreach ($allSections as $i => $section) {
            if (
                ($section['type'] ?? '') === 'repeating' &&
                ($section['group'] ?? '') === 'features'
            ) {
                $allSections[$i]['title'] = $request->section_title;
                $allSections[$i]['data']['details'] = $details;
                $updated = true;
                break;
            }
        }

        if (! $updated) {
            $allSections[] = [
                'type'  => 'repeating',
                'group' => 'features',
                'title' => $request->section_title,
                'data'  => [
                    'details' => $details,
                ],
            ];
        }

        $service->sections = [
            'hero_section' => $heroSection,
            'all' => array_values($allSections),
        ];

        $service->save();

        return back()->with('success', 'Features section updated successfully!');
    }

    public function deleteFeatureDetail($serviceId, $detailIndex)
    {
        $service = Services::findOrFail($serviceId);
        $sections = $service->sections ?? [];

        $heroSection = $sections['hero_section'] ?? null;
        $allSections = $sections['all'] ?? [];

        foreach ($allSections as $i => $section) {
            if (
                ($section['type'] ?? '') === 'repeating' &&
                ($section['group'] ?? '') === 'features'
            ) {
                $details = $section['data']['details'] ?? [];

                if (isset($details[$detailIndex])) {
                    unset($details[$detailIndex]);

                    // Reindex the array to remove gaps
                    $allSections[$i]['data']['details'] = array_values($details);

                    // Save and respond
                    $service->sections = [
                        'hero_section' => $heroSection,
                        'all' => array_values($allSections),
                    ];

                    $service->save();

                    return back()->with('success', 'Detail removed successfully!');
                } else {
                    return back()->with('error', 'Detail not found!');
                }
            }
        }

        return back()->with('error', 'Features section not found!');
    }

    public function updateTransformSection(Request $request, $id)
    {
        $request->validate([
            'section_title' => 'required|string',
            'infograph'     => 'required|string',
        ]);

        $service = Services::findOrFail($id);
        $sections = $service->sections ?? [];

        $heroSection = $sections['hero_section'] ?? null;
        $allSections = $sections['all'] ?? [];

        $updated = false;

        foreach ($allSections as $i => $section) {
            if (
                ($section['type'] ?? '') === 'single' &&
                ($section['group'] ?? '') === 'transform'
            ) {
                $allSections[$i]['title'] = $request->section_title;
                $allSections[$i]['data']['infograph'] = $request->infograph;
                $updated = true;
                break;
            }
        }

        if (! $updated) {
            $allSections[] = [
                'type'  => 'single',
                'group' => 'transform',
                'title' => $request->section_title,
                'data'  => [
                    'infograph' => $request->infograph,
                ],
            ];
        }

        $service->sections = [
            'hero_section' => $heroSection,
            'all' => array_values($allSections),
        ];

        $service->save();

        return back()->with('success', 'Transform section updated successfully!');
    }

    public function updateRepeatingSections(Request $request, $id)
    {
        $request->validate([
            'section_title'  => 'required|array|min:1',
            'section_desc'   => 'required|array|min:1',
            'section_image'  => 'required|array|min:1',
        ]);

        $service = Services::findOrFail($id);
        $sections = $service->sections ?? [];

        $heroSection = $sections['hero_section'] ?? null;
        $existingSections = $sections['all'] ?? [];

        $titles = $request->input('section_title', []);
        $descriptions = $request->input('section_desc', []);
        $images = $request->input('section_image', []);

        // Remove previously added repeating_blocks from `all`
        $filteredSections = array_filter($existingSections, function ($section) {
            return ($section['group'] ?? '') !== 'repeating_blocks';
        });

        // Build each block as a separate section at root level of `all`
        foreach ($titles as $i => $title) {
            $filteredSections[] = [
                'type'  => 'repeating',
                'group' => 'repeating_blocks',
                'title' => $title,
                'data'  => [
                    'description' => $descriptions[$i] ?? '',
                    'image'       => $images[$i] ?? '',
                ],
            ];
        }

        $service->sections = [
            'hero_section' => $heroSection,
            'all' => array_values($filteredSections),
        ];

        $service->save();

        return back()->with('success', 'Repeating sections updated successfully!');
    }
}
