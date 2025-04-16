<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;

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
}
