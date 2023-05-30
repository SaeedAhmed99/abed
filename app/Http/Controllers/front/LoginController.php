<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\AboutUsSlider;
use App\Models\Book;
use App\Models\Setting;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        $settings = Setting::select('name')->first();
        $pagesslider = AboutUsSlider::first();
        $latesthree = Book::orderBy('id', 'DESC')->take(3)->get();

        return view('front.login', compact('settings', 'pagesslider', 'latesthree'));
    }
}
