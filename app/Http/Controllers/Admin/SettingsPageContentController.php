<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;

class SettingsPageContentController extends Controller
{
    public function edit()
    {
        $title = 'Edit Site Settings';
        $settings = Setting::firstOrCreate([]);
        return view('admin.pages.settings', compact('title', 'settings'));
    }

    public function updateAppearance(Request $request)
    {
        $request->validate([
            'site_title' => 'required',
            'favicon' => 'required',
            'site_logo' => 'required',
            'primary_color' => 'required',
            // 'secondary_color' => 'required',
            'button_color' => 'required',
        ]);

        $settings = Setting::first();
        $settings->site_title = $request->site_title;
        $settings->favicon = $request->favicon;
        $settings->site_logo = $request->site_logo;
        $settings->primary_color = $request->primary_color;
        // $settings->secondary_color = $request->secondary_color;
        $settings->button_color = $request->button_color;
        $settings->save();

        return back()->with('success', 'Site appearance settings updated successfully');
    }

    public function updateSocials(Request $request)
    {
        $request->validate([
            'instagram_link' => 'required',
            'x_link' => 'required',
            'facebook_link' => 'required',
            'linkedin_link' => 'required',
        ]);

        $settings = Setting::first();
        $settings->instagram_link = $request->instagram_link;
        $settings->x_link = $request->x_link;
        $settings->facebook_link = $request->facebook_link;
        $settings->linkedin_link = $request->linkedin_link;
        $settings->save();

        return back()->with('success', 'Social links updated successfully');
    }

    public function updateContactForm(Request $request)
    {
        $request->validate([
            'contact_form_title' => 'required',
            'contact_form_subtitle' => 'required',
        ]);

        $settings = Setting::first();
        $settings->contact_form_title = $request->contact_form_title;
        $settings->contact_form_subtitle = $request->contact_form_subtitle;
        $settings->save();

        return back()->with('success', 'Contact form updated successfully');
    }
}
