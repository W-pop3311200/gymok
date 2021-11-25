<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Models\Models\Subsal as subb;
use Illuminate\Http\Request;

class Subdata extends BaseController
{
    public function index()
    {

        // $sub = subb::get();
        // return response()->json($sub);
        return "ss";
    }
}
