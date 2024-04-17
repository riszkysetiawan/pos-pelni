@extends('layouts.admin')

@section('title', 'Gudang')
@section('content-header', 'Gudang')

@section('content')

    <div class="card">
        <div class="card-body">
            <form action="{{ route('gudang.store') }}" method="POST" enctype="multipart/form-data">
                @csrf    
                <div class="form-group">
                    <label for="kode_barang">Kode Barang</label>
                    <input type="text" name="kode_barang" class="form-control"
                           id="kode_barang" value="{{ $lastKodeBarang }}"
                            readonly
                           >
                </div>
                <div class="form-group">
                    <label for="kode_barang">No ORDER</label>
                    <input type="text" name="no_order" class="form-control"
                           id="no_order"  

                           >
                </div>
                <div class="form-group">
                    <label for="nama_barang">NAMA BARANG</label>
                    <input type="text" name="nama_barang" class="form-control"
                           id="nama_barang">
                </div>
                <div class="form-group">
                    <label for="letak_barang">LETAK Barang</label>
                    <input type="text" name="letak_barang" class="form-control"
                           id="letak_barang">
                </div>
                <div class="form-group">
                    <label for="berat">BERAT</label>
                    <input type="text" name="berat" class="form-control"
                           id="berat">
                </div>
                <div class="form-group">
                    <label for="tujuan" style="text-align: center; font-size: 24px">Tujuan</label>
                    {{-- <input type="text" name="tujuan" class="form-control"
                           id="tujuan"> --}}
                
                <div class="form-group">
                    <label for="pelabuhan_muat">PELABUHAN AWAL</label>
                    <select name="pelabuhan_awal" id="pelabuhan_awal" class="form-control">
                        <option value="Tanjung Priok Jakarta">Tanjung Priok Jakarta</option>
                        <option value="Tanjung Perak Surabaya">Tanjung Perak Surabaya</option>
                        <option value="Makassar ">Makassar </option>
                        <option value="Bau-Bau">Bau-Bau</option>
                        <option value="Namlea">Namlea</option>
                        <option value="Ambon">Ambon</option>
                        <option value="Ternate">Ternate</option>
                        <option value="Bitung">Bitung</option>
                        <option value="Banda">Banda</option>
                        <option value="Tual">Tual</option>
                        <option value="Dobo"></option>
                        <option value="Kaimana">Kaimana</option>
                        <option value="Bacan">Bacan</option>
                        <option value="Sorong">Sorong</option>
                        <option value="Manokwari">Manokwari</option>
                        <option value="Biak">Biak</option>
                        <option value="Jayapura">Jayapura</option>
                        <option value="Timika">Timika</option>
                        <option value="Agats">Agats</option>
                        <option value="Waingapu Sumba">Waingapu Sumba</option>
                        <option value="Lembar Lombok">Lembar Lombok</option>
                        <option value="Pelabuhan Fak">Fak-Fak</option>
                        <option value="Batulicin">Batulicin</option>
                        <option value="Pare-Pare ">Pare-Pare </option>
                        <option value="Bontang">Bontang</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tujuan">PELABUHAN TUJUAN</label>
                    <select name="pelabuhan_tujuan" id="pelabuhan_tujuan" class="form-control">
                        <option value="Tanjung Priok Jakarta">Tanjung Priok Jakarta</option>
                        <option value="Tanjung Perak Surabaya">Tanjung Perak Surabaya</option>
                        <option value="Makassar ">Makassar </option>
                        <option value="Bau-Bau">Bau-Bau</option>
                        <option value="Namlea">Namlea</option>
                        <option value="Ambon">Ambon</option>
                        <option value="Ternate">Ternate</option>
                        <option value="Bitung">Bitung</option>
                        <option value="Banda">Banda</option>
                        <option value="Tual">Tual</option>
                        <option value="Dobo"></option>
                        <option value="Kaimana">Kaimana</option>
                        <option value="Bacan">Bacan</option>
                        <option value="Sorong">Sorong</option>
                        <option value="Manokwari">Manokwari</option>
                        <option value="Biak">Biak</option>
                        <option value="Jayapura">Jayapura</option>
                        <option value="Timika">Timika</option>
                        <option value="Agats">Agats</option>
                        <option value="Waingapu Sumba">Waingapu Sumba</option>
                        <option value="Lembar Lombok">Lembar Lombok</option>
                        <option value="Pelabuhan Fak">Fak-Fak</option>
                        <option value="Batulicin">Batulicin</option>
                        <option value="Pare-Pare ">Pare-Pare </option>
                        <option value="Bontang">Bontang</option>
                    </select>
                </div>
            </div>
                <div class="form-group">
                    <label for="jenis_muatan">JENIS MUATAN</label>
                  <select name="jenis_muatan" id="jenis_muatan" class="form-control">
                    <option value="Redpack"> Redpack</option>
                    
                  </select>
                </div>
                <div class="form-group">
                    <label for="jenis_kapal">JENIS KAPAL</label>
                  <select name="jenis_kapal" id="jenis_kapal" class="form-control">
                    <option value="KM Kelud">KM Kelud</option>
                    <option value="KM Apu">KM APU</option>
                    <option value="KM Tatamailau">KM Tatamailau</option>
                    <option value="KM Tilongkabila">KM Tilongkabila</option>
                    <option value="KM Labobar">KM Labobar</option>
                    <option value="KM Sirimau">KM Sirimau</option>
                    <option value="KM Bukit Raya">KM Bukit Raya</option>
                    <option value="KM Bukit Siguntang">KM Bukit Siguntang</option>
                    <option value="KM Dorolonda">KM Dorolonda</option>
                    <option value="KM Kambuna">KM Kambuna</option>
                    <option value="KM Lambelu">KM Lambelu</option>
                    <option value="KM Labobar">KM Labobar</option>
                    <option value="KM Leuser">KM Leuser</option>
                    <option value="KM Limboto">KM Limboto</option>
                    <option value="KM Manggala Bhakti">KM Manggala Bhakti</option>
                    <option value="KM Sinabung">KM Sinabung</option>
                    <option value="KM Binaiya">KM Binaiya</option>
                    <option value="KM Darmawangsa">KM Darmawangsa</option>
                    <option value="KM Dobonsolo">KM Dobonsolo</option>
                    <option value="KM Dorolonda">KM Dorolonda</option>
                    <option value="KM Dorolomo">KM Dorolomo</option>
                    <option value="KM Fajar Nusantara">KM Fajar Nusantara</option>
                    <option value="KM Ganda Dewata">KM Ganda Dewata</option>
                    <option value="KM Gunung Dempo">KM Gunung Dempo</option>
                    <option value="KM Gunung Dempo 2">KM Gunung Dempo 2</option>
                    <option value="KM Gunung Jati">KM Gunung Jati</option>
                    <option value="KM Gunung Kawi">KM Gunung Kawi</option>
                    <option value="KM Gunung Leuser">KM Gunung Leuser</option>
                    <option value="KM Gunung Masigit">KM Gunung Masigit</option>
                    <option value="KM Gunung Nona">KM Gunung Nona</option>
                    <option value="KM Gunung Raya">KM Gunung Raya</option>
                    <option value="KM Gunung Sari">KM Gunung Sari</option>
                    <option value="KM Gunung Sibayak">KM Gunung Sibayak</option>
                    <option value="KM Gunung Sinabung">KM Gunung Sinabung</option>
                    <option value="KM Gunung Sitoli">KM Gunung Sitoli</option>
                    <option value="KM Gunung Sitoli 2">KM Gunung Sitoli 2</option>
                    <option value="KM Gunung Soputan">KM Gunung Soputan</option>
                    <option value="KM Gunung Stong">KM Gunung Stong</option>
                    <option value="KM Gunung Sugih">KM Gunung Sugih</option>
                    <option value="KM Gunung Tangkuban Perahu">KM Gunung Tangkuban Perahu</option>
                  </select>
                </div>
                <div class="form-group">
                    <label for="no_order">TGL MASUK</label>
                    <input type="date" name="tgl_masuk" class="form-control" id="tgl_masuk" >
                </div>
                <div class="form-group">
                    <label for="tgl_keluar">TGL KELUAR</label>
                    <input type="date" name="tgl_keluar" class="form-control"
                           id="tgl_keluar">
                </div>
                <button class="btn btn-success btn-block btn-lg" type="submit">Submit</button>
            </form>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
 
@endsection
