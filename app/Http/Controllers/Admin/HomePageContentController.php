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

    public function deleteHero($index)
    {
        $page = Page::where('slug', 'home')->first();
        $sections = $page->sections;
        if (isset($sections['hero_sections'][$index])) {
            unset($sections['hero_sections'][$index]);
            $sections['hero_sections'] = array_values($sections['hero_sections']); // Reindex
            $page->sections = $sections;
            $page->save();
        }
        return redirect()->back()->with('success', 'Hero section deleted successfully!');
    }

    public function updateClients(Request $request)
    {
        // Clean up empty values
        $request->merge([
            'client' => array_filter($request->input('client', [])),
        ]);

        // Validate the cleaned array
        $request->validate([
            'client' => 'required|array|min:1',
        ]);

        // Retrieve the "home" page
        $page = Page::where('slug', 'home')->firstOrFail();

        // Store the cleaned client array
        $clients = $request->input('client');

        // Prepare the updated sections array
        $sections = $page->sections ?? [];
        $sections['clients'] = $clients;

        // Update the page with new clients section
        $page->sections = $sections;
        $page->save();

        return redirect()->back()->with('success', 'Clients section updated.');
    }

    public function deleteClient($index)
    {
        $page = Page::where('slug', 'home')->firstOrFail();

        $sections = $page->sections ?? [];

        // Remove the client at the specified index
        $clients = $sections['clients'] ?? [];
        unset($clients[$index]);

        // Reindex the array
        $clients = array_values($clients);

        // Update the sections
        $sections['clients'] = $clients;
        $page->sections = $sections;
        $page->save();

        return redirect()->back()->with('success', 'Client deleted successfully!');
    }



    // public function updateServices(Request $request)
    // {
    //     // dd($request->all());
    //     $request->merge([
    //         'list_title' => array_filter($request->input('list_title', [])),
    //         'list_content' => array_filter($request->input('list_content', [])),
    //     ]);

    //     $request->validate([
    //         'section_title' => 'required',
    //         'list_title' => 'required|array|min:1',
    //         'list_content' => 'required|array|min:1',
    //     ]);

    //     $page = Page::where('slug', 'home')->first();

    //     $servicesSections = [];

    //     foreach ($request->list_title as $key => $value) {
    //         $listContent = $request->list_content[$key];
    //         $servicesSections[$key] = [
    //             'list_title' => $value,
    //             'list_content' => $listContent,
    //         ];
    //     }

    //     $services = [
    //         'services_section' => ["section_title" => $request->section_title, "services" => $servicesSections],
    //     ];

    //     // Decode existing sections or start with an empty array
    //     $sections = $page->sections ?? [];

    //     // Overwrite or add the 'hero' section
    //     $sections['services_section'] = $services['services_section'];

    //     // Update and save
    //     $page->sections = $sections;
    //     $page->save();

    //     return redirect()->back()->with('success', 'Section updated successfully!');
    // }

    public function updateServices(Request $request)
    {

        $request->validate([
            'section_title' => 'required',
        ]);

        $page = Page::where('slug', 'home')->first();

        $servicesSections = [];

        $services = [
            'services_section' => ["section_title" => $request->section_title,],
        ];

        // Decode existing sections or start with an empty array
        $sections = $page->sections ?? [];

        // Overwrite or add the 'hero' section
        $sections['services_section'] = $services['services_section'];

        // Update and save
        $page->sections = $sections;
        $page->save();

        return redirect()->back()->with('success', 'Section updated successfully!');
    }

    public function  deleteService($index)
    {
        $page = Page::where('slug', 'home')->first();
        $sections = $page->sections;
        if (isset($sections['services_section']['services'][$index])) {
            unset($sections['services_section']['services'][$index]);
            $sections['services_section']['services'] = array_values($sections['services_section']['services']); // Reindex
            $page->sections = $sections;
            $page->save();
        }
        return redirect()->back()->with('success', 'Service deleted successfully!');
    }

    public function updateTransformSection(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'section_title' => 'required',
            'infograph' => 'required',
        ]);

        $page = Page::where('slug', 'home')->first();
        $sections = $page->sections;
        $sections['transform_section'] = [
            'section_title' => $request->section_title,
            'infograph' => $request->infograph,
        ];
        $page->sections = $sections;
        $page->save();
        return redirect()->back()->with('success', 'Section updated successfully!');
    }

    public function updateFeaturesSection(Request $request)
    {
        // dd($request->all());
        $request->merge([
            'feature_title' => array_filter($request->input('feature_title', [])),
            'feature_icon' => array_filter($request->input('feature_icon', [])),
            'feature_subtitle' => array_filter($request->input('feature_subtitle', [])),
        ]);

        $request->validate([
            'section_title' => 'required',
            'feature_icon' => 'required|array|min:1',
            'feature_title' => 'required|array|min:1',
            'feature_subtitle' => 'required|array|min:1',
        ]);

        $page = Page::where('slug', 'home')->first();

        $featuresSections = [];

        foreach ($request->feature_title as $key => $value) {
            $featureIcon = $request->feature_icon[$key];
            $featureSubtitle = $request->feature_subtitle[$key];
            $featuresSections[$key] = [
                'feature_title' => $value,
                'feature_subtitle' => $featureSubtitle,
                'feature_icon' => $featureIcon,
            ];
        }

        $features = [
            'features_section' => ["section_title" => $request->section_title, "features" => $featuresSections],
        ];

        // Decode existing sections or start with an empty array
        $sections = $page->sections ?? [];

        // Overwrite or add the 'hero' section
        $sections['features_section'] = $features['features_section'];

        // Update and save
        $page->sections = $sections;
        $page->save();

        return redirect()->back()->with('success', 'Section updated successfully!');
    }
}
