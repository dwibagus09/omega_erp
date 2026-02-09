@extends('partials.layouts.master')

@section('title', 'Datatable Tables | Herozi - The Worlds Best Selling Bootstrap Admin & Dashboard Template by SRBThemes')

@section('sub-title', 'Datatable')
@section('pagetitle', 'Home')
@section('buttonTitle', 'Share')
@section('modalTarget', 'shareModal')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/libs/air-datepicker/air-datepicker.css') }}">
<link rel="stylesheet" href="{{ asset('assets/libs/@yaireo/tagify/tagify.css') }}">
@endsection

@section('content')
 <div class="row g-4"></div>
        <div class="col-12">
            <div class="card mb-0 h-100">
                <table class="data-table-basic table-hover align-middle table table-nowrap w-100">
                    <thead class="bg-light bg-opacity-30">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Date</th>
                            <th>Salary</th>
                            <th>Age</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
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
