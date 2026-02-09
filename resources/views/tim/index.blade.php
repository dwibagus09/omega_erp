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
                    <tr>
                        <td>Pak Joe</td>
                        <td>JavierSkin</td>
                        <td>
                            <ol class="mb-0">
                                <li>
                                    <strong>Parfum</strong><br>
                                    <small>
                                        Aroma luxury, elegan, dan terkesan mahal<br>
                                        Target kelas menengah
                                    </small>
                                </li>
                                <li class="mt-2">
                                    <strong>Body Lotion</strong><br>
                                    <small>
                                        Warna putih, tekstur soft<br>
                                        Wangi segar & mengandung UV Filter
                                    </small>
                                </li>
                                <li class="mt-2">
                                    <strong>Toner</strong><br>
                                    <small>
                                        Fokus cleanser<br>
                                        Efek brightening & moist<br>
                                        Warna sediaan tea colour
                                    </small>
                                </li>
                            </ol>
                        </td>
                        <td>
                            <a href="{{ route('tim.detail', 1) }}" class="btn btn-sm btn-primary">
    Detail
</a>

                            <a href="{{ route('tim.edit', 1) }}" class="btn btn-sm btn-warning">
    Edit
</a>

                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </td>
                    </tr>
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
