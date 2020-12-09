<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BelanjaController extends Controller
{
    public function tampil(){
        $belanja = DB::table('belanja_produk')->get();
        return view('tampilBelanjaInsert',['belanja_produk'=>$belanja]);
    }
    
    public function simpan(Request $req){
        DB::table('belanja_produk')->insert(
            ['jasa' => $req->jasa,
             'jumlah' => $req->jumlah
            ]

        );

        return redirect('/produk/tampil');
    }

    public function delete(){
        DB::table('belanja_produk')->delete();
        return redirect('/produk/tampil');
    }

    }
