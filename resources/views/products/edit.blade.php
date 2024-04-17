@extends('layouts.admin')

@section('title', 'Edit Shipper')
@section('content-header', 'Edit Shipper')

@section('content')

<div class="card">
    <div class="card-body">

        <form action="{{ route('shipper.update', $shipper) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">NO ORDER</label>
                <input type="text" name="no_order" class="form-control" id="no_order"
                     value="{{ old('name', $shipper->no_order) }}">
            </div>
            <div class="form-group">
                <label for="nama_shipper">NAMA SHIPPER</label>
                <input type="text" name="nama_shipper" class="form-control" id="nama_shipper"
                     value="{{ old('nama_shipper', $shipper->nama_shipper) }}">
            </div>
            <div class="form-group">
                <label for="barcode">TUJUAN</label>
                <input type="text" name="tujuan" class="form-control"
                    id="tujuan" value="{{ old('barcode', $shipper->tujuan) }}">
            </div>
            <div class="form-group">
                <label for="alamat">ALAMAT</label>
                <input type="text" name="alamat" class="form-control"
                    id="alamat" value="{{ old('barcode', $shipper->alamat) }}">
            </div>
            <button class="btn btn-success btn-block btn-lg" type="submit">Save Changes</button>
        </form>
    </div>
</div>
@endsection

@section('js')
<script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
<script>
    $(document).ready(function () {
        bsCustomFileInput.init();
    });
</script>
@endsection