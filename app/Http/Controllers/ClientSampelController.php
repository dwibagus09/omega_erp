<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClientSampel;

class ClientSampelController extends Controller
{
    public function store(Request $request)
    {
        // VALIDASI
        $request->validate([
            'nama_klien'   => 'required',
            'nama_brand'   => 'required',
            'nama_produk'  => 'required',
            'spesifikasi'  => 'required',
        ]);

        // SIMPAN KE DATABASE
        ClientSampel::create([
            'nama_klien'  => $request->nama_klien,
            'nama_brand'  => $request->nama_brand,
            'nama_produk' => $request->nama_produk,
            'spesifikasi' => $request->spesifikasi,
        ]);

        // BALIK KE FORM + ALERT HIJAU
        return redirect()->back()
            ->with('success', 'Permintaan sampel berhasil dikirim!');
    }
}
