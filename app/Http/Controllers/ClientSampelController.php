<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ClientSampelController extends Controller
{
    public function store(Request $request)
    {
        $orders = Session::get('orders', []);

        $orders[] = [
            'nama_klien' => $request->nama_klien,
            'nama_brand' => $request->nama_brand,
            'produk' => [
                [
                    'nama_produk' => $request->nama_produk,
                    'spesifikasi' => $request->spesifikasi,
                ]
            ]
        ];

        Session::put('orders', $orders);

        return redirect('/marketing/orders')
       ->with('success', 'Permintaan sampel berhasil dikirim!');

    }
}
