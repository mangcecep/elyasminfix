<div class="container-fluid">
    <h4 class="mb-2 mt-2" align="center"> <strong>Tambah Data Produk </strong></h4>

    <form method="post" action="<?= base_url('admin/Category/addProduct'); ?>" enctype="multipart/form-data">


    <div class="row">
        <div class="col-md-8">

            <div class="form-group">
                <label for="nama_produk">Nama Produk</label>
                <input type="text" name="nama_produk" id="nama_produk" class="form-control">    
            </div>

            <div class="form-group">
                <label for="detail_produk">Detail Produk</label>
                <textarea  name="detail_produk" id="detail_produk" class="form-control">
                </textarea>   
            </div>
            
            <div class="form-group">
                <label for="stok">Stok</label>
                <input type="text" name="stok" id="stok" class="form-control">    
            </div>

            <div class="form-group">
                <label for="model">Model</label>
                <input type="text" name="model" id="model" class="form-control">    
            </div>

            <div class="form-group">
                <label for="kategori">Kategori</label>
                <input type="text" name="kategori" id="kategori" class="form-control">    
            </div>           
            
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text" name="harga" id="harga" class="form-control">    
            </div>

        </div>

        <div class="col-md-4">
                <div class="form-group">
                    <label>Gambar Poduk</label>
                    <input type="file" name="gambar" class="file-input">
                </div>

                <div class="modal-footer">
                    <a href="<?= base_url('admin/category'); ?>" class="btn btn-success" data-dismiss="modal">Kembali Ke Shop Category</a>
                    <button type="submit" class="btn btn-primary" name="submit">Tambah Produk</button>
                </div>
        </div>
    </div>
        
            
        </form>


</div>



<!--  -->