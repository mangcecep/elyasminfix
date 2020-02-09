<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Selamat Datang! Admin</h1>

<div class="col-md-12">
    <h4 class=" alert alert-success">Halaman Home</h4>
    <div class="row">
        <div class="col-md-12">
            <p>* ini adalah halaman untuk mengganti Banner pada halaman Home </br>
                * harap upload menggunakan format gambar .png dan background kosong
        </p>
        </div>

        <div class="col-lg-8">
            <?= $this->session->flashdata('message'); ?>
        </div>
        </div>


        <table class="able table-striped table-inverse table-responsive">
            <thead class="thead-inverse">
                <tr>
                    <th>#</th>
                    <th>Gambar Banner</th>
                    <th>Mini text</th>
                    <th>Promotion Text</th>
                    <th colspan="2">Aksi</>
                </tr>
            </thead>
            <tbody>

                <?php foreach($banner as $bann) : ?>

                    <tr>
                        <td>#</td>
                        <td>
                            <img src="<?= base_url('uploads/banner/') . $bann['gambar']; ?>" class="img-thumbnail">
                        </td>
                        <td><?= $bann['minitext'];?></td>
                        <td><?= $bann['promotiontext'];?></td>

                        <td>
                        <?= anchor('admin/dashboard/edit/' .$bann['id'], '<div class="btn btn-2x btn-primary">Edit</div>');?>
                        </td>
                        <td>
                           <?= anchor('home', '<div class="btn btn-2x btn-success">Lihat</div>');?>
                        </td>
                    </tr>

                <?php endforeach;?>

            </tbody>
        </table>
    </div>

</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->