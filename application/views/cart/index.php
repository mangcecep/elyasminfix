<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
                <div class="container">
                    <div class="breadcrumb-banner d-flex flex-wrap align-items-center">
                        <div class="col-first">
                            <h1>Shopping Cart</h1>
                             <nav class="d-flex align-items-center justify-content-start">
                                <a href="index.html">Home<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                                <a href="cart.html">Shopping Cart</a>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Banner Area -->

            <!-- Start Cart Area -->
            <div class="container">
                <div class="cart-title">


                    <div class="row">
                        <div class="col-md-1">
                            <h6 class="ml-2">#</h6>
                        </div>
                        <div class="col-md-5">
                            <h6 class="ml-15">Product</h6>
                        </div>
                        <div class="col-md-2">
                            <h6>Price</h6>
                        </div>
                        <div class="col-md-2">
                            <h6>Quantity</h6>
                        </div>
                        <div class="col-md-2">
                            <h6>Total</h6>
                        </div>
                    </div>
                </div>

                <?php foreach($this->cart->contents() as $items) : ?>

                <div class="cart-single-item">
                    <div class="row align-items-center">
                         <div class="col-md-1">
                            <a href="<?= base_url('Cart/hapusCart/' . $items['rowid']); ?>"><i class="fa fa-window-close"></i></a>
                        </div>
                        <div class="col-md-5">
                            <div class="product-item d-flex align-items-center">
                                <strong><?= $items['name'] ;?></strong>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <strong>Rp. <?= number_format($items['price'], 0, ',', '.') ;?></strong>
                        </div>
                        <div class="col-md-2">
                            <div class="quantity-container d-flex align-items-center mt-15">
                                <strong><?= $items['qty'] ;?></strong>                               
                            </div>
                        </div>
                        <div class="col-md-2">
                            <strong>Rp. <?= number_format($items['subtotal'], 0, ',','.');?></strong>
                        </div>
                    </div>
                </div>
                
                <?php endforeach ;?>
                
               
                <div class="subtotal-area d-flex align-items-center justify-content-end">
                    <strong>Rp. <?= number_format($this->cart->total(), 0, ',', '.'); ?></strong>
                </div>
                <div class="shipping-area d-flex justify-content-end">
                    <a href="<?= base_url('category') ;?>" class="view-btn color-2 mt-10"><span>Lanjut belanja</span></a>
                    <a href="<?= base_url('checkout') ;?>" class="view-btn color-2 mt-10"><span>pembayaran</span></a href="<?= base_url('checkout') ;?>">
                </div>
            </div>
            <!-- End Cart Area -->