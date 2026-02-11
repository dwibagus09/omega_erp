<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientSampel extends Model
{
   use App\Models\ClientSampel;

public function index()
{
    $data = ClientSampel::all(); // AMBIL SEMUA DATA DARI DB
    return view('tim.index', compact('data'));
}
public function show($id)
    {
        $data = ClientSampel::find($id);
        return view('tim.show', compact('data'));
    }
}