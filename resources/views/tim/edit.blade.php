@extends('partials.layouts.master')

@section('title', 'Edit Sampel')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card p-4">

            <h4 class="mb-4">Edit Sampel Order</h4>

          <form action="{{ route('tim.update', $data->id) }}" method="POST">

                @csrf

                <div class="mb-3">
                    <label class="form-label">Nama Klien</label>
                    <input type="text" class="form-control" name="nama_klien"
                        value="{{ $data->nama_pelanggan }}">

                </div>

                <div class="mb-3">
                    <label class="form-label">Nama Brand</label>
                    <input type="text" class="form-control" name="nama_brand"
                       value="{{ $data->nama_brand ?? '' }}">
                </div>
                <div class="mb-3">
    <label class="form-label">Sampel Produk & Spesifikasi</label>
    <input type="text" name="sampel_produk" class="form-control" 
           value="{{ $sampel_produk ?? '' }}">
</div>

                <button type="submit" class="btn btn-primary">
                    Simpan
                </button>

                <a href="{{ route('tim.index') }}" class="btn btn-secondary">
                    Batal
                </a>
            </form>

        </div>
    </div>
</div>
@endsection