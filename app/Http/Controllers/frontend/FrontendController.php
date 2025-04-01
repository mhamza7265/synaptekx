<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\contactEmail;

class FrontendController extends Controller
{
    public function index()
    {
        $title = "Home | Synaptekx";
        return view('frontend.pages.home', compact('title'));
    }

    public function services()
    {
        $title = "Services | Synaptekx";
        return view('frontend.pages.services', compact('title'));
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
}
