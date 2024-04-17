@extends('layouts.admin')

@section('title', 'Shipper Management')
@section('content-header', 'Shipper Management')
@section('content-actions')
@if (Auth::check() && Auth::user()->role == 'Admin Gudang')
<a href="{{route('shipper.create')}}" class="btn btn-success"><i class="fas fa-plus"></i> Add New Product</a>
<a href="{{ route('shipper.deleteAll') }}" class="btn btn-danger" onclick="event.preventDefault(); confirmDelete();">
    <i class="fas fa-trash"></i> Delete All
</a>
@endif
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset('plugins/sweetalert2/sweetalert2.min.css') }}">
@endsection
@section('content')
<div class="card product-list">
    <form id="delete-form" action="{{ route('shipper.deleteAll') }}" method="GET" style="display: none;">
        @csrf
        {{-- @method('DELETE') --}}
    </form>
    <div class="card-body">
        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr><!-- Log on to codeastro.com for more projects -->
                    <th>KODE LETAK</th>
                    <th>NAMA SHIPPER</th>
                    <th>TUJUAN</th>
                    <th>ALAMAT</th>
                    <th>CREATED AT</th>
                    <th>UPDATED AT</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($shipper as $ship)
                <tr>
                    <td>{{$ship->no_order}}</td>
                    <td>{{$ship->nama_shipper}}</td>
                    <td>{{$ship->tujuan}}</td>
                    <td>{{$ship->alamat}}</td>
                    <td>{{$ship->created_at}}</td>
                    <td>{{$ship->updated_at}}</td>
                    <td>
                        <a href="{{ route('shipper.edit', ['shipper' => $ship]) }}" class="btn btn-primary"><i
                                class="fas fa-edit"></i></a>
                        <button class="btn btn-danger btn-delete" data-url="{{route('shipper.destroy', $ship)}}"><i
                                class="fas fa-trash"></i></button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{-- {{ $products->render() }} --}}
    </div>
</div><!-- Log on to codeastro.com for more projects -->
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
                text: "Do you really want to delete this product?",
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
