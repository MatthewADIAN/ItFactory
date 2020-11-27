<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    public function show(){
        $produk = DB::table('produk')->get();
        return view('tampilProduk',['produk'=>$produk]);
    }
    public function insert(){
        return view('tampilProdukInsert');
    }

    public function save(Request $req){
        DB::table('produk')->insert(
            ['kode' => $req->kode,
             'nama' => $req->nama,
             'harga' => $req->jumlah
            ]

        );

        return redirect('/produk/show');
    }

    public function delete($id){
        DB::table('produk')->where('id',$id)->delete();
        return redirect('/produk/show');
    }

    public function edit($id){
        $getById = DB::table('produk')->where('id',$id)->get();
        return view('tampilProdukUpdate',['getById'=>$getById]);
    }

    public function ubah(Request $req){
        DB::table('produk')->where('id',$req->id)->update(
            ['kode'=>$req->kode,
             'nama' =>$req->nama,
             'harga' =>$req->harga
            ]
        );

        return redirect('/produk/show');
    }
}

