<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $mails = ContactUs::all();
        $subscriptions = Subscription::all();
        return view('back.index', compact('mails', 'subscriptions'));
    }

}
