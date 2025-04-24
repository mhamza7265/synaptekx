<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Blogs List';
        $blogs = Blog::with('user')->get();
        return view('admin.pages.blog.index', compact(['title', 'blogs']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Create Blog';
        return view('admin.pages.blog.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'slug' => 'required', // removed unique validation
            'status' => 'required',
            'meta_description' => 'required',
            'keywords' => 'required',
            'thumbnail' => 'required|string',
            'category' => 'required',
            'blog_body' => 'required',
        ]);

        $slug = Str::slug($request->slug); // in case frontend passed extra characters
        $originalSlug = $slug;
        $count = 1;

        // make the slug unique if already taken
        while (Blog::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $count++;
        }

        $blog = new Blog();
        $blog->title = $request->title;
        $blog->slug = $slug;
        $blog->status = $request->status;
        $blog->meta_description = $request->meta_description;
        $blog->keywords = $request->keywords;
        $blog->thumbnail = $request->thumbnail;
        $blog->category = $request->category;
        $blog->blog_body = $request->blog_body;
        $blog->user_id = auth()->id();
        $blog->save();

        return redirect()->route('admin.blogs.index')->with('success', 'Blog post created successfully.');
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
    public function edit(string $slug)
    {
        $title = 'Edit Blog';
        $blog = Blog::where('slug', $slug)->with('user')->first();
        return view('admin.pages.blog.edit', compact('title', 'blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Find the blog by ID
        $blog = Blog::find($id);

        // Validate the input fields
        request()->validate([
            'title' => 'required',
            'slug' => 'required|unique:blogs,slug,' . $id,  // ensure current slug is excluded from unique check
            'status' => 'required',
            'meta_description' => 'required',
            'keywords' => 'required',
            'thumbnail' => 'required|string',
            'category' => 'required',
            'blog_body' => 'required',
        ]);

        // Sanitize/slugify the incoming slug (if it's passed with extra characters/spaces)
        $slug = Str::slug($request->slug);

        // Update the blog details
        $blog->title = $request->title;
        $blog->slug = $slug;  // Use sanitized slug
        $blog->status = $request->status;
        $blog->meta_description = $request->meta_description;
        $blog->keywords = $request->keywords;
        $blog->thumbnail = $request->thumbnail;
        $blog->category = $request->category;
        $blog->blog_body = $request->blog_body;

        // Don't update user_id unless necessary, as it can remain unchanged
        $blog->save();

        // Redirect with success message
        return redirect()->route('admin.blogs.index')->with('success', 'Blog post updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog = Blog::find($id);
        if (!$blog) return redirect()->back()->with('error', 'Blog not found');
        $blog->delete();
        return redirect()->back()->with('success', 'Blog deleted successfully');
    }
}
