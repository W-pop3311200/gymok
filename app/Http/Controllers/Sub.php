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
    public  function cla()
    {
        $Sall = \DB::table('Class_setup')
            ->join('Day', 'Day.Day_id', 'Class_setup.id_Day')
            ->get();
        $dd = calss::all();
        return  response()->json($Sall);
    }

    public function dd(Request $request)
    {

        // $data = $request->validate([
        //     'name' => 'required'
        // ]);
        $u = new dd();
        // $u->Sid = $request->Sid;
        $u->Scid = $request->Scid;
        $u->said = $request->said;
        $u->Sdate = $request->Sdate;
        $u->Sfrom = $request->Sfrom;
        $u->Sto =  $request->Sto;
        $u->Svalue = $request->Svalue;
        $u->Sdiscount = $request->Sdiscount;
        $u->Spaid = $request->Spaid;
        $u->Srest = $request->Srest;


        if ($u->save()) {
            return "ok";
        } else {
            return "no";
        }
    }
}
