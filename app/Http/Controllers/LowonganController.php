<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LowonganController extends Controller
{
    public function show(){
        $lowongan = DB::table('lowongan')->get();
        return view('tampilLowongan',['lowongan'=>$lowongan]);
    }
}
