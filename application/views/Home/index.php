			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="container-fluid">

					<?php foreach($banner as $bann) : ?>

					<div class="row fullscreen align-items-center justify-content-center">
						<div class="col-lg-6 col-md-12 d-flex align-self-end img-right no-padding">
							<img class="img-fluid" src="<?= base_url('uploads/banner/'. $bann['gambar']);?>" alt="elyasmin wallpaper">
						</div>
						<div class="banner-content col-lg-6 col-md-12">
							<h1 class="title-top"><?= $bann['minitext'];?></h1>
							<h1 class="text-uppercase">
								<?= $bann['promotiontext']; ?>
							</h1>
							<button class="primary-btn text-uppercase"><a href="<?= base_url('category') ;?>">Pesan Sekarang</a></button>
							<button class="primary-btn text-uppercase"><a href="https://api.whatsapp.com/send?phone=6282118014542&text=Saya%20tertarik%20untuk%20menjadi%20Mitra%20Elyasmin,%20Kak.%20bisa%20diproses?">Member Area</a></button>
						</div>							
					</div>

					<?php endforeach;?>

				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start category Area -->
			<section class="category-area section-gap section-gap" id="catagory">
				<div class="container-fluid">

					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-40">
							<div class="title text-center">
								<h2 class="mb-10">Dapatkan model yang trendy & Syar'i </h2>
							</div>
						</div>
					</div>

					<div class="col-lg-12">
						<div class="row">

							<div class="col-lg-4 col-md-4 mb-30">
								<div class="content">
									<a href="#" target="_blank">
									  <div class="content-overlay"></div>
										   <img class="content-image img-fluid d-block mx-auto" src="<?= base_url('vendor/elyasmin/');?>img/elyasmin06.png" alt="elyasmin06">
									  <div class="content-details fadeIn-bottom">
										<h3 class="content-title">Hijab Dewasa</h3>
									  </div>
									</a>
								</div>
							</div>

							<div class="col-lg-4 col-md-4 mb-30">
								<div class="content">
									<a href="#" target="_blank">
									  <div class="content-overlay"></div>
										   <img class="content-image img-fluid d-block mx-auto" src="<?= base_url('vendor/elyasmin/');?>img/elyasmin16.png" alt="elyasmin16.png">
									  <div class="content-details fadeIn-bottom">
										<h3 class="content-title">Hijab Anak</h3>
									  </div>
									</a>
								</div>
							</div>

							<div class="col-lg-4 col-md-4 mb-30">
								<div class="content">
									<a href="#" target="_blank">
									  <div class="content-overlay"></div>
										   <img class="content-image img-fluid d-block mx-auto" src="<?= base_url('vendor/elyasmin/');?>img/elyasmin40.jpeg" alt="elyasmin40.jpeg">
									  <div class="content-details fadeIn-bottom">
										<h3 class="content-title">Busana Muslim</h3>
									  </div>
									</a>
								</div>
							</div>

						</div>
					</div>
					


				</div>	
			</section>
			<!-- End category Area -->

			<!-- Start women-product Area -->
			<section>
				<div class="container-fluid mb-30">
					<div class="countdown-content pb-40">
						<div class="title text-center">
							<h3 class="mb-10">New realeased Products</h3>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-3 col-md-6 single-product">
						  <div class="content">
						      <div class="content-overlay"></div>
						  		 <img class="content-image img-fluid d-block mx-auto" src="<?= base_url('vendor/elyasmin/');?>img/elyasmin04.jpeg" alt="elyasmin04">
						      <div class="content-details fadeIn-bottom">
							        <div class="bottom d-flex align-items-center justify-content-center">
										<a href="#"><span class="lnr lnr-cart"></span></a>
									</div>
						      </div>
						  </div>
						  <div class="price">
						  		<h5>mat Babydoll</h5>
						  		<h3>Rp.35000</h3>
						   </div>						  
						</div>	
						<div class="col-lg-3 col-md-6 single-product">
						  <div class="content">
						      <div class="content-overlay"></div>
						  		 <img class="content-image img-fluid d-block mx-auto" src="<?= base_url('vendor/elyasmin/');?>img/elyasmin07.jpeg" alt="elyasmin07">
						      <div class="content-details fadeIn-bottom">
							        <div class="bottom d-flex align-items-center justify-content-center">
										<a href="#"><span class="lnr lnr-cart"></span></a>
									</div>
						      </div>
						  </div>
						  <div class="price">
						  		<h5>elyasmin07</h5>
						  		<h3>Rp. 35000</h3>
						   </div>						  
						</div>	
						<div class="col-lg-3 col-md-6 single-product">
						  <div class="content">
						      <div class="content-overlay"></div>
						  		 <img class="content-image img-fluid d-block mx-auto" src="<?= base_url('vendor/elyasmin/');?>img/elyasmin16.png" alt="">
						      <div class="content-details fadeIn-bottom">
							        <div class="bottom d-flex align-items-center justify-content-center">
										<a href="#"><span class="lnr lnr-cart"></span></a>
									</div>
						      </div>
						  </div>
						  <div class="price">
						  		<h5>elyasmin16</h5>
						  		<h3>Rp. 35000</h3>
						   </div>						  
						</div>	
						<div class="col-lg-3 col-md-6 single-product">
						  <div class="content">
						      <div class="content-overlay"></div>
						  		 <img class="content-image img-fluid d-block mx-auto" src="<?= base_url('vendor/elyasmin/');?>img/elyasmin23.jpeg" alt="elyasmin23">
						      <div class="content-details fadeIn-bottom">
							        <div class="bottom d-flex align-items-center justify-content-center">
										<a href="#"><span class="lnr lnr-cart"></span></a>
									</div>
						      </div>
						  </div>
						  <div class="price">
						  		<h5>elyasmin23</h5>
						  		<h3>Rp. 35000</h3>
						   </div>						  
						</div>																			
					</div>
				</div>	
			</section>
			<!-- End women-product Area -->