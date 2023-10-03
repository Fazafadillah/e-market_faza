@extends('templates.layout')
@push('style')
@endpush
@section('content')
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">faq</h3>

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
            Aplikasi Berbasis Web ini adalah pembuatan dari Muchamad Faza Fadillah
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
