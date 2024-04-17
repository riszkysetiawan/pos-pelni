@extends('layouts.admin')

@section('title', 'Form Shipping Data')
@section('content-header', 'Form Data Shipping')

@section('content')

    <div class="card">
        <form id="shipper-form" action="{{ route('shipper.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="no_order">Kode Letak</label>
                <input type="text" name="no_order" class="form-control" id="no_order">
            </div>
            <div class="form-group">
                <label for="nama_shipper">Nama Shipper</label>
                <input type="text" name="nama_shipper" class="form-control" id="nama_shipper">
            </div>
            <div class="form-group">
                <label for="tujuan">Tujuan</label>
                <input type="text" name="tujuan" class="form-control" id="tujuan">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" class="form-control" id="alamat">
            </div>
            <div class="form-group">
                <label for="jumlah">Jumlah QTY</label>
                <input type="number" name="jumlah" class="form-control" id="jumlah">
            </div>
            <button class="btn btn-success btn-block btn-lg" type="submit">Submit</button>
        </form>
    </div>
    <div class="card-body">
        <!-- Log on to codeastro.com for more projects -->
        <div class="kotak">
            <div class="seating-plan">
                <div class="row">
                    <div class="seat" id="fastmoving" data-order="MKS001-1" onclick="selectSeat('MKS001-1')">
                        <h6 class="kode-seat">MKS001-1</h6>
                    </div>
                    <div class="seat" id="fastmoving" data-order="MKS001-2" onclick="selectSeat('MKS001-2')">
                        <h6 class="kode-seat">MKS001-2</h6>
                    </div>
                    <div class="seat" id="middlemoving" data-order="BAN001-1" onclick="selectSeat('BAN001-1')">
                        <h6 class="kode-seat">BAN-001</h6>
                    </div>
                    <div class="seat" id="middlemoving" data-order="BAN001-2" onclick="selectSeat('BAN001-2')">
                        <h6 class="kode-seat">BAN001-2</h6>
                    </div>
                    <div class="seat" id="slowmoving" data-order="KAL001-1" onclick="selectSeat('KAL001-1')">
                        <h6 class="kode-seat">KAL001-1 </h6>
                    </div>
                    <div class="seat" id="slowmoving" data-order="FAK001-1" onclick="selectSeat('FAK001-1')">
                        <h6 class="kode-seat">FAK001-1</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="seat" id="fastmoving" data-order="MKS001-3" onclick="selectSeat('MKS001-3')">
                        <h6 class="kode-seat"> MKS001-3</h6>
                    </div>
                    <div class="seat" id="fastmoving" data-order="MKS001-4"onclick="selectSeat('MKS001-4')">
                        <h6 class="kode-seat"> MKS001-4</h6>
                    </div>
                    <div class="seat" id="middlemoving" data-order="BAN001-3" onclick="selectSeat('BAN001-3')">
                        <h6 class="kode-seat">BAN001-3 </h6>
                    </div>
                    <div class="seat" id="middlemoving" data-order="BAN001-4" onclick="selectSeat('BAN001-4')">
                        <h6 class="kode-seat">BAN001-4 </h6>
                    </div>
                    <div class="seat" id="slowmoving" data-order="KAL001-2" onclick="selectSeat('KAL001-2')">
                        <h6 class="kode-seat">KAL001-2</h6>
                    </div>
                    <div class="seat" id="slowmoving" data-order="FAK001-2" onclick="selectSeat('FAK001-2')">
                        <h6 class="kode-seat">FAK001-2</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="seat" id="fastmoving" data-order="MKS001-5" onclick="selectSeat('MKS001-5')">
                        <h6 class="kode-seat">MKS001-5</h6>
                    </div>
                    <div class="seat" id="fastmoving" data-order="BAU001-1" onclick="selectSeat('BAU001-1')">
                        <h6 class="kode-seat">BAU001-1</h6>
                    </div>
                    <div class="seat" id="middlemoving" data-order="BAN001-5" onclick="selectSeat('BAN001-5')">
                        <h6 class="kode-seat">BAN001-5 </h6>
                    </div>
                    <div class="seat" id="middlemoving" data-order="BAN001-6" onclick="selectSeat('BAN001-6')">
                        <h6 class="kode-seat">BAN001-6 </h6>
                    </div>
                    <div class="seat" id="slowmoving" data-order="KAL001-3" onclick="selectSeat('KAL001-3')">
                        <h6 class="kode-seat">KAL001-3</h6>
                    </div>
                    <div class="seat" id="slowmoving" data-order="FAK001-3" onclick="selectSeat('FAK001-3')">
                        <h6 class="kode-seat">FAK001-3</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="seat" id="fastmoving" data-order="BAU001-2" onclick="selectSeat('BAU001-2')">
                        <h6 class="kode-seat"> BAU001-2</h6>
                    </div>
                    <div class="seat" id="fastmoving" data-order="BAU001-3" onclick="selectSeat('BAU001-3')">
                        <h6 class="kode-seat">BAU001-3</h6>
                    </div>
                    <div class="seat" id="middlemoving" data-order="TUAL001-1" onclick="selectSeat('TUAL001-1')">
                        <h6 class="kode-seat">TUAL001-1</h6>
                    </div>
                    <div class="seat" id="middlemoving" data-order="TUAL001-2" onclick="selectSeat('TUAL001-2')">
                        <h6 class="kode-seat">TUAL001-2 </h6>
                    </div>
                    <div class="seat" id="slowmoving" data-order="KAL001-4" onclick="selectSeat('KAL001-4')">
                        <h6 class="kode-seat">KAL001-4 </h6>
                    </div>
                    <div class="seat" id="slowmoving" data-order="FAK001-4" onclick="selectSeat('FAK001-4')">
                        <h6 class="kode-seat">FAK001-4</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="seat" id="fastmoving" data-order="BAU001-4" onclick="selectSeat('BAU001-4')">
                        <h6 class="kode-seat">BAU001-4</h6>
                    </div>
                    <div class="seat" id="fastmoving" data-order="BAU001-5" onclick="selectSeat('BAU001-5')">
                        <h6 class="kode-seat"> BAU001-5</h6>
                    </div>
                    <div class="seat" id="middlemoving" data-order="TUAL001-3" onclick="selectSeat('TUAL001-3')">
                        <h6 class="kode-seat">TUAL001-3 </h6>
                    </div>
                    <div class="seat" id="middlemoving" data-order="TUAL001-4" onclick="selectSeat('TUAL001-4')">
                        <h6 class="kode-seat">TUAL001-4 </h6>
                    </div>
                    <div class="seat" id="slowmoving" data-order="KAL001-5" onclick="selectSeat('KAL001-5')">
                        <h6 class="kode-seat">KAL001-5 </h6>
                    </div>
                    <div class="seat" id="slowmoving" data-order="FAK001-5" onclick="selectSeat('FAK001-5')">
                        <h6 class="kode-seat">FAK001-5</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="seat" id="fastmoving" data-order="BAU001-6" onclick="selectSeat('BAU001-6')">
                        <h6 class="kode-seat"> BAU001-6</h6>
                    </div>
                    <div class="seat" id="fastmoving" data-order="BAU001-7" onclick="selectSeat('BAU001-7')">
                        <h6 class="kode-seat"> BAU001-7</h6>
                    </div>
                    <div class="seat" id="middlemoving" data-order="TUAL001-5" onclick="selectSeat('TUAL001-5')">
                        <h6 class="kode-seat">TUAL001-5 </h6>
                    </div>
                    <div class="seat" id="middlemoving" data-order="TUAL001-6" onclick="selectSeat('TUAL001-6')">
                        <h6 class="kode-seat">TUAL001-6 </h6>
                    </div>
                    <div class="seat" id="slowmoving" data-order="KAL001-6" onclick="selectSeat('KAL001-6')">
                        <h6 class="kode-seat">KAL001-6 </h6>
                    </div>
                    <div class="seat" id="slowmoving" data-order="FAK001-6" onclick="selectSeat('FAK001-6')">
                        <h6 class="kode-seat">FAK001-6</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="seat" id="fastmoving" data-order="BAU001-8" onclick="selectSeat('BAU001-8')">
                        <h6 class="kode-seat">BAU001-8</h6>
                    </div>
                    <div class="seat" id="fastmoving" data-order="AMB001-1" onclick="selectSeat('AMB001-1')">
                        <h6 class="kode-seat"> AMB001-1</h6>
                    </div>
                    <div class="seat" id="middlemoving" data-order="TUAL001-7" onclick="selectSeat('TUAL001-7')">
                        <h6 class="kode-seat"> TUAL001-7</h6>
                    </div>
                    <div class="seat" id="middlemoving"data-order="TUAL001-8" onclick="selectSeat('TUAL001-8')">
                        <h6 class="kode-seat">TUAL001-8 </h6>
                    </div>
                    <div class="seat" id="slowmoving" data-order="KAL001-7" onclick="selectSeat('KAL001-7')">
                        <h6 class="kode-seat">KAL001-7 </h6>
                    </div>
                    <div class="seat" id="slowmoving" data-order="FAK001-7" onclick="selectSeat('FAK001-7')">
                        <h6 class="kode-seat">FAK001-7</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="seat" id="fastmoving" data-order="AMB001-2" onclick="selectSeat('AMB001-2')">
                        <h6 class="kode-seat"> AMB001-2</h6>
                    </div>
                    <div class="seat" id="fastmoving" data-order="AMB001-3" onclick="selectSeat('AMB001-3')">
                        <h6 class="kode-seat"> AMB001-3</h6>
                    </div>
                    <div class="seat" id="middlemoving" data-order="DOB001-1" onclick="selectSeat('TUAL001-8')">
                        <h6 class="kode-seat">TUAL001-8 </h6>
                    </div>
                    <div class="seat" id="middlemoving" data-order="DOB001-2" onclick="selectSeat('DOB001-1')">
                        <h6 class="kode-seat">DOB001-1</h6>
                    </div>
                    <div class="seat" id="slowmoving" data-order="KAL001-8" onclick="selectSeat('KAL001-8')">
                        <h6 class="kode-seat">KAL001-8 </h6>
                    </div>
                    <div class="seat" id="slowmoving" data-order="FAK001-8" onclick="selectSeat('FAK001-8')">
                        <h6 class="kode-seat">FAK001-8</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="seat" id="fastmoving" data-order="AMB001-4" onclick="selectSeat('AMB001-4')">
                        <h6 class="kode-seat">AMB001-4</h6>
                    </div>
                    <div class="seat" id="fastmoving" data-order="AMB001-5" onclick="selectSeat('AMB001-5')">
                        <h6 class="kode-seat"> AMB001-5</h6>
                    </div>
                    <div class="seat" id="middlemoving" data-order="DOB001-3" onclick="selectSeat('DOB001-3')">
                        <h6 class="kode-seat">DOB001-3 </h6>
                    </div>
                    <div class="seat" id="middlemoving" data-order="DOB001-4" onclick="selectSeat('DOB001-4')">
                        <h6 class="kode-seat">DOB001-4</h6>
                    </div>
                    <div class="seat" id="slowmoving" data-order="KAL001-9" onclick="selectSeat('KAL001-9')">
                        <h6 class="kode-seat">KAL001-9 </h6>
                    </div>
                    <div class="seat" id="slowmoving" data-order="FAK001-9" onclick="selectSeat('FAK001-9')">
                        <h6 class="kode-seat">FAK001-9</h6>
                    </div>
                </div>
                <div class="row">
                    <div class="seat" id="fastmoving" data-order="AMB001-6" onclick="selectSeat('AMB001-6')">
                        <h6 class="kode-seat">AMB001-6</h6>
                    </div>
                    <div class="seat" id="fastmoving" data-order="AMB001-7" onclick="selectSeat('AMB001-7')">
                        <h6 class="kode-seat"> AMB001-7</h6>
                    </div>
                    <div class="seat" id="middlemoving" data-order="DOB001-5" onclick="selectSeat('DOB001-5')">
                        <h6 class="kode-seat"> DOB001-5 </h6>
                    </div>
                    <div class="seat" id="middlemoving" data-order="DOB001-6" onclick="selectSeat('DOB001-6')">
                        <h6 class="kode-seat">DOB001-6 </h6>
                    </div>
                    <div class="seat" id="slowmoving" data-order="KAL001-10" onclick="selectSeat('KAL001-10')">
                        <h6 class="kode-seat">KAL001-10 </h6>
                    </div>
                    <div class="seat" id="slowmoving" data-order="FAK001-10" onclick="selectSeat('FAK001-10')">
                        <h6 class="kode-seat">FAK001-10 </h6>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('js')
    <script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function selectSeat(seatNumber) {
            document.getElementById('no_order').value = seatNumber;
        }
    </script>

    <script>
        $(document).ready(function() {
            var takenSeats = {!! json_encode($takenSeats) !!};


            function filterSeatsByKeyword(keyword) {
                $('.seat').each(function() {
                    var seatOrder = $(this).data('order');
                    var seatId = $(this).attr('id');

                    // KALAU KETEMU KATA KUNCI SEARCHING ACTION DISINI WAK
                    if (seatId.includes(keyword) || seatOrder.includes(keyword)) {
                        $(this).css('background-color', '#BA704F');
                    } else {
                        // DEFAULT E NAK KENE WAKK
                        if (seatId === 'fastmoving') {
                            $(this).css('background-color', 'yellow');
                        } else if (seatId === 'middlemoving') {
                            $(this).css('background-color', 'grey');
                        } else if (seatId === 'slowmoving') {
                            $(this).css('background-color', 'cyan');
                        }
                    }
                });
            }


            function clearYellowSeats() {
                $('.seat').each(function() {
                    var seatId = $(this).attr('id');
                    if (seatId === 'fastmoving' || seatId === 'middlemoving' || seatId === 'slowmoving') {
                        $(this).css('background-color', 'red');
                    }
                });
            }


            $('#no_order').on('input', function() {
                var keyword = $(this).val()
                    .toUpperCase();
                if (keyword.length > 0) {
                    clearYellowSeats();
                    filterSeatsByKeyword(keyword);
                } else {

                    clearYellowSeats();
                }
            });


            // $('.seat').each(function() {
            //     var seat = $(this).data('order');
            //     if (takenSeats.includes(seat)) {
            //         $(this).css({
            //             'background-color': 'red',
            //             'text-align': 'center',
            //             'padding-top': '3rem',
            //             'font-size': '20px',
            //             'color': '#fff',
            //         });
            //         $(this).text('Sudah terisi');
            //     } else {
            //         $(this).css('background-color', 'green');
            //         var seatId = $(this).attr('id');
            //         if (seatId === 'fastmoving') {
            //             $(this).css('background-color', 'yellow');
            //         } else if (seatId === 'middlemoving') {
            //             $(this).css('background-color', 'grey');
            //         } else if (seatId === 'slowmoving') {
            //             $(this).css('background-color', 'cyan');
            //         }
            //     }
            // });

            // Panggil Ajax utk meminimalisir Kesalahan
            var seatCountData = {};
            var quantityData = {};

            // Action ajax utk menghitung data dari server
            $.ajax({
                url: '{{ route('shipper.checkSeat') }}',
                method: 'GET',
                success: function(response) {
                    seatCountData = response.seatCountData;
                    quantityData = response.quantityData;

                    // perubahan warna seat sesuai jumlah pengisian dan total quantity
                    $('.seat').each(function() {
                        var seat = $(this).data('order');
                        var seatId = $(this).attr('id');

                        // Cek apakah jumlah pengisian sudah mencapai batas maksimal lima atau total quantity melebihi 300 pcs
                        if ((seatCountData[seat] && seatCountData[seat] >= 5) || (quantityData[
                                seat] && quantityData[seat] >= 300)) {
                            $(this).css({
                                'background-color': 'red',
                                'text-align': 'center',
                                'padding-top': '3rem',
                                'font-size': '20px',
                                'color': '#fff',
                            });
                            $(this).text('Container Penuh');
                        } else {
                            $(this).css('background-color', 'green');
                            if (seatId === 'fastmoving') {
                                $(this).css('background-color', 'yellow');
                            } else if (seatId === 'middlemoving') {
                                $(this).css('background-color', 'grey');
                            } else if (seatId === 'slowmoving') {
                                $(this).css('background-color', 'cyan');
                            }
                        }
                    });
                },
                error: function(error) {
                    console.log('Terjadi kesalahan saat mengambil data seatCountData dan quantityData:',
                        error);
                }
            });



        });
    </script>

    <script>
        $(document).ready(function() {
            bsCustomFileInput.init();
        });
    </script>
@endsection
