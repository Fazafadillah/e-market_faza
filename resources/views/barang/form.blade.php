<div class="modal fade" id="formBarangModal">
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
                <form method="post" action="barang">
                    @csrf
                    <div id="method"></div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="kode_barang">Kode</label>
                            <input type="text" class="form-control" id="kode_barang" name="kode_barang"
                                placeholder="Kode barang">
                        </div>
                        <div class="form-group">
                            <label for="produk_id">produk_id</label>
                            <input type="text" class="form-control" id="produk_id" name="produk_id"
                                placeholder="Produk_id">
                        </div>

                        <div class="form-group">
                            <label for="nama_barang">Nama Barang</label>
                            <input type="text" class="form-control" id="nama_barang" name="nama_barang"
                                placeholder="No Telp">
                        </div>
                        <div class="form-group">
                            <label for="satuan">satuan</label>
                            <input type="text" class="form-control" id="satuan" name="satuan"
                                placeholder="satuan">
                        </div>

                        <div class="form-group">
                            <label for="harga_jual">harga_jual</label>
                            <input type="text" class="form-control" id="harga_jual" name="harga_jual"
                                placeholder="harga_jual">
                        </div>
                        <div class="form-group">
                            <label for="stok">stok</label>
                            <input type="text" class="form-control" id="stok" name="stok" placeholder="stok">
                        </div>
                        <div class="form-group">
                            <label for="ditarik">ditarik</label>
                            <input type="text" class="form-control" id="ditarik" name="ditarik"
                                placeholder="ditarik">
                        </div>
                        <div class="form-group">
                            <label for="user_id">user_id</label>
                            <input type="text" class="form-control" id="user_id" name="user_id"
                                placeholder="user_id">
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
