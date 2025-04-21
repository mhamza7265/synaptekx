<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\contactEmail;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use App\Models\Blog;
use App\Models\Setting;
use App\Models\Page;
use App\Models\Services;

class FrontendController extends Controller
{
    public function index()
    {
        $settings = Setting::first();
        $page = Page::where('slug', 'home')->first();
        $partners = Page::where('slug', 'partners')->first();
        $services = Services::all();
        $title = "$page->meta_title | $settings->site_title";
        $description = "$page->meta_description";
        return view('frontend.pages.home', compact('title', 'description', 'page', 'partners', 'services'));
    }

    public function services($slug)
    {
        $settings = Setting::first();
        // Set the default title
        $service = Services::where('slug', $slug)->firstOrFail();

        $title = "$service->meta_title | $settings->site_title";

        // Return the appropriate view with the title
        return view('frontend.pages.services.service', compact('title', 'service'));
    }

    public function sendContactEmail(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'subject' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
            'g-recaptcha-response' => 'required|recaptcha',
        ]);

        $formData = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'subject' => $request->subject,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ];

        Mail::to(env('MAIL_TO_ADDRESS'))->send(new contactEmail($formData));

        return back()->with('success', 'Your message has been sent successfully!');
    }

    public function partners()
    {
        $settings = Setting::first();
        $page = Page::where('slug', 'partners')->first();
        $services = Services::take(6)->get();
        $title = "$page->meta_title | $settings->site_title";
        $description = "$page->meta_description";
        return view('frontend.pages.partners', compact('title', 'description', 'page', 'services'));
    }

    public function contact()
    {
        $settings = Setting::first();
        $page = Page::where('slug', 'contact-us')->first();
        $title = "$page->meta_title | $settings->site_title";
        $description = "$page->meta_description";
        return view('frontend.pages.contact', compact('title', 'description', 'page'));
    }

    public function about()
    {
        $settings = Setting::first();
        $page = Page::where('slug', 'about-us')->first();
        $title = "$page->meta_title | $settings->site_title";
        $description = "$page->meta_description";
        return view('frontend.pages.about', compact('title', 'description', 'page'));
    }

    public function blogs()
    {
        $settings = Setting::first();
        $page = Page::where('slug', 'blogs')->first();
        $title = "$page->meta_title | $settings->site_title";
        $description = "$page->meta_description";
        $blogs = Blog::where('status', 'published')->paginate(6);
        return view('frontend.pages.blog', compact('title', 'description', 'blogs', 'page'));
    }

    public function blogsDetails($slug)
    {
        $settings = Setting::first();
        $title = "Blogs Details | $settings->site_title";
        $blog = Blog::where('slug', $slug)->with('user')->first();
        $blogs = Blog::where('status', 'published')->paginate(3);
        return view('frontend.pages.blog-details', compact('title', 'blog', 'blogs'));
    }

    public function privacyPolicy()
    {
        $settings = Setting::first();
        $page = Page::where('slug', 'privacy-policy')->first();
        $title = "$page->meta_title | $settings->site_title";
        $description = "$page->meta_description";
        return view('frontend.pages.privacy-pages.privacy-policy', compact('title', 'description', 'page'));
    }

    public function cookiePolicy()
    {
        $settings = Setting::first();
        $page = Page::where('slug', 'cookies-policy')->first();
        $title = "$page->meta_title | $settings->site_title";
        $description = "$page->meta_description";
        return view('frontend.pages.privacy-pages.cookie-policy', compact('title', 'description', 'page'));
    }

    public function termsOfWebsiteUse()
    {
        $settings = Setting::first();
        $page = Page::where('slug', 'terms-of-website-use')->first();
        $title = "$page->meta_title | $settings->site_title";
        $description = "$page->meta_description";
        return view('frontend.pages.privacy-pages.terms-of-website-use', compact('title', 'description', 'page'));
    }

    public function storageLink()
    {
        try {
            if (File::exists(public_path('storage'))) {
                File::delete(public_path('storage'));
            }

            Artisan::call('storage:link');
            session()->flash('success', 'Storage linked successfully!');
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());
        }

        return redirect()->back();
    }
}
