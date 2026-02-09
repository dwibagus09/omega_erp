@extends('partials.layouts.master')

    @section('title', 'Form Layout | Herozi - The Worlds Best Selling Bootstrap Admin & Dashboard Template by SRBThemes')
    @section('sub-title', 'Form Layout' )
    @section('pagetitle', 'Home')
    @section('buttonTitle', 'Share')
    @section('modalTarget', 'shareModal')

    @section('css')
    <link rel="stylesheet" href="{{ asset('assets/libs/air-datepicker/air-datepicker.css') }}">
    @endsection
    
    @section('content')
<div class="row g-4">
    <div class="col-12">
        <div class="card h-100 mb-0">

            <div class="card-header">
                <h5 class="card-title mb-0">Form Sampel Orderr</h5>
            </div>

            <div class="card-body">

            {{-- ALERT SUCCESS --}}
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
                <form action="/sampel/store" method="POST">
                    @csrf

                    <div class="row g-4">

                        <div class="col-12">
                            <input type="text"
                                   class="form-control form-control-lg"
                                   name="nama_klien"
                                   placeholder="Nama Klien">
                        </div>

                        <div class="col-12">
                            <input type="text"
                                   class="form-control form-control-lg"
                                   name="nama_brand"
                                   placeholder="Nama Brand">
                        </div>

                        <div class="col-12">
                            <label class="form-label fw-semibold">
                                Sampel Produk & Spesifikasi
                            </label>

                            <textarea
                                class="form-control"
                                name="sampel_produk"
                                rows="6"
                                placeholder="Tuliskan detail kebutuhan sampel produk yang Anda inginkan"></textarea>
                        </div>

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

    <!-- Air Datepicker js -->
    <script src="{{ asset('assets/libs/air-datepicker/air-datepicker.js') }}"></script>

    <!-- Form-layout init -->
    <script src="{{ asset('assets/js/form/form-layout.init.js') }}"></script>

    <!-- App js -->
    <script type="module" src="{{ asset('assets/js/app.js') }}"></script>
@endsection
