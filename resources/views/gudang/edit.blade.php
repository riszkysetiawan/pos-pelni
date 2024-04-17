@extends('layouts.admin')

@section('title', 'Update Customer')
@section('content-header', 'Update Customer')

@section('content')

    <div class="card">
        <div class="card-body">
            <form action="{{ route('gudang.update', $gudang) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="first_name">Kode Barang</label>
                    <input type="text" name="kode_barang" class="form-control"
                           id="kode_barang"
                           value="{{ old('kode_barang', $gudang->kode_barang) }}">
                </div>
                <div class="form-group">
                    <label for="nama_barang">Nama Barang</label>
                    <input type="text" name="nama_barang" class="form-control"
                           id="nama_barang"
                           placeholder="Last Name" value="{{ old('nama_barang', $gudang->nama_barang) }}">
                </div>
                <div class="form-group">
                    <label for="email">NO ORDER</label>
                    <input type="text" name="no_order" class="form-control" id="jenis"
                           value="{{ old('no_order', $gudang->no_order) }}">
                </div>

                <div class="form-group">
                    <label for="tujuan">LETAK BARANG</label>
                    <input type="text" name="letak_barang" class="form-control" id="letak_barang"
                          value="{{ old('letak_barang', $gudang->letak_barang) }}">
                </div>
                <div class="form-group">
                    <label for="address">BERAT</label>
                    <input type="text" name="berat" class="form-control"
                           id="berat"
                           value="{{ old('berat', $gudang->berat) }}">
                </div>
                {{-- <div class="form-group">
                    <label for="address">TUJUAN</label>
                    <input type="text" name="tujuan" class="form-control"
                           id="tujuan"
                           value="{{ old('tujuan', $gudang->tujuan) }}">
                </div> --}}
                <div class="form-group">
                    <label for="tujuan" style="text-align: center; font-size: 24px">Tujuan</label>
                    {{-- <input type="text" name="tujuan" class="form-control"
                           id="tujuan"> --}}
                
                <div class="form-group">
                    <label for="pelabuhan_muat">PELABUHAN AWAL</label>
                    <select name="pelabuhan_awal" id="pelabuhan_awal" class="form-control">
                        {{-- <option value="Pelabuhan Makassar" {{ $gudang->pelabuhan_awal === 'Pelabuhan Makassar' ? 'selected' : '' }}>Makassar</option> --}}
                        <option value="Tanjung Priok Jakarta" {{ $gudang->pelabuhan_awal === 'Tanjung Priok Jakarta' ? 'selected' : '' }}>Tanjung Priok Jakarta</option>
                        <option value="Tanjung Perak Surabaya" {{ $gudang->pelabuhan_awal === 'Tanjung Perak Surabaya' ? 'selected' : '' }}>Tanjung Perak Surabaya</option>
                        <option value="Makassar" {{ $gudang->pelabuhan_awal === 'Makassar' ? 'selected' : '' }}>Makassar </option>
                        <option value="Bau-Bau" {{ $gudang->pelabuhan_awal === 'Bau-Bau' ? 'selected' : '' }}>Bau-Bau</option>
                        <option value="Namlea" {{ $gudang->pelabuhan_awal === 'Namlea' ? 'selected' : '' }}>Namlea</option>
                        <option value="Ambon" {{ $gudang->pelabuhan_awal === 'Ambon' ? 'selected' : '' }}>Ambon</option>
                        <option value="Ternate" {{ $gudang->pelabuhan_awal === 'Ternate' ? 'selected' : '' }}>Ternate</option>
                        <option value="Bitung" {{ $gudang->pelabuhan_awal === 'Bitung' ? 'selected' : '' }}>Bitung</option>
                        <option value="Banda" {{ $gudang->pelabuhan_awal === 'Banda' ? 'selected' : '' }}>Banda</option>
                        <option value="Tual" {{ $gudang->pelabuhan_awal === 'Tual' ? 'selected' : '' }}>Tual</option>
                        <option value="Dobo" {{ $gudang->pelabuhan_awal === 'Dobo' ? 'selected' : '' }}></option>
                        <option value="Kaimana" {{ $gudang->pelabuhan_awal === 'Kaimana' ? 'selected' : '' }}>Kaimana</option>
                        <option value="Bacan" {{ $gudang->pelabuhan_awal === 'Bacan' ? 'selected' : '' }}>Bacan</option>
                        <option value="Sorong" {{ $gudang->pelabuhan_awal === 'Sorong' ? 'selected' : '' }}>Sorong</option>
                        <option value="Manokwari" {{ $gudang->pelabuhan_awal === 'Manokwari' ? 'selected' : '' }}>Manokwari</option>
                        <option value="Biak" {{ $gudang->pelabuhan_awal === 'Biak' ? 'selected' : '' }}>Biak</option>
                        <option value="Jayapura" {{ $gudang->pelabuhan_awal === 'Jayapura' ? 'selected' : '' }}>Jayapura</option>
                        <option value="Timika" {{ $gudang->pelabuhan_awal === 'Timika' ? 'selected' : '' }}>Timika</option>
                        <option value="Agats" {{ $gudang->pelabuhan_awal === 'Agats' ? 'selected' : '' }}>Agats</option>
                        <option value="Waingapu Sumba" {{ $gudang->pelabuhan_awal === 'Waingapu Sumba' ? 'selected' : '' }}>Waingapu Sumba</option>
                        <option value="Lembar Lombok" {{ $gudang->pelabuhan_awal === 'Lembar Lombok' ? 'selected' : '' }}>Lembar Lombok</option>
                        <option value="Pelabuhan Fak" {{ $gudang->pelabuhan_awal === 'Pelabuhan Fak' ? 'selected' : '' }}>Fak-Fak</option>
                        <option value="Batulicin" {{ $gudang->pelabuhan_awal === 'Batulicin' ? 'selected' : '' }}>Batulicin</option>
                        <option value="Pare-Pare " {{ $gudang->pelabuhan_awal === 'Pare-Pare ' ? 'selected' : '' }}>Pare-Pare </option>
                        <option value="Bontang" {{ $gudang->pelabuhan_awal === 'Bontang' ? 'selected' : '' }}>Bontang</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tujuan">PELABUHAN TUJUAN</label>
                    <select name="pelabuhan_tujuan" id="pelabuhan_tujuan" class="form-control">
                        <option value="Tanjung Priok Jakarta" {{ $gudang->pelabuhan_tujuan === 'Tanjung Priok Jakarta' ? 'selected' : '' }}>Tanjung Priok Jakarta</option>
                        <option value="Tanjung Perak Surabaya" {{ $gudang->pelabuhan_tujuan === 'Tanjung Perak Surabaya' ? 'selected' : '' }}>Tanjung Perak Surabaya</option>
                        <option value="Makassar" {{ $gudang->pelabuhan_tujuan === 'Makassar' ? 'selected' : '' }}>Makassar </option>
                        <option value="Bau-Bau" {{ $gudang->pelabuhan_tujuan === 'Bau-Bau' ? 'selected' : '' }}>Bau-Bau</option>
                        <option value="Namlea" {{ $gudang->pelabuhan_tujuan === 'Namlea' ? 'selected' : '' }}>Namlea</option>
                        <option value="Ambon" {{ $gudang->pelabuhan_tujuan === 'Ambon' ? 'selected' : '' }}>Ambon</option>
                        <option value="Ternate" {{ $gudang->pelabuhan_tujuan === 'Ternate' ? 'selected' : '' }}>Ternate</option>
                        <option value="Bitung" {{ $gudang->pelabuhan_tujuan === 'Bitung' ? 'selected' : '' }}>Bitung</option>
                        <option value="Banda" {{ $gudang->pelabuhan_tujuan === 'Banda' ? 'selected' : '' }}>Banda</option>
                        <option value="Tual" {{ $gudang->pelabuhan_tujuan === 'Tual' ? 'selected' : '' }}>Tual</option>
                        <option value="Dobo" {{ $gudang->pelabuhan_tujuan === 'Dobo' ? 'selected' : '' }}></option>
                        <option value="Kaimana" {{ $gudang->pelabuhan_tujuan === 'Kaimana' ? 'selected' : '' }}>Kaimana</option>
                        <option value="Bacan" {{ $gudang->pelabuhan_tujuan === 'Bacan' ? 'selected' : '' }}>Bacan</option>
                        <option value="Sorong" {{ $gudang->pelabuhan_tujuan === 'Sorong' ? 'selected' : '' }}>Sorong</option>
                        <option value="Manokwari" {{ $gudang->pelabuhan_tujuan === 'Manokwari' ? 'selected' : '' }}>Manokwari</option>
                        <option value="Biak" {{ $gudang->pelabuhan_tujuan === 'Biak' ? 'selected' : '' }}>Biak</option>
                        <option value="Jayapura" {{ $gudang->pelabuhan_tujuan === 'Jayapura' ? 'selected' : '' }}>Jayapura</option>
                        <option value="Timika" {{ $gudang->pelabuhan_tujuan === 'Timika' ? 'selected' : '' }}>Timika</option>
                        <option value="Agats" {{ $gudang->pelabuhan_tujuan === 'Agats' ? 'selected' : '' }}>Agats</option>
                        <option value="Waingapu Sumba" {{ $gudang->pelabuhan_tujuan === 'Waingapu Sumba' ? 'selected' : '' }}>Waingapu Sumba</option>
                        <option value="Lembar Lombok" {{ $gudang->pelabuhan_tujuan === 'Lembar Lombok' ? 'selected' : '' }}>Lembar Lombok</option>
                        <option value="Pelabuhan Fak" {{ $gudang->pelabuhan_tujuan === 'Pelabuhan Fak' ? 'selected' : '' }}>Fak-Fak</option>
                        <option value="Batulicin" {{ $gudang->pelabuhan_tujuan === 'Batulicin' ? 'selected' : '' }}>Batulicin</option>
                        <option value="Pare-Pare " {{ $gudang->pelabuhan_tujuan === 'Pare-Pare ' ? 'selected' : '' }}>Pare-Pare </option>
                        <option value="Bontang" {{ $gudang->pelabuhan_tujuan === 'Bontang' ? 'selected' : '' }}>Bontang</option>
                    </select>
                </div>
            </div>
                <div class="form-group">
                    <label for="jenis_muatan">JENIS MUATAN</label>
                  <select name="jenis_muatan" id="jenis_muatan" class="form-control">
                    <option value="Redpack" {{ $gudang->jenis_muatan == 'Redpack' ? 'selected' : '' }}> Redpack</option>
                  </select>
                </div>
                <div class="form-group">
                    <label for="jenis_kapal">JENIS KAPAL</label>
                  <select name="jenis_kapal" id="jenis_kapal" class="form-control">
                    <option value="KM Kelud" {{ $gudang->jenis_kapal == 'KM Kelud' ? 'selected' : '' }}>KM Kelud</option>
                    <option value="KM Apu" {{ $gudang->jenis_kapal == 'KM Apu' ? 'selected' : '' }}>KM APU</option>
                    <option value="KM Tatamailau" {{ $gudang->jenis_kapal == 'KM Tatamailau' ? 'selected' : '' }}>KM Tatamailau</option>
                    <option value="KM Tilongkabila" {{ $gudang->jenis_kapal == 'KM Tilongkabila' ? 'selected' : '' }}>KM Tilongkabila</option>
                    <option value="KM Labobar" {{ $gudang->jenis_kapal == 'KM Labobar' ? 'selected' : '' }}>KM Labobar</option>
                    <option value="KM Sirimau" {{ $gudang->jenis_kapal == 'KM Sirimau' ? 'selected' : '' }}>KM Sirimau</option>
                    <option value="KM Bukit Raya" {{ $gudang->jenis_kapal == 'KM Bukit Raya' ? 'selected' : '' }}>KM Bukit Raya</option>
                    <option value="KM Bukit Siguntang" {{ $gudang->jenis_kapal == 'KM Bukit Siguntang' ? 'selected' : '' }}>KM Bukit Siguntang</option>
                    <option value="KM Dorolonda" {{ $gudang->jenis_kapal == 'KM Dorolonda' ? 'selected' : '' }}>KM Dorolonda</option>
                    <option value="KM Kambuna" {{ $gudang->jenis_kapal == 'KM Kambuna' ? 'selected' : '' }}>KM Kambuna</option>
                    <option value="KM Lambelu" {{ $gudang->jenis_kapal == 'KM Lambelu' ? 'selected' : '' }}>KM Lambelu</option>
                    <option value="KM Labobar" {{ $gudang->jenis_kapal == 'KM Labobar' ? 'selected' : '' }}>KM Labobar</option>
                    <option value="KM Leuser" {{ $gudang->jenis_kapal == 'KM Leuser' ? 'selected' : '' }}>KM Leuser</option>
                    <option value="KM Limboto" {{ $gudang->jenis_kapal == 'KM Limboto' ? 'selected' : '' }}>KM Limboto</option>
                    <option value="KM Manggala Bhakti" {{ $gudang->jenis_kapal == 'KM Manggala Bhakti' ? 'selected' : '' }}>KM Manggala Bhakti</option>
                    <option value="KM Sinabung" {{ $gudang->jenis_kapal == 'KM Sinabung' ? 'selected' : '' }}>KM Sinabung</option>
                    <option value="KM Binaiya" {{ $gudang->jenis_kapal == 'KM Binaiya' ? 'selected' : '' }}>KM Binaiya</option>
                    <option value="KM Darmawangsa" {{ $gudang->jenis_kapal == 'KM Darmawangsa' ? 'selected' : '' }}>KM Darmawangsa</option>
                    <option value="KM Dobonsolo" {{ $gudang->jenis_kapal == 'KM Dobonsolo' ? 'selected' : '' }}>KM Dobonsolo</option>
                    <option value="KM Dorolonda" {{ $gudang->jenis_kapal == 'KM Dorolonda' ? 'selected' : '' }}>KM Dorolonda</option>
                    <option value="KM Dorolomo" {{ $gudang->jenis_kapal == 'KM Dorolomo' ? 'selected' : '' }}>KM Dorolomo</option>
                    <option value="KM Fajar Nusantara" {{ $gudang->jenis_kapal == 'KM Fajar Nusantara' ? 'selected' : '' }}>KM Fajar Nusantara</option>
                    <option value="KM Ganda Dewata" {{ $gudang->jenis_kapal == 'KM Ganda Dewata' ? 'selected' : '' }}>KM Ganda Dewata</option>
                    <option value="KM Gunung Dempo" {{ $gudang->jenis_kapal == 'KM Gunung Dempo' ? 'selected' : '' }}>KM Gunung Dempo</option>
                    <option value="KM Gunung Dempo 2" {{ $gudang->jenis_kapal == 'KM Gunung Dempo 2' ? 'selected' : '' }}>KM Gunung Dempo 2</option>
                    <option value="KM Gunung Jati" {{ $gudang->jenis_kapal == 'KM Gunung Jati' ? 'selected' : '' }}>KM Gunung Jati</option>
                    <option value="KM Gunung Kawi" {{ $gudang->jenis_kapal == 'KM Gunung Kawi' ? 'selected' : '' }}>KM Gunung Kawi</option>
                    <option value="KM Gunung Leuser" {{ $gudang->jenis_kapal == 'KM Gunung Leuser' ? 'selected' : '' }}>KM Gunung Leuser</option>
                    <option value="KM Gunung Masigit" {{ $gudang->jenis_kapal == 'KM Gunung Masigit' ? 'selected' : '' }}>KM Gunung Masigit</option>
                    <option value="KM Gunung Nona" {{ $gudang->jenis_kapal == 'KM Gunung Nona' ? 'selected' : '' }}>KM Gunung Nona</option>
                    <option value="KM Gunung Raya" {{ $gudang->jenis_kapal == 'KM Gunung Raya' ? 'selected' : '' }}>KM Gunung Raya</option>
                    <option value="KM Gunung Sari" {{ $gudang->jenis_kapal == 'KM Gunung Sari' ? 'selected' : '' }}>KM Gunung Sari</option>
                    <option value="KM Gunung Sibayak" {{ $gudang->jenis_kapal == 'KM Gunung Sibayak' ? 'selected' : '' }}>KM Gunung Sibayak</option>
                    <option value="KM Gunung Sinabung" {{ $gudang->jenis_kapal == 'KM Gunung Sinabung' ? 'selected' : '' }}>KM Gunung Sinabung</option>
                    <option value="KM Gunung Sitoli" {{ $gudang->jenis_kapal == 'KM Gunung Sitoli' ? 'selected' : '' }}>KM Gunung Sitoli</option>
                    <option value="KM Gunung Sitoli 2" {{ $gudang->jenis_kapal == 'KM Gunung Sitoli 2' ? 'selected' : '' }}>KM Gunung Sitoli 2</option>
                    <option value="KM Gunung Soputan" {{ $gudang->jenis_kapal == 'KM Gunung Soputan' ? 'selected' : '' }}>KM Gunung Soputan</option>
                    <option value="KM Gunung Stong" {{ $gudang->jenis_kapal == 'KM Gunung Stong' ? 'selected' : '' }}>KM Gunung Stong</option>
                    <option value="KM Gunung Sugih" {{ $gudang->jenis_kapal == 'KM Gunung Sugih' ? 'selected' : '' }}>KM Gunung Sugih</option>
                    <option value="KM Gunung Tangkuban Perahu" {{ $gudang->jenis_kapal == 'KM Gunung Tangkuban Perahu' ? 'selected' : '' }}>KM Gunung Tangkuban Perahu</option>
                  </select>
                </div>
                <div class="form-group">
                    <label for="address">TANGGAL MASUK</label>
                    <input type="date" name="tgl_masuk" class="form-control"
                           id="tgl_masuk"
                           value="{{ old('tgl_masuk', $gudang->tgl_masuk) }}">
                </div>
                <div class="form-group">
                    <label for="address">TANGGAL KELUAR</label>
                    <input type="tujuan" name="tgl_keluar" class="form-control"
                           id="tgl_keluar"
                           value="{{ old('tgl_keluar', $gudang->tgl_keluar) }}">
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
