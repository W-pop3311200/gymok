<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Models\Subsal as subb;

class sub extends Controller
{
    public function subdata()
    {
        dd('dd');
        $sub = subb::get();
        return response()->json($sub);
    }
}
