<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard - Edit Produk</h1>
    </div>

    <div class="col-lg-8">
        <?= $this->session->flashdata('message'); ?>
    </div>

    <?php foreach ($produk as  $p) : ?>
        <form method="post" action="<?= base_url('admin/category/update') ?>" enctype="multipart/form-data">

            <div class="form-group row">
                    <div class="col-sm-2">Gambar Produk</div>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="<?= base_url('uploads/produk/') . $p->gambar; ?>" class="img-thumbnail">
                            </div>
                            <div class="col-sm-9">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="gambar" name="gambar">
                                    <label class="custom-file-label" for="gambar">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

            <div class="form-group">
                <input type="hidden" id ="id_produk" name="id_produk" value="<?= $p->id_produk;?>">
                <label for="nama produk">Nama Produk</label>
                <input type="input" class="form-control" id="nama produk" name="nama produk" value="<?= $p->nama_produk; ?>">
            </div>

            <div class="form-group">
                <label for="detail_produk">Detail Produk</label>
                <input type="input" class="form-control" id="detail_produk" name="detail_produk" value="<?= $p->detail_produk; ?>">
            </div>

            <div class="form-group">
                <label for="stok">Stok</label>
                <input type="input" class="form-control" id="stok" name="stok" value="<?= $p->stok; ?>">
            </div>

            <div class="form-group">
                <label for="model">Model</label>
                <select class="form-control" id="model" name="model">
                <option value=""><?= $p->model;?></option>
                    <option value="Medium" >Medium</option>
                    <option value="Long">Long</option>
                 </select>
            </div>

            <div class="form-group">
                <label for="kategori">kategori</label>
                <input type="input" class="form-control" id="kategori" name="kategori" value="<?= $p->kategori; ?>">
            </div>

            <div class="form-group">
                <label for="harga">harga</label>
                <input type="input" class="form-control" id="harga" name="harga" value="<?= $p->harga; ?>">
            </div>

            <?php endforeach; ?>
            
            <div class="modal-footer">
                <a href="<?= base_url('admin/category/') ?>" class="btn btn-secondary" data-dismiss="modal">Back</a>
                <button type="submit" class="btn btn-primary" name="submit">Save changes</button>
            </div>
        </form>
    </div>
    </div>
</main>