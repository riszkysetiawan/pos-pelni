@extends('layouts.admin')

@section('title', 'Barang Management')
@section('content-header', 'Barang Management')
@section('content-actions')
    @if (Auth::check() && Auth::user()->role == 'Admin Gudang')
        <a href="{{ route('barang.create') }}" class="btn btn-success"><i class="fas fa-plus"></i> Add Barang</a>
        <a href="{{ route('barang.deleteAll') }}" class="btn btn-danger" onclick="event.preventDefault(); confirmDelete();">
            <i class="fas fa-trash"></i> Delete All
        </a>
    @endif
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('plugins/sweetalert2/sweetalert2.min.css') }}">
@endsection
@section('content')
    <div class="card">
        <form id="delete-form" action="{{ route('barang.deleteAll') }}" method="GET" style="display: none;">
            @csrf
            {{-- @method('DELETE') --}}
        </form>
        <div class="card-body">
            <table class="table table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>KODE BARANG</th>
                        <th>NAMA BARANG</th>
                        <th>JENIS</th>
                        <th>TUJUAN</th>
                        <th>LETAK BARANG</th>
                        <th>NO ORDER</th>
                        <th>BERAT</th>
                        {{-- <th>GAMBAR</th> --}}
                        <th>HASIL KUBIKASI</th>
                        <th>CREATED AT</th>
                        <th>UPDATED AT</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($barang as $item)
                        <tr>
                            <td>{{ $item->kode_barang }}</td>
                            <td>{{ $item->nama_barang }}</td>
                            <td>{{ $item->jenis }}</td>
                            <td>{{ $item->tujuan }}</td>
                            <td>{{ $item->letak_barang }}</td>
                            <td>{{ $item->no_order }}</td>
                            <td>{{ $item->berat }}</td>
                            {{-- <td><img src="{{ asset('storage/' . $item->gambar) }}" alt="Gambar Barang" width="50"></td> --}}
                            <td>{{ $item->hasil_kubikasi }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>{{ $item->updated_at }}</td>
                            <td>
                                <a href="{{ route('barang.edit', ['barang' => $item]) }}" class="btn btn-primary">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <button class="btn btn-danger btn-delete"
                                    data-url="{{ route('barang.destroy', $item) }}"><i class="fas fa-trash"></i></button>
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
        $(document).ready(function() {
            $(document).on('click', '.btn-delete', function() {
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
                        $.post($this.data('url'), {
                            _method: 'DELETE',
                            _token: '{{ csrf_token() }}'
                        }, function(res) {
                            $this.closest('tr').fadeOut(500, function() {
                                $(this).remove();
                            })
                        })
                    }
                })
            })
        })
    </script>
@endsection
