@extends('templates.layout')
@push('style')
@endpush
@section('content')
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h1 class="card-title">PELANGGAN </h1>
            <br>
            <td>
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-primary">
                        Launch Primary Modal --}}
                        </button>
                        {{ session('success') }}
                    </div>
                @endif
                {{-- @if (session('delete_success'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('delete_success') }}
                    </div>
                @endif --}}
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formPelangganModal">
                    <i class="fas fa-plus"></i>
                </button>
                @include('pelanggan.form')

            </td>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body">

            <table class=" table table-bordered table-hover table-stripped table-sm">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Pelanggan</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>No Telpon</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                <tbody>
                    @foreach ($pelanggan as $p)
                        <tr>
                            <td>{{ $i = isset($i) ? ++$i : 1 }}</td>
                            <td>{{ $p->kode_pelanggan }}</td>
                            <td>{{ $p->nama }}</td>
                            <td>{{ $p->alamat }}</td>
                            <td>{{ $p->no_telp }}</td>
                            <td>{{ $p->email }}</td>
                            <td>
                                <form action="pelanggan/{{ $p->id }}" method="POST" style="display:inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-danger btn-delete" data-dismiss="modal"><i
                                            class="fas fa-trash-alt"></i></button>
                                </form>

                                <button class="btn btn-info" data-toggle="modal" data-target="#formPelangganModal"
                                    data-mode="edit" data-id="{{ $p->id }}"
                                    data-kode_pelanggan="{{ $p->kode_pelanggan }}" data-nama="{{ $p->nama }}"
                                    data-alamat="{{ $p->alamat }}" data-no_telp="{{ $p->no_telp }}"
                                    data-email="{{ $p->email }}"><i class="fas fa-edit"></i></button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                </thead>
            </table>
        </div>

        <!-- /.card-body -->
        <div class="card-footer">
        </div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->
@endsection
@push('script')
    <script>
        $('.alert-success').fadeTo(5000, 500).slideUp(500, function() {
            $('.alert-success').slideUp(500)
        })

        $('.alert-danger').fadeTo(10000, 500).slideUp(500, function() {
            $('.alert-danger').slideUp(500)
        })

        console.log('pelanggan')
        // $('#tbl_pelanggan').DataTable()
        // dialog hapus
        $('.btn-delete').on('click', function(e) {
            console.log('delete')
            let kode_pelanggan = $(this).closest('tr').find('td:eq(1)').text();
            Swal.fire({
                icon: 'error',
                title: 'hapus data',
                html: `Hapus <b>${kode_pelanggan}</br> engga?`,
                confirmButtonText: 'Iyah',
                denyButtonText: 'engga',
                showDenyButton: true,
                focusConfirm: false
            }).then((result) => {
                if (result.isConfirmed) $(e.target).closest('form').submit()
                else swal.close()
            })
        })
        $('#formPelangganModal').on('show.bs.modal', function(e) {
            const btn = $(e.relatedTarget)
            const mode = btn.data('mode')
            const kode_pelanggan = btn.data('kode_pelanggan')
            const id = btn.data('id')
            const nama = btn.data('nama')
            const alamat = btn.data('alamat')
            const no_telp = btn.data('no_telp')
            const email = btn.data('email')
            const modal = $(this)
            console.log(mode)
            if (mode === 'edit') {
                modal.find('.modal-title').text('Edit Data pelanggan')
                modal.find('#kode_pelanggan').val(kode_pelanggan)
                modal.find('#nama').val(nama)
                modal.find('#alamat').val(alamat)
                modal.find('#no_telp').val(no_telp)
                modal.find('#email').val(email)
                modal.find('.modal-body form').attr('action', '{{ url('pelanggan') }}/' + id)
                modal.find('#method').html('@method('PATCH')')
            } else {
                console.log('input')
                modal.find('.modal-title').text('Input Data pelanggan')
                modal.find('#kode_pelanggan').val('')
                modal.find('#nama').val('')
                modal.find('#alamat').val('')
                modal.find('#no_telp').val('')
                modal.find('#email').val('')
                modal.find('#method').html('')
                modal.find('.modal-body form').attr('action', '{{ url('pelanggan') }}')
            }
        })
    </script>
@endpush
