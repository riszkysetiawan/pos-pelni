@extends('layouts.admin')

@section('title', 'Create Barang')
@section('content-header', 'Create Barang')

@section('content')

    <div class="card">
        <div class="card-body">
            <form action="{{ route('barang.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="panjang">Panjang (Cm):</label>
                    <input type="number" id="panjang" name="panjang" required class="form-control">
                    <label for="lebar">Lebar (CM):</label>
                    <input type="number" id="lebar" name="lebar" required class="form-control">
                    <label for="tinggi">Tinggi (CM):</label>
                    <input type="number" id="tinggi" name="tinggi" required class="form-control">                
                    {{-- <label for="inputanTambahan">Input Tambahan:</label> --}}
                    {{-- <input type="number" id="inputanTambahan" name="inputanTambahan"  class="form-control"> --}}
                    <div id="result" style="display: none;">
                        <h3>Hasil Kubikasi:</h3>
                        <input id="kubikasi" class="form-control" name="hasil_kubikasi" readonly>
                        {{-- <p id="kubikasi" class="form-control" name="hasil_kubikasi"></p> --}}
                        <p id="message" style="color: red;"></p>
                    </div>
                    <div id="submitBtn" >
                    
                    {{-- end kubikasi --}}
                    <div class="form-group">
                    <label for="kode_barang">Kode Barang</label>
                    <input type="text" name="kode_barang" class="form-control"
                           id="kode_barang" 
                           value="{{ $lastKodeBarang }}" readonly
                           >
                    <span class="invalid-feedback" role="alert">
                    </span>
                </div>
                <div class="form-group">
                    <label for="nama_barang">Nama Barang</label>
                    <input type="text" name="nama_barang" class="form-control"
                           id="nama_barang">
                </div>
                <div class="form-group">
                    <label for="last_name">Jenis</label>
                    <input type="text" name="jenis" class="form-control"
                           id="jenis">
                </div>
                <div class="form-group">
                    <label for="tujuan">Tujuan</label>
                    <input type="text" name="tujuan" class="form-control"
                           id="tujuan">
                </div>
                <div class="form-group">
                    <label for="letak_barang">Letak Barang</label>
                    <input type="text" name="letak_barang" class="form-control"
                           id="letak_barang">
                </div>
                <div class="form-group">
                    <label for="no_order">No Orders</label>
                    <input type="text" name="no_order" class="form-control" id="no_order" value="{{ $lastNoOrder }}">
                </div>
                <div class="form-group">
                    <label for="berat">berat</label>
                    <input type="text" name="berat" class="form-control"
                           id="berat">
                </div>
                <div class="form-group">
                    <label for="berat">Gambar</label>
                    <input type="file" name="gambar" class="form-control"
                           id="gambar">
                </div>
                <button class="btn btn-success btn-block btn-lg" type="submit">Submit</button>
            </form>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <script>
        const panjangInput = document.getElementById('panjang');
        const lebarInput = document.getElementById('lebar');
        const tinggiInput = document.getElementById('tinggi');
        const kubikasiInput = document.getElementById('kubikasi');
        const messageP = document.getElementById('message');
        const resultDiv = document.getElementById('result');
        const submitBtn = document.getElementById('submitBtn');

        function calculateKubikasi() {
        const panjang = parseFloat(panjangInput.value);
        const lebar = parseFloat(lebarInput.value);
        const tinggi = parseFloat(tinggiInput.value);

        const kubikasi = (panjang * lebar * tinggi) / 10000000;
        kubikasiInput.value = kubikasi.toFixed(2);
        const maks = 0.05;

        if (kubikasi > maks) {
            messageP.textContent = "Nilai Input Melebihi Kubikasi!";
            submitBtn.style.display = 'none';
        } else {
            messageP.textContent = "";
            submitBtn.style.display = 'block';
        }

        resultDiv.style.display = 'block';
        }

        panjangInput.addEventListener('input', calculateKubikasi);
        lebarInput.addEventListener('input', calculateKubikasi);
        tinggiInput.addEventListener('input', calculateKubikasi);
        // inputanTambahanInput.addEventListener('input', calculateKubikasi);
    </script>
    <script>
        $(document).ready(function () {
            bsCustomFileInput.init();
        });
    </script>
@endsection
