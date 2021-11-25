<?php

namespace App\Http\Controllers;

use App\Models\Subsal as dd;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;

class Sub extends Controller
{
    public  function index()
    {
        $Sall = DB::table('sub_sales')
            ->join('users', 'sub_sales.Scid', 'users.Badgenumber')
            ->get();

        $dd = dd::all();
        return  response()->json($Sall);
    }

    public function dd(Request $reques)
    {
        $data = $reques->validate([
            'name' => 'required'
        ]);
        $u = $reques->name;
        return $u;
    }
}
