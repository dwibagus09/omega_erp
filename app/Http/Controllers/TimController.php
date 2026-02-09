<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimController extends Controller
{
   public function index()
{
    $nama_brand = "Contoh Brand";
    $nama_klien = "Contoh Klien";
    $sampel_produk = "Botol plastik 250ml";

    return view('tim.index', compact('nama_brand','nama_klien','sampel_produk'));
}



    public function detail($id)
    {
        // data dummy dulu (biar gak ribet DB)
        $data = [
            'id' => $id,
            'nama_klien' => 'Pak Joe',
            'nama_brand' => 'JavierSkin',
            'produk' => [
                'Parfum',
                'Body Lotion',
                'Toner'
            ]
        ];
         return view('tim.detail', compact('data'));
    }

        public function edit($id)
{
    $nama_brand = "Brand Edit";
    $nama_klien = "Klien Edit";

    return view('tim.edit', compact('id','nama_brand','nama_klien'));
}


}