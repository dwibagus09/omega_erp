@extends('partials.layouts.master')

@section('title', 'Sampel Order')

@section('sub-title', 'Sampel Order')
@section('pagetitle', 'Home')
@section('buttonTitle', 'Share')
@section('modalTarget', 'shareModal')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/libs/air-datepicker/air-datepicker.css') }}">
<link rel="stylesheet" href="{{ asset('assets/libs/@yaireo/tagify/tagify.css') }}">
@endsection

@section('content')
<div class="row g-4">
    <div class="col-12">
        <div class="card p-4">

            <h4 class="mb-4 fw-bold">Sampel Order</h4>

            <div class="mb-3">
                <strong>Nama Klien :</strong>
                <p class="mb-0">Pak Joe</p>
            </div>

            <div class="mb-3">
                <strong>Nama Brand :</strong>
                <p class="mb-0">JavierSkin</p>
            </div>

            <div class="mb-3">
                <strong>Sampel Produk :</strong>
                <ol class="mt-2">
                    <li class="mb-2">
                        <strong>Parfum</strong><br>
                        <small class="text-muted">
                            Spek aroma luxury elegan dan terlihat mahal kelas menengah
                        </small>
                    </li>

                    <li class="mb-2">
                        <strong>Body Lotion</strong><br>
                        <small class="text-muted">
                            Sediaan warna putih dengan tekstur soft, wangi segar,
                            dan ditambahkan UV filter
                        </small>
                    </li>

                    <li>
                        <strong>Toner</strong><br>
                        <small class="text-muted">
                            Fokus sebagai cleanser, memberikan efek brightening dan moist.
                            Warna sediaan tea colour
                        </small>
                    </li>
                </ol>
            </div>

        </div>
    </div>
</div>

@include('partials.social-share-modal')
@endsection

@section('js')
<script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

<script type="module" src="{{ asset('assets/js/app.js') }}"></script>
@endsection
