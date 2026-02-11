@extends('partials.layouts.master2')

@section('content')

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<h3>Data Sampel Order - Marketing</h3>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Klien</th>
            <th>Nama Brand</th>
            <th>Produk</th>
            <th>Spesifikasi</th>
        </tr>
    </thead>
    <tbody>
        @php $no = 1; @endphp
        @foreach ($orders as $order)
            @foreach ($order['produk'] as $produk)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $order['nama_klien'] }}</td>
                <td>{{ $order['nama_brand'] }}</td>
                <td>{{ $produk['nama_produk'] }}</td>
                <td>{{ $produk['spesifikasi'] }}</td>
            </tr>
            @endforeach
        @endforeach
    </tbody>
</table>
@endsection
