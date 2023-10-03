@extends('templates.layout')

@section('content')
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Profile</h3>

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                </button>
            </div>
        </div>
        <div class="card-body text-center">

            <div class="image mb-3">
                <img src="{{ asset('img/Faza.jpeg') }}" class="img-circle elevation-2 mx-auto border" alt="User Image"
                    style="width: 100px; height: 100px; object-fit: cover; border-radius: 50%;" />
            </div>

            <div class="text-center">
                <p class="h4">Nama: Muchamad Faza Fadillah</p>
                <p class="h4">Umur: 17 tahun</p>
                <p class="h4">Status: Pelajar SMK</p>
            </div>

        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            copyrightby@faza
        </div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->
@endsection

@push('script')
    <script></script>
@endpush
