<div class="container">

       
       <div class="col-md-12">
       
        
        <h4 class=" alert alert-success">Detail Pengiriman</h4>

    <?php foreach($invoice as $i):?>
        <div class="row">     
            <div class="col-md-6">
                    <div class="form-group">
                        <p>Nama Penerima</p>
                    </div>
            </div>
            <div class="col-md-6">
                    <div class="form-group">
                        <p>: <?= $i->nama ;?></p>
                    </div>
            </div>
            <div class="col-md-6">
                    <div class="form-group">
                        <p>telepon/WA</p>
                    </div>
            </div>
            <div class="col-md-6">
                    <div class="form-group">
                        <p>: <?= $i->telepon ;?></p>
                    </div>
            </div>
            <div class="col-md-6">
                    <div class="form-group">
                        <p>Alamat</p>
                    </div>
            </div>
            <div class="col-md-6">
                    <div class="form-group">
                        <p>: <?= $i->alamat ;?></p>
                    </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <p>Kelurahan</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <p>: <?= $i->kelurahan ;?></p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <p>Kecamatan</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <p>: <?= $i->kecamatan ;?></p>
                </div>
            </div>
            <div class="col-md-6">
                <p>Kota / Kabupaten</p>
            </div>
            <div class="col-md-6">
                <p>: <?= $i->kota ;?></p>
            </div>
            <div class="col-md-6">
                <p>Provinsi</p>
            </div>
            <div class="col-md-6">
                <p>: <?= $i->provinsi ;?></p>
            </div>
            <div class="col-md-6">
                <p>Kode Pos</p>
            </div>       
            <div class="col-md-6">
                <p>: <?= $i->kode_post ;?></p>
            </div>       


        </div>
    <?php endforeach ;?>

    </div>

    <a href="<?= base_url('admin/order') ;?>" class="btn btn-sm btn-primary">Kembali ke detail order</a>
    <a href="<?= base_url('admin/order') ;?>" class="btn btn-sm btn-success">Cetak detail order</a>

    
</div>

