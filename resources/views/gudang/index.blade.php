@extends('layouts.admin')

@section('title', 'Gudang Management')
@section('content-header', 'Gudang Management')
@section('content-actions')
@if (Auth::check() && Auth::user()->role == 'Admin Gudang')
    <a href="{{route('gudang.create')}}" class="btn btn-success"><i class="fas fa-plus"></i> Add Barang</a>
    <a href="{{ route('gudang.deleteAll') }}" class="btn btn-danger" onclick="event.preventDefault(); confirmDelete();">
        <i class="fas fa-trash"></i> Delete All
    </a>
    @endif
    
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('plugins/sweetalert2/sweetalert2.min.css') }}">
@endsection
@section('content')
    <div class="card">
        <form id="delete-form" action="{{ route('gudang.deleteAll') }}" method="GET" style="display: none;">
            @csrf
            {{-- @method('DELETE') --}}
        </form>     
        <div class="card-body">
        <table class="table table-bordered table-hover" style="max-height: 400px; max-width: 200px;">
            <thead class="thead-dark">
                <tr>
                    <th>KODE BARANG</th>
                    <th>NO ORDER</th>
                    <th>NAMA BARANG</th>
                    <th>LETAK BARANG</th>
                    <th>BERAT</th>
                    <th>TANGGAL MASUK</th>
                    <th>TANGGAL KELUAR</th>
                    <th>PELABUHAN AWAL</th>
                    <th>PELABUHAN TUJUAN</th>
                    <th>JENIS KAPAL</th>
                    <th>JENIS MUATAN</th>
                    <th>CREATED AT</th>
                    <th>UPDATED AT</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($gudang as $item)
                    <tr>
                        <td>{{ $item->kode_barang }}</td>
                        <td>{{ $item->no_order }}</td>
                        <td>{{ $item->nama_barang}}</td> 
                        <td>{{ $item->letak_barang }}</td>
                        <td>{{ $item->berat }}</td>
                        <td>{{ $item->tgl_masuk}}</td> 
                        <td>{{ $item->tgl_keluar }}</td>
                        <td>{{ $item->pelabuhan_awal }}</td>
                        <td>{{ $item->pelabuhan_tujuan }}</td>
                        <td>{{ $item->jenis_kapal }}</td>
                        <td>{{ $item->jenis_muatan }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>{{ $item->updated_at }}</td>
                        <td>
                            <a href="{{ route('gudang.edit', ['gudang' => $item]) }}" class="btn btn-primary">
                                <i class="fas fa-edit"></i>
                            </a>                       
                            <button class="btn btn-danger btn-delete" data-url="{{route('gudang.destroy', $item)}}"><i
                                    class="fas fa-trash"></i></button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- {{ $customer->render() }} --}}
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('plugins/sweetalert2/sweetalert2.min.js') }}"></script>
    <script>
       function confirmDelete() {
        if (confirm('Apakah Anda yakin ingin menghapus semua data?')) {
            document.getElementById('delete-form').submit();
        }
    }
        $(document).ready(function () {
            $(document).on('click', '.btn-delete', function () {
                $this = $(this);
                const swalWithBootstrapButtons = Swal.mixin({
                    customClass: {
                        confirmButton: 'btn btn-success',
                        cancelButton: 'btn btn-danger'
                    },
                    buttonsStyling: false
                })

                swalWithBootstrapButtons.fire({
                    title: 'Are you sure?',
                    text: "Do you really want to delete this customer?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'No',
                    reverseButtons: true
                }).then((result) => {
                    if (result.value) {
                        $.post($this.data('url'), {_method: 'DELETE', _token: '{{csrf_token()}}'}, function (res) {
                            $this.closest('tr').fadeOut(500, function () {
                                $(this).remove();
                            })
                        })
                    }
                })
            })
        })
    </script>
@endsection
