<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClientSampel;

class ClientSampelController extends Controller
{
    public function store(Request $request)
    {
        ClientSampel::create([
            'nama_klien'    => $request->nama_klien,
            'nama_brand'    => $request->nama_brand,
            'sampel_produk' => $request->sampel_produk,
        ]);

        return redirect()->back()->with('success', 'Permintaan sampel berhasil dikirim!');
    }
}
