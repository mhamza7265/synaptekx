<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;

class PartnersPageContentController extends Controller
{
    public function edit()
    {
        $title = 'Edit partners page content';
        $page = Page::where('slug', 'partners')->first();
        return view('admin.pages.partners.edit', compact('title', 'page'));
    }

    public function updateHero(Request $request)
    {
        $request->validate([
            'bg_image' => 'required',
            'hero_title' => 'required',
            'hero_subtitle' => 'required',
        ]);

        $page = Page::where('slug', 'partners')->firstOrFail();
        $sections = $page->sections ?? [];

        // Prepare the hero section data
        $heroSection = [
            'bg_image' => $request->input('bg_image'),
            'hero_title' => $request->input('hero_title'),
            'hero_subtitle' => $request->input('hero_subtitle'),
        ];

        // Find and update the existing hero section if it exists
        $foundHero = false;
        foreach ($sections as $i => $section) {
            if (isset($section['hero_section'])) {
                // Update the hero section
                $sections[$i] = ['hero_section' => $heroSection];
                $foundHero = true;
                break;
            }
        }

        // If 'hero_section' doesn't exist, add it
        if (!$foundHero) {
            $sections[] = ['hero_section' => $heroSection];
        }

        // Separate hero section and all other sections
        $heroSectionData = [];
        $allSections = [];

        foreach ($sections as $section) {
            if (isset($section['hero_section'])) {
                $heroSectionData = $section['hero_section']; // Save the hero section separately
            } else {
                $allSections[] = $section; // Add other sections to 'all'
            }
        }

        // Ensure the 'all' array doesn't contain null values
        $allSections = array_filter($allSections, function ($section) {
            return !is_null($section);
        });

        // Save the updated sections with the 'hero_section' and 'all' array
        $page->sections = [
            'hero_section' => $heroSectionData,
            'all' => array_values($allSections), // Re-index the array to remove any gaps
        ];
        $page->save();

        return redirect()->back()->with('success', 'Hero section updated successfully!');
    }


    public function updateScaledPartners(Request $request)
    {
        $request->merge([
            'partner_logo'    => array_filter($request->input('partner_logo', [])),
            'detail_title'    => array_filter($request->input('detail_title', [])),
            'detail_subtitle' => array_filter($request->input('detail_subtitle', [])),
        ]);

        $validated = $request->validate([
            'section_index'   => 'required|integer',
            'section_title'   => 'required|string',

            'partner_logo'    => ['required', 'array', function ($attribute, $value, $fail) {
                if (empty(array_filter($value))) {
                    $fail('At least one partner logo is required.');
                }
            }],
            'partner_logo.*'  => 'nullable|string',

            'detail_title'    => ['required', 'array', function ($attribute, $value, $fail) {
                $flattened = array_merge(...array_values($value));
                if (empty(array_filter($flattened))) {
                    $fail('At least one partner detail title is required.');
                }
            }],

            'detail_subtitle' => ['required', 'array', function ($attribute, $value, $fail) {
                $flattened = array_merge(...array_values($value));
                if (empty(array_filter($flattened))) {
                    $fail('At least one partner detail subtitle is required.');
                }
            }],
        ]);

        $page = Page::where('slug', 'partners')->firstOrFail();
        $sections = $page->sections ?? [];

        // Separate hero_section and all
        $heroSection = $sections['hero_section'] ?? null;
        $allSections = $sections['all'] ?? [];

        $partnerLogos = $validated['partner_logo'];
        $detailTitles = $validated['detail_title'];
        $detailSubtitles = $validated['detail_subtitle'];

        $partners = [];

        // Build the partners array
        foreach ($partnerLogos as $pIndex => $logo) {
            $titles = $detailTitles[$pIndex] ?? [];
            $subtitles = $detailSubtitles[$pIndex] ?? [];

            $details = [];

            foreach ($titles as $dIndex => $title) {
                $details[] = [
                    'detail_title'    => $title,
                    'detail_subtitle' => $subtitles[$dIndex] ?? null,
                ];
            }

            $partners[] = [
                'partner_logo' => $logo,
                'details'      => $details,
            ];
        }

        // Update or add inside the 'all' array
        $updated = false;
        foreach ($allSections as $index => $section) {
            if (
                ($section['type'] ?? '') === 'repeating' &&
                ($section['group'] ?? '') === 'scaled_partners'
            ) {
                $allSections[$index]['title'] = $validated['section_title'];
                $allSections[$index]['data']['partners'] = $partners;
                $updated = true;
                break;
            }
        }

        // If section doesn't exist, add a new one inside 'all'
        if (! $updated) {
            $allSections[] = [
                'type'  => 'repeating',
                'group' => 'scaled_partners',
                'title' => $validated['section_title'],
                'data'  => [
                    'partners' => $partners,
                ],
            ];
        }

        // Save the sections with hero_section and all
        $page->sections = [
            'hero_section' => $heroSection, // Ensure hero_section is saved separately
            'all' => array_values($allSections), // All other sections inside 'all'
        ];

        $page->save();

        return back()->with('success', 'Section updated successfully!');
    }



    public function deletePartner($partnerIndex)
    {
        $page = Page::where('slug', 'partners')->firstOrFail();
        $sections = $page->sections ?? [];

        // Separate hero_section and all
        $heroSection = $sections['hero_section'] ?? null;
        $allSections = $sections['all'] ?? [];

        // Iterate over all sections to find the scaled_partners section
        foreach ($allSections as $i => $section) {
            if (
                ($section['type'] ?? '') === 'repeating' &&
                ($section['group'] ?? '') === 'scaled_partners'
            ) {
                $partners = $section['data']['partners'] ?? [];

                // Check if the partner exists and delete it
                if (isset($partners[$partnerIndex])) {
                    unset($partners[$partnerIndex]);

                    // Reindex the partners array after deletion
                    $allSections[$i]['data']['partners'] = array_values($partners);

                    // Save the updated sections with hero_section and all
                    $page->sections = [
                        'hero_section' => $heroSection,
                        'all' => array_values($allSections),
                    ];
                    $page->save();

                    return redirect()->back()->with('success', 'Partner deleted successfully.');
                }

                // If partner not found, break the loop
                break;
            }
        }

        // If partner is not found, return error message
        return redirect()->back()->with('error', 'Partner not found.');
    }



    public function deletePartnerDetail($partnerIndex, $detailIndex)
    {
        $page = Page::where('slug', 'partners')->firstOrFail();
        $sections = $page->sections ?? [];

        // Separate hero_section and all
        $heroSection = $sections['hero_section'] ?? null;
        $allSections = $sections['all'] ?? [];

        // Iterate over all sections to find the scaled_partners section
        foreach ($allSections as $i => $section) {
            if (
                ($section['type'] ?? '') === 'repeating' &&
                ($section['group'] ?? '') === 'scaled_partners'
            ) {
                $partners = $section['data']['partners'] ?? [];

                // Check if the partner exists
                if (isset($partners[$partnerIndex])) {
                    $details = $partners[$partnerIndex]['details'] ?? [];

                    // Check if the partner detail exists and delete it
                    if (isset($details[$detailIndex])) {
                        unset($details[$detailIndex]);

                        // Reindex the details array after deletion
                        $partners[$partnerIndex]['details'] = array_values($details);

                        // Update the partners array with the modified details
                        $allSections[$i]['data']['partners'] = $partners;

                        // Save the updated structure
                        $page->sections = [
                            'hero_section' => $heroSection,
                            'all' => array_values($allSections),
                        ];
                        $page->save();

                        return redirect()->back()->with('success', 'Partner detail deleted successfully.');
                    }

                    // If detail not found, break the loop
                    break;
                }
            }
        }

        // If partner detail is not found, return error message
        return redirect()->back()->with('error', 'Partner detail not found.');
    }



