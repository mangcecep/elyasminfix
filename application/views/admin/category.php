<!-- Begin Page Content -->
<div class="container-fluid">


<div class="col-md-12">
    <h4 class=" alert alert-success">Halaman Kategori Produk</h4>
    <div class="row">
        <div class="col-md-12">
            <p>* ini adalah halaman untuk Mengupload/ update/ delete Produk pada halaman Category </br>
                * harap upload tidak lebih dari 2 MB.
            </p>
            
            <div align="center">
                <?= anchor('admin/category/tambah_produk', '<div class="btn btn-3x btn-success"> Tambah Produk</div>');?>
            </div>
            
        </div>

        <div class="col-lg-8">
            <?= $this->session->flashdata('message'); ?>
        </div>


        <table class="able table-striped table-inverse table-responsive">
            <thead class="table-inverse">
                <tr align="center">
                    <th>No. </th>
                    <th>Nama Produk</th>
                    <th>Detail Produk</th>
                    <th>Stok</th>
                    <th>Model</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                    <th>Gambar</th>
                    <th colspan="2">AKSI</th>
                </tr>
            </thead>
            <tbody>
            <?php 
             $no = 1;
             foreach ($product as $p) : ?>
                <tr align="center">
                    <td><?= $no++; ?></td>
                    <td><?= $p['nama_produk']; ?></td>
                    <td><?= $p['detail_produk']; ?></td>
                        <td><?= $p['stok']; ?></td>
                        <td><?= $p['model']; ?></td>
                        <td><?= $p['kategori']; ?></td>
                        <td><?= $p['harga']; ?></td>

                        <td>
                            <img src="<?= base_url('uploads/produk/') . $p['gambar']; ?>" class="img-thumbnail rounded" width = "200" height = "200">
                        </td>

                       <td>
                            <?= anchor('admin/category/edit/' .$p['id_produk'], '<div class="btn btn-3x btn-primary"> Edit Produk</div>');?>
                        </td>
                        
                        <td>
                        <a onclick=" return confirm('Anda yakin data anda ingin dihapus?')" data-toggle="tooltip" title="hapus pengajuan-cuti" href="<?= base_url('admin/category/delete/' . $p['id_produk']) ;?>" class="btn btn-3x btn-danger" data-original-title="Delete"> Delete Produk </i> </a>
                            <!-- //<?= anchor('admin/category/delete/' . $p['id'], '<div class=>Hapus Produk</div>') ;?>  -->
                        </td>
                        
                        <?php endforeach;?>
                    </tr>


            </tbody>
        </table>
    </div>

</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->