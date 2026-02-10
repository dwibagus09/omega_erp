@extends('partials.layouts.master')

@section('title', 'Form Sampel Order')
@section('sub-title', 'Form Layout')
@section('pagetitle', 'Home')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/libs/air-datepicker/air-datepicker.css') }}">
@endsection

@section('content')
<div class="row g-4">
    <div class="col-12">
        <div class="card h-100 mb-0">

            <div class="card-header">
                <h5 class="card-title mb-0">Form Sampel Order</h5>
            </div>

            <div class="card-body">

                {{-- ALERT SUCCESS --}}
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('sampel.store') }}" method="POST">
                    @csrf

                    <div class="row g-4">

                        {{-- NAMA KLIEN --}}
                        <div class="col-12">
                            <input type="text"
                                   class="form-control form-control-lg"
                                   name="nama_klien"
                                   placeholder="Nama Klien"
                                   required>
                        </div>

                        {{-- NAMA BRAND --}}
                        <div class="col-12">
                            <input type="text"
                                   class="form-control form-control-lg"
                                   name="nama_brand"
                                   placeholder="Nama Brand"
                                   required>
                        </div>

                        {{-- NAMA PRODUK --}}
                        <div class="col-12">
                            <input type="text"
                                   class="form-control form-control-lg"
                                   name="nama_produk"
                                   placeholder="Nama Produk (contoh: Parfum)"
                                   required>
                        </div>

                        {{-- SPESIFIKASI --}}
                        <div class="col-12">
                            <textarea
                                class="form-control"
                                name="spesifikasi"
                                rows="6"
                                placeholder="Spesifikasi produk (aroma, warna, fungsi, dll)"
                                required></textarea>
                        </div>

                        {{-- SUBMIT --}}
                        <div class="col-12">
                            <button type="submit"
                                    class="btn btn-primary btn-lg w-100">
                                Ajukan Permintaan Sampel
                            </button>
                        </div>

                    </div>
                </form>

            </div>

        </div>
    </div>
</div>
@endsection

@section('js')
<script src="{{ asset('assets/libs/air-datepicker/air-datepicker.js') }}"></script>
<script src="{{ asset('assets/js/form/form-layout.init.js') }}"></script>
<script type="module" src="{{ asset('assets/js/app.js') }}"></script>
@endsection
