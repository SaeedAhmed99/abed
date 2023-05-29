<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\AboutUsSlider;
use App\Models\Setting;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        $settings = Setting::select('name')->first();
        $pagesslider = AboutUsSlider::first();

        return view('front.login', compact('settings', 'pagesslider'));
    }
}
