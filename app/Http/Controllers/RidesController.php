<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RidesController extends Controller
{
    public function get(){
        return view('myrides');
    }

    public function post(Request $request){
        DB::table('rides')->insert([
            'from' => $request->input('from'),
            'to' => $request->input('to'),
            'by' => $request->input('by'),
            'date' => $request->input('date'),
        ]);
        return redirect()->route('rides.liste');
    }

    public function liste( ){
        $rides = DB::table('rides')->get();
        return view('rides_liste',['rides' => $rides]);
    }
}
