<div class="modal fade" id="formPenggunaModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Default Modal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{-- <p>One fine body&hellip;</p> --}}
                <form method="post" action="pengguna">
                    @csrf
                    <div id="method"></div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama">Nama</lganabel>
                                <input type="text" class="form-control" id="nama" name="nama"
                                    placeholder="nama">
                        </div>
                        <div class="form-group">
                            <label for="email">email</label>
                            <input type="text" class="form-control" id="email" name="email"
                                placeholder="email">
                        </div>


                        <div class="form-group">
                            <label for="password">password</label>
                            <input type="text" class="form-control" id="password" name="password"
                                placeholder="password">
                        </div>
                        <div class="form-group">
                            <label for="remember_token">remember_token</label>
                            <input type="text" class="form-control" id="remember_token" name="remember_token"
                                placeholder="remember_token">
                        </div>

                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">TUTUP</button>
                            <button type="submit" class="btn btn-primary">SIMPAN</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
