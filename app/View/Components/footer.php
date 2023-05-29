<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Setting;
use App\Models\AboutUs;

class footer extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $settings = Setting::first();
        $about_us = AboutUs::first();
        return view('components.footer', compact('settings', 'about_us'));
    }
}
