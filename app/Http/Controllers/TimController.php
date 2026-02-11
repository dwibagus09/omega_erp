<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TimController extends Controller
{
    public function index()
    {
        $pesanan = DB::table('pesanan_sampel')->get();
        return view('tim.index', compact('pesanan'));
    }

    // TARUH DI SINI
    public function detail($id)
    {
        $data = DB::table('pesanan_sampel')->where('id', $id)->first();
        return view('tim.detail', compact('data'));
    }

    public function edit($id)
    {
        $data = DB::table('pesanan_sampel')->where('id', $id)->first();
        return view('tim.edit', compact('data'));
    }
    public function hapus($id)
{
    DB::table('pesanan_sampel')->where('id', $id)->delete();
    return redirect()->back()->with('success','Data berhasil dihapus');
}

}
