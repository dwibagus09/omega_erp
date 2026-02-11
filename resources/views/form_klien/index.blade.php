@extends('partials.layouts.master2')

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
        <div class="col-12 col-lg-6">
            <div class="card h-100 mb-0">
                <div class="card-header">
                    <h5 class="card-title mb-0">Form Grid</h5>
                </div>
                <div class="card-body">
                    <form action="#!">
                        <div class="row g-4">
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="firstnameLayout1" placeholder="First Name">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="lastnameLayout1" placeholder="Last Name">
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" id="emailLayout1" placeholder="Email">
                            </div>
                            <div class="col-md-6">
                                <input type="tel" class="form-control" id="phoneLayout1" placeholder="Phone Number">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="usernameLayout1" placeholder="Username">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="formLayout1-dob" placeholder="Date of Birth">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="companyLayout1" placeholder="Company Name">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="zipcodeLayout1" placeholder="Zip Code">
                            </div>
                            <div class="col-md-6">
                                <input class="form-control" id="addressLayout1" placeholder="Address">
                            </div>
                            <div class="col-md-6">
                                <select class="form-control" id="stateSelectLayout1">
                                    <option value="AL">Alabama</option>
                                    <option value="AK">Alaska</option>
                                    <option value="AZ">Arizona</option>
                                    <option value="AR">Arkansas</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <div class="form-check mb-4">
                                    <input type="checkbox" class="form-check-input" id="terms">
                                    <label class="form-check-label" for="terms">I agree to the terms and conditions</label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit Form</button>
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
