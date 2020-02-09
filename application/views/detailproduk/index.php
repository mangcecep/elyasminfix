        <section class="banner-area organic-breadcrumb">
                <div class="container">
                    <div class="breadcrumb-banner d-flex flex-wrap align-items-center">
                        <div class="col-first">
                            <h1>Single Product Page</h1>
                             <nav class="d-flex align-items-center justify-content-start">
                                <a href="<?= base_url();?>">Home<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                                <a href="single.html">Single Product Page</a>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Banner Area -->

            <!-- Start Product Details -->
            <div class="container">
                <div class="product-quick-view">
                    <div class="row align-items-center">
                       <div class="col-lg-12">
                            <div class="quick-view-content">
                                <div class="top">
                                
                                <?php foreach ($produk as $p) : ?>

                                <img src="<?= base_url('uploads/produk/' . $p->gambar) ;?>" alt="<?= $p->gambar ;?>" class="img-fluid">

                                    <h3 class="head"><?= $p->nama_produk;?></h3>
                                    <div class="price d-flex align-items-center"><span class="lnr lnr-tag"></span> <span class="ml-10">Rp <?= number_format($p->harga, 0,',','.') ;?></span></div>
                                    <div class="category">Category: <span><?= $p->kategori ;?></span></div>
                                    <div class="available">Stock: <span><?= $p->stok ;?></span></div>
                                    <div class="available">Model: <span><?= $p->model ;?></span></div>
                                </div>
                                <div class="middle">
                                    <p class="content"><?= $p->detail_produk ;?></p>
                                </div>
                                    <div class="d-flex mt-20">
                                        <a href="#" class="view-btn color-2"><span>Add to Cart</span></a>
                                    </div>


                                <?php endforeach;?>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
            <!-- End Product Details -->