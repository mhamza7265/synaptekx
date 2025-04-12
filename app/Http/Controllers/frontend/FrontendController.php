<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\contactEmail;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;

class FrontendController extends Controller
{
    public function index()
    {
        $title = "Home | Synaptekx";
        return view('frontend.pages.home', compact('title'));
    }

    public function services($name)
    {
        // Set the default title
        $title = "Services | Synaptekx";

        // Define a list of available services and their corresponding titles
        $services = [
            'digital' => "Digital Services | Synaptekx",
            'cloud' => "Cloud Services | Synaptekx",
            'security' => "Security Services | Synaptekx",
            'data-ai' => "Data & AI Services | Synaptekx",
            'managed-services' => "Managed Services | Synaptekx",
            'talent-acquisition-and-sourcing' => "Talent Acquisition & Sourcing | Synaptekx"
        ];

        // Check if the requested service exists in the list and update the title accordingly
        if (array_key_exists($name, $services)) {
            $title = $services[$name];
        }

        // Ensure that the service name is sanitized to prevent invalid view loading
        $viewName = 'frontend.pages.services.' . $name;

        // Return the appropriate view with the title
        return view($viewName, compact('title'));
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
        $title = "Partners | Synaptekx";
        return view('frontend.pages.partners', compact('title'));
    }

    public function contact()
    {
        $title = "Contact | Synaptekx";
        return view('frontend.pages.contact', compact('title'));
    }

    public function about()
    {
        $title = "About Us | Synaptekx";
        return view('frontend.pages.about', compact('title'));
    }

    public function blogs()
    {
        $title = "Blogs | Synaptekx";
        return view('frontend.pages.blog', compact('title'));
    }

    public function blogsDetails()
    {
        $title = "Blogs Details | Synaptekx";
        return view('frontend.pages.blog-details', compact('title'));
    }

    public function privacyPolicy()
    {
        $title = "Privacy Policy | Synaptekx";
        return view('frontend.pages.privacy-pages.privacy-policy', compact('title'));
    }

    public function cookiePolicy()
    {
        $title = "Cookie Policy | Synaptekx";
        return view('frontend.pages.privacy-pages.cookie-policy', compact('title'));
    }

    public function termsOfWebsiteUse()
    {
        $title = "Terms of Website Use | Synaptekx";
        return view('frontend.pages.privacy-pages.terms-of-website-use', compact('title'));
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
