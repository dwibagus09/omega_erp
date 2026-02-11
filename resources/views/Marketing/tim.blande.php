@extends('layout.app')

@section('content')

<h2>Marketing Dashboard - Sample Order</h2>

<table border="1" width="100%">
    <tr>
        <th>No</th>
        <th>Nama Klien</th>
        <th>Nama Brand</th>
        <th>Produk</th>
        <th>Spesifikasi</th>
    </tr>

    @foreach($data as $key => $row)
    <tr>
        <td>{{ $key+1 }}</td>
        <td>{{ $row->nama_klien }}</td>
        <td>{{ $row->nama_brand }}</td>
        <td>{{ $row->produk }}</td>
        <td>{{ $row->spesifikasi }}</td>
    </tr>
    @endforeach
</table>

@endsection
