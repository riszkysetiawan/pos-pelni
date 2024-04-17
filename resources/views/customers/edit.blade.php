@extends('layouts.admin')

@section('title', 'Update Customer')
@section('content-header', 'Update Customer')

@section('content')

    <div class="card">
        <div class="card-body">
            <form action="{{ route('barang.update', $barang) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="first_name">Kode Barang</label>
                    <input type="text" name="kode_barang" class="form-control"
                           id="kode_barang"
                           value="{{ old('kode_barang', $barang->kode_barang) }}">
                </div>
                <div class="form-group">
                    <label for="nama_barang">Nama Barang</label>
                    <input type="text" name="nama_barang" class="form-control"
                           id="nama_barang"
                           placeholder="Last Name" value="{{ old('nama_barang', $barang->nama_barang) }}">
                </div>
                <div class="form-group">
                    <label for="email">Jenis</label>
                    <input type="text" name="jenis" class="form-control" id="jenis"
                           value="{{ old('jenis', $barang->jenis) }}">
                </div>

                <div class="form-group">
                    <label for="tujuan">Tujuan</label>
                    <input type="text" name="tujuan" class="form-control" id="tujuan"
                          value="{{ old('tujuan', $barang->tujuan) }}">
                </div>
                <div class="form-group">
                    <label for="address">Letak Barang</label>
                    <input type="text" name="letak_barang" class="form-control"
                           id="letak_barang"
                           value="{{ old('letak_barang', $barang->letak_barang) }}">
                </div>
                <div class="form-group">
                    <label for="address">No Orders</label>
                    <input type="text" name="no_order" class="form-control"
                           id="no_order"
                           value="{{ old('no_order', $barang->no_order) }}">
                </div>
                <div class="form-group">
                    <label for="address">Berat</label>
                    <input type="text" name="berat" class="form-control"
                           id="berat"
                           value="{{ old('berat', $barang->berat) }}">
                </div>
                <div class="form-group">
                    <label for="avatar">Gambar</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="gambar" id="gambar">
                        <label class="custom-file-label" for="gambar">Choose file</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="address">Hasil Kubikasi</label>
                    <input type="text" name="hasil_kubikasi" class="form-control"
                           id="hasil_kubikasi"
                           value="{{ old('hasil_kubikasi', $barang->hasil_kubikasi) }}">
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
