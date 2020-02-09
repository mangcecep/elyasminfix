<!-- Begin Page Content -->
<div class="container-fluid">

<div class="col-md-12">
    <h4 class=" alert alert-success">Order</h4>
    <div class="row">
        <div class="col-md-12">
            <p>* ini adalah halaman list Order customer yang sudah melakukan checkout </br>
                * 
        </p>
        </div>

        <div class="col-lg-8">
                <?= $this->session->flashdata('message'); ?>
        </div>

            <div class="col-md-8">
                <table class="able table-striped table-inverse table-responsive">
                    <thead class="thead-inverse" align = "center">
                        <tr>
                            <th>No</th>
                            <th>Nama Produk</th>
                            <th>Jumlah</th>
                            <th>Harga</th>
                            <th>Total</th>
                            <th colspan="2">Aksi Order</>
                        </tr>
                    </thead>
                    <tbody>
                        

                            <?php $no = 1 ;
                            foreach ($order as $o) :?>
                        <tr>
                                <td><?= $no++ ; ?></td>
                                <td><?= $o['nama_produk'] ; ?></td>
                                <td><?= $o['jumlah'] ; ?></td>
                                <td>Rp <?= number_format($o['harga'], 0, ',','.') ; ?></td>
                                <td>Rp <?= number_format( ($o['harga'] * $o['jumlah']) , 0, ',','.') ; ?></td>
                            
                            
                                <td>
                                    <?= anchor('admin/order/detailorder/' . $o['id'], '<button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal">
                                        Detail order
                                        </button>') ;?>                             
                                </td>

                                <td>
                                    <button class="btn btn-sm btn-warning">edit order</button>
                                </td>

                                <td>
                                    <button class="btn btn-sm btn-danger">delete order</button>
                                </td>
                        </tr>
                            <?php endforeach ;?>

                        

                    </tbody>
                </table>
            </div>

        </div>
    </div>

</div>

</div>
<!-- /.container-fluid -->