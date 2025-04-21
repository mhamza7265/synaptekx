<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Services;
use Illuminate\Support\Str;

class ServicesPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Services Pages';
        $services = Services::all();
        return view('admin.pages.services.index', compact('title', 'services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Create Service Page';
        return view('admin.pages.services.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required',
            'page_icon' => 'required',
        ]);

        $services = new Services;

        $services->name = $request->name;
        $services->meta_title = $request->meta_title;
        $services->meta_description = $request->meta_description;
        $services->page_icon = $request->page_icon;
        $services->slug = Str::Slug($request->name);
        $services->save();

        return redirect()->route('admin.services.index')->with('success', 'Service Page Created Successfully !');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $title = 'Edit Services Page';
        $service = Services::find($id);
        return view('admin.pages.services.edit', compact('title', 'service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $service = Services::find($id);
        $service->delete();
        return redirect()->route('admin.services.index')->with('success', 'Service Page Deleted Successfully!');
    }
}
