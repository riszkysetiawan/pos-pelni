@extends('layouts.admin')

@section('content-header', 'Dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row">
		<!-- Log on to codeastro.com for more projects -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-purple">
              <div class="inner">
                  <h3>{{$jumlahBarang}}</h3>
                <p>Jumlah Barang</p>
              </div>
              <div class="icon">
              <i class="fas fa-dolly-flatbed"></i>
              </div>
              <a href="{{route('barang.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                  <h3>{{$jumlahBarangGudang}}</h3>
                <p>Jumlah Barang Pada Gudang</p>
              </div>
              <div class="icon">
              <i class="fas fa-chart-line"></i>
              </div>
              <a href="{{route('gudang.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-green">
              <div class="inner">
                  <h3>{{ $jumlah_kontainer_terisi }}</h3>
                <p>Jumlah Container Terisi</p>
              </div>
              <div class="icon">
              <i class="fas fa-dollar-sign"></i>
              </div>
              <a href="{{route('shipper.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->


    </div>

    <div class="row"><!-- Log on to codeastro.com for more projects -->
    <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-teal">
              <div class="inner">
                <h3>{{ $jumlah_kontainer_tersedia}}</h3>

                <p>Jumlah Container Tersedia</p>
              </div>
              <div class="icon">
                <i class="fas fa-money-check-alt"></i>
              </div>
              <a href="{{route('shipper.create')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->

      {{-- <div class="col-lg-4 col-6">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <h3>{{$customers_count}}</h3>

            <p>Total Customers</p>
          </div>
          <div class="icon">
          <i class="fas fa-users"></i>
          </div>
          <a href="{{ route('customers.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div> --}}
      <!-- ./col -->
    </div>
</div><!-- Log on to codeastro.com for more projects -->
@endsection
