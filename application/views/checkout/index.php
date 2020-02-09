 <div class="container mt-30">
                    <div class="collapse" id="checkout-cupon">
                        <div class="checkout-login-collapse d-flex flex-column">
                            <form action="#" class="d-block">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <input type="text" placeholder="Enter coupon code" onfocus="this.placeholder=''" onblur="this.placeholder = 'Enter coupon code'" required class="common-input mt-10">
                                    </div>
                                </div>
                                <button class="view-btn color-2 mt-20"><span>Apply Coupon</span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Checkout Area -->
            <!-- Start Billing Details Form -->
            <div class="container mb-30">
                
                <?= form_open('', 'class="billing-form"') ;?>
                     
                    <div class="row">

                        <div class="col-lg-8 col-md-6">
                            <h3 class="billing-title mt-20 mb-10">Detail Pembayaran</h3>


                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="text" placeholder='Nama Lengkap anda' class="common-input" name="nama" value="<?= set_value('nama');?>">
                                        <?= form_error('nama', '<div class="text-danger small ml-2">', '</div>'); ?>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder='Phone number*' class="common-input" name="telepon" value="<?= set_value('telepon');?>">
                                        <?= form_error('telepon', '<div class="text-danger small ml-2">', '</div>'); ?>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="email" placeholder = 'Email Address*' class="common-input" name="email" value="<?= set_value('email');?>">
                                        <?= form_error('email', '<div class="text-danger small ml-2">', '</div>'); ?>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder = 'Provinsi*' class="common-input" name="provinsi" value="<?= set_value('provinsi');?>">
                                        <?= form_error('provinsi', '<div class="text-danger small ml-2">', '</div>'); ?>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder = 'kota*'class="common-input" name="kota" value="<?= set_value('kota');?>">
                                        <?= form_error('kota', '<div class="text-danger small ml-2">', '</div>'); ?>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder = 'kecamatan*' class="common-input" name="kecamatan" value="<?= set_value('kecamatan');?>">
                                        <?= form_error('kecamatan', '<div class="text-danger small ml-2">', '</div>'); ?>
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="text" placeholder = 'kelurahan*' class="common-input" name="kelurahan" value="<?= set_value('kelurahan');?>">
                                        <?= form_error('kelurahan', '<div class="text-danger small ml-2">', '</div>'); ?>
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="text" placeholder = 'alamat*' class="common-input" name="alamat" value="<?= set_value('alamat');?>">
                                        <?= form_error('alamat', '<div class="text-danger small ml-2">', '</div>'); ?>
                                    </div>
                                    <div class="col-lg-12">
                                        <input type="text" placeholder = 'kode pos' class="common-input" name="kode_post" value="<?= set_value('kode_post');?>">
                                        <?= form_error('kode_post', '<div class="text-danger small ml-2">', '</div>'); ?>
                                    </div>
                                </div>
                            
                            
                                <button class="view-btn color-2 w-100 mt-20" type="submit" name="submit"><span>Proceed to Checkout</span></button>

                        </div>


                    </form>

                        <div class="col-lg-4 col-md-6">
                            <div class="order-wrapper mt-50">
                                <h3 class="billing-title mb-10">Your Order</h3>
                                <div class="order-list">
                                    <div class="list-row d-flex justify-content-between">
                                        <div>Product</div>
                                        <div>Total</div>
                                    </div>

                                    <?php foreach($this->cart->contents() as $items) : ?>

                                    <div class="list-row d-flex justify-content-between">
                                        <div><?= $items['name'] ;?></div>
                                        <div>x <?= $items['qty'] ;?></div>
                                        <div>Rp. <?= number_format($items['price'], 0, ',', '.') ;?></div>
                                    </div>
                                    
                                    <div class="list-row d-flex justify-content-between">
                                        <h6>Shipping</h6>
                                        <div>Flat rate: Rp. 50.000</div>
                                    </div>
                                    <div class="list-row d-flex justify-content-between">
                                        <h6>Total</h6>
                                        <div class="total">Rp. <?= number_format($items['subtotal'], 0, ',','.');?></div>
                                    </div>

                                    <?php endforeach ;?>

                                    <div class="d-flex align-items-center mt-10">
                                        <label for="check" class="bold-lable">Pembayaran : Transfer</label>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            </div>
            <!-- End Billing Details Form -->