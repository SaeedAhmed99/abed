<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\Log;
use Illuminate\Http\Request;

class LogsController extends Controller
{
    public function logs(Request $request)
    {
        $logs = Log::orderBy('id','DESC')->paginate(20);
        return view('back.logs', compact('logs'));
    }
}