    public function updateAllPartners(Request $request)
    {
        $page = Page::where('slug', 'partners')->firstOrFail();

        // Clean inputs
        $request->merge([
            'partner_logo'    => array_filter($request->input('partner_logo', [])),
            'partner_content' => array_filter($request->input('partner_content', [])),
        ]);

        // Validate request
        $validated = $request->validate([
            'section_title'    => 'required|string',
            'partner_logo'     => ['required', 'array', 'min:1'],
            'partner_content'  => ['required', 'array', 'min:1'],
        ]);

        // Prepare partners
        $partnersSections = [];

        foreach ($validated['partner_logo'] as $key => $logo) {
            $partnersSections[] = [
                'partner_logo'    => $logo,
                'partner_content' => $validated['partner_content'][$key] ?? '',
            ];
        }

        // Load sections
        $sections = $page->sections ?? [];

        $heroSection = $sections['hero_section'] ?? null;
        $allSections = $sections['all'] ?? [];

        // Update or add the 'all_partners' section in 'all' array
        $updated = false;

        foreach ($allSections as $index => $section) {
            if (
                ($section['type'] ?? '') === 'repeating' &&
                ($section['group'] ?? '') === 'all_partners'
            ) {
                $allSections[$index]['title'] = $validated['section_title'];
                $allSections[$index]['data']['partners'] = $partnersSections;
                $updated = true;
                break;
            }
        }

        if (! $updated) {
            $allSections[] = [
                'type'  => 'repeating',
                'group' => 'all_partners', // Keep it for internal tracking; can be removed if unnecessary
                'title' => $validated['section_title'],
                'data'  => [
                    'partners' => $partnersSections,
                ],
            ];
        }

        // Save updated sections
        $page->sections = [
            'hero_section' => $heroSection, // Keep hero section unchanged
            'all' => array_values($allSections), // Ensure proper reindexing
        ];
        $page->save();

        return back()->with('success', 'All Partners section updated successfully.');
    }



    public function deleteAllPartner($partnerIndex)
    {
        $page = Page::where('slug', 'partners')->firstOrFail();
        $sections = $page->sections ?? [];

        $heroSection = $sections['hero_section'] ?? null;
        $allSections = $sections['all'] ?? [];

        // Loop through all sections to find and delete the partner by index
        foreach ($allSections as $i => $section) {
            if (isset($section['data']['partners'])) {
                $partners = $section['data']['partners'] ?? [];

                // Check if the partner exists and delete it
                if (isset($partners[$partnerIndex])) {
                    unset($partners[$partnerIndex]);

                    // Reindex the array after deletion
                    $allSections[$i]['data']['partners'] = array_values($partners);

                    // Save updated sections
                    $page->sections = [
                        'hero_section' => $heroSection, // Keep hero section unchanged
                        'all' => array_values($allSections), // Ensure proper reindexing of all sections
                    ];
                    $page->save();

                    return back()->with('success', 'Partner deleted successfully.');
                }

                return back()->with('error', 'Partner not found.');
            }
        }

        return back()->with('error', 'Partner section not found.');
    }


    public function updateCapabilities(Request $request)
    {
        $request->validate([
            'section_title' => 'required|string',
        ]);

        $page = Page::where('slug', 'partners')->firstOrFail();
        $sections = $page->sections ?? [];

        // Separate hero_section and all
        $heroSection = $sections['hero_section'] ?? null;
        $allSections = $sections['all'] ?? [];

        $updated = false;

        // Loop through all sections to find and update the capabilities section
        foreach ($allSections as $i => $section) {
            if (isset($section['type']) && $section['type'] === 'text' && isset($section['group']) && $section['group'] === 'capabilities') {
                $allSections[$i]['title'] = $request->section_title;
                $updated = true;
                break; // Exit loop when section is updated
            }
        }

        // If section doesn't exist, add a new capabilities section inside 'all'
        if (!$updated) {
            $newSection = [
                'type' => 'text',
                'group' => 'capabilities',
                'title' => $request->section_title,
            ];

            // Append new capabilities section to 'all' array
            $allSections[] = $newSection;
        }

        // Filter out any null values from the 'all' array
        $allSections = array_filter($allSections, function ($section) {
            return !is_null($section);
        });

        // Save updated sections
        $page->sections = [
            'hero_section' => $heroSection,
            'all' => array_values($allSections),
        ];
        $page->save();

        return back()->with('success', 'Section updated successfully.');
    }
}
