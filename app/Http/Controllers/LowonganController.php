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

    public function insert(){
        return view('tampilLowonganInsert');
    }

    public function save(Request $req){
        DB::table('lowongan')->insert(
            ['kode_lowongan' => $req->kode,
             'posisi' => $req->posisi
            ]

        );

        return redirect('/lowongan/show');
    }

    public function delete($id){
        DB::table('lowongan')->where('id',$id)->delete();
        return redirect('/lowongan/show');
    }

    public function edit($id){
        $getById = DB::table('lowongan')->where('id',$id)->get();
        return view('tampilLowonganUpdate',['getById'=>$getById]);
    }

    public function ubah(Request $req){
        DB::table('lowongan')->where('id',$req->id)->update(
            ['kode_lowongan'=>$req->kode,
             'posisi' =>$req->posisi
            ]
        );

        return redirect('/lowongan/show');
    }

    public function daftar(){
        $pendaftarlowongan = DB::table('pendaftar_lowongan')->get();
        return view('daftarLowongan',['pendaftarlowongan'=>$pendaftarlowongan]);
    }

    public function saveDaftar(Request $req){
        DB::table('pendaftar_lowongan')->insert(
            ['lowongan' => $req->lowongan,
             'nama' => $req->nama,
             'alamat' => $req->alamat
            ]

        );

        return redirect('/lowongan/daftar');
    }
}
