@extends('partials.layouts.master')

@section('title', 'Sampel Order')

@section('sub-title', 'Pesanan Sampel')
@section('pagetitle', 'Beranda')
@section('buttonTitle', 'Bagikan')
@section('modalTarget', 'shareModal')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/libs/air-datepicker/air-datepicker.css') }}">
<link rel="stylesheet" href="{{ asset('assets/libs/@yaireo/tagify/tagify.css') }}">
@endsection

@section('content')
<div class="row g-4">
    <div class="col-12">
        <div class="card mb-0 h-100 p-3">

            <table class="data-table-basic table table-hover align-middle table-nowrap w-100">
                <thead class="bg-light bg-opacity-30">
                    <tr>
                        <th>Nama Klien</th>
                        <th>Nama Brand</th>
                        <th>Sampel Produk</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                @foreach($pesanan as $item)
                <tr>
                    <td>{{ $item->nama_pelanggan }}</td>
                    <td>-</td>
                    <td>{{ $item->produk }}</td>
                    <td>
                        <a href="{{ route('tim.detail', $item->id) }}" class="btn btn-sm btn-primary">
                            Detail
                        </a>

                        <a href="{{ route('tim.edit', $item->id) }}" class="btn btn-sm btn-warning">
                            Edit
                        </a>

                        <form action="{{ route('tim.hapus', $item->id) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger btn-sm"
        onclick="return confirm('Yakin ingin menghapus data ini?')">
        Hapus
    </button>
</form>

                    </td>
                </tr>
                @endforeach
                </tbody>

            </table>

        </div>
    </div>
</div>

@include('partials.social-share-modal')
@endsection

@section('js')
<!-- Datatable js -->
<script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

<!-- Datatable init -->
<script src="{{ asset('assets/js/table/datatable.init.js') }}"></script>

<!-- App js -->
<script type="module" src="{{ asset('assets/js/app.js') }}"></script>
@endsection
