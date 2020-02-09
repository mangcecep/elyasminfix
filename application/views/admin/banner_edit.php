<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard - Edit Banner</h1>
    </div>

    <div class="col-lg-8">
        <?= $this->session->flashdata('message'); ?>
    </div>

    <?php foreach ($banner as  $bann) : ?>
        <form method="post" action="<?= base_url('admin/dashboard/update') ?>" enctype="multipart/form-data">

            <div class="form-group row">
                    <div class="col-sm-2">Gambar Produk</div>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="<?= base_url('uploads/banner/') . $bann->gambar; ?>" class="img-thumbnail">
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
                <input type = "hidden" class="form-control" id="id" name="id" value="<?= $bann->id; ?>">

                <label for="minitext">Minitext</label>
                <input type="input" class="form-control" id="minitext" name="minitext" value="<?= $bann->minitext; ?>">
            </div>

            <div class="form-group">
                <label for="promotiontext">Promotion Text</label>
                <input class="form-control" id="promotiontext" name="promotiontext" value="<?= $bann->promotiontext; ?>">
            </div>
            
            <div class="modal-footer">
                <a href="<?= base_url('admin/dashboard/') ?>" class="btn btn-secondary" data-dismiss="modal">Back</a>
                <button type="submit" class="btn btn-primary" name="submit">Save changes</button>
            </div>
        </form>
    <?php endforeach; ?>
    </div>
    </div>
</main>