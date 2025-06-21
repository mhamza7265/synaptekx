<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\Services;

class PagesMetaContentController extends Controller
{
    public function update(Request $request, $slug)
    {
        $page = Page::where('slug', $slug)->first();
        if (!$page) {
            return redirect()->back()->with('error', 'Page not found');
        }

        $request->validate([
            'meta_title' => 'required',
            'meta_description' => 'required',
        ]);

        $page->meta_title = $request->meta_title;
        $page->meta_description = $request->meta_description;
        $page->save();

        return redirect()->back()->with('success', 'Meta content updated successfully');
    }

    public function updateServiceMeta(Request $request, $slug)
    {
        $service = Services::where('slug', $slug)->first();
        if (!$service) {
            return redirect()->back()->with('error', 'Service page not found');
        }

        $request->validate([
            'meta_title' => 'required',
            'meta_description' => 'required',
        ]);

        $service->meta_title = $request->meta_title;
        $service->meta_description = $request->meta_description;
        $service->save();

        return redirect()->back()->with('success', "Service page's meta content updated successfully");
    }
}
