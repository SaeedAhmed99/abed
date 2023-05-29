<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\ForLase;
use App\Models\AboutUsSlider;
use App\Models\Book;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\ContactUs;
use App\Models\HomeSlider;
use App\Models\Policy;
use App\Models\Subscription;
use App\Models\Term;
use App\Traits\LogsTrait;

class HomeController extends Controller
{
    use LogsTrait;
    public function index()
    {
        $about_us = AboutUs::first();
        $books = Book::orderBy('id', 'DESC')->take(3)->get();
        if (!$about_us) {
            $about_us = AboutUs::create();
        }
        $settings = Setting::select('name')->first();
        if (!$settings) {
            $settings = Setting::create();
        }
        $sliders = HomeSlider::orderBy('id', 'DESC')->take(3)->get();
        $pagesslider = AboutUsSlider::first();
        return view('front.index', compact('about_us', 'books', 'settings', 'sliders', 'pagesslider'));
    }

    public function services()
    {
        $books = Book::orderBy('id', 'DESC')->get();
        $settings = Setting::select('name', 'meta_title', 'meta_description', 'meta_keywords')->first();
        if (!$settings) {
            $settings = Setting::create();
        }
        $pagesslider = AboutUsSlider::first();
        return view('front.services', compact('books', 'settings', 'pagesslider'));
    }

    public function properties()
    {
        $properties = Book::orderBy('id', 'DESC')->get();
        return view('front.properties', compact('properties'));
    }

    public function propertiesDetails($id)
    {
        $propertie = Book::findOrFail($id);
        return view('front.propertiesDetails', compact('propertie'));
    }

    public function forLeaseDetails($id)
    {
        $propertie = ForLase::findOrFail($id);
        return view('front.forleaseDetails', compact('propertie'));
    }

    public function books()
    {
        $books = Book::orderBy('id', 'DESC')->get();
        $settings = Setting::select('name', 'meta_title', 'meta_description', 'meta_keywords')->first();
        if (!$settings) {
            $settings = Setting::create();
        }
        $pagesslider = AboutUsSlider::first();
        return view('front.books', compact('books', 'settings', 'pagesslider'));
    }

    public function about()
    {
        $about_us = AboutUs::first();
        if (!$about_us) {
            $about_us = AboutUs::create();
        }
        $settings = Setting::select('name')->first();
        if (!$settings) {
            $settings = Setting::create();
        }
        $pagesslider = AboutUsSlider::first();
        return view('front.about', compact('about_us', 'settings', 'pagesslider'));
    }

    public function contact()
    {
        $settings = Setting::first();
        if (!$settings) {
            $settings = Setting::create();
        }
        $pagesslider = AboutUsSlider::first();
        return view('front.contact', compact('settings', 'pagesslider'));
    }

    public function forLease()
    {
        $forleases = ForLase::orderBy('id', 'DESC')->get();
        return view('front.forlease', compact('forleases'));
    }

    public function tearmsOfUse()
    {
        $tearms = Term::first();
        if (!$tearms) {
            $tearms = AboutUs::create();
        }
        $settings = Setting::select('name')->first();
        if (!$settings) {
            $settings = Setting::create();
        }
        $pagesslider = AboutUsSlider::first();
        return view('front.tearmsofuse', compact('tearms', 'settings', 'pagesslider'));
    }

    public function policy()
    {
        $policy = Policy::first();
        if (!$policy) {
            $policy = AboutUs::create();
        }
        $settings = Setting::select('name')->first();
        if (!$settings) {
            $settings = Setting::create();
        }
        $pagesslider = AboutUsSlider::first();
        return view('front.policy', compact('policy', 'settings', 'pagesslider'));
    }


    public function contactStore(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50',
            'phone' => 'required|max:20',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        ContactUs::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'message' => $request->message,
            'ip' => \Request()->ip()
        ]);

        return true;
    }

    public function subscribeStore(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        Subscription::create([
            'email' => $request->email,
        ]);

        return true;
    }

    public function showBook($id)
    {
        $book = Book::findOrFail($id);
        return response()->file(
            public_path($book->file)
        );
    }
}
