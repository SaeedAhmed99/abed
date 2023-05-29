<?php

namespace App\Traits;
use App\Models\Log;
use Auth;

Trait LogsTrait {

    public function logs($type, $action) {
        Log::create([
            'user_id' => Auth::user()->id,
            'type' => $type,
            'action' => $action,
            'ip' => \Request()->ip()
        ]);
    }
}
