<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
                <div class="container">
                    <div class="breadcrumb-banner d-flex flex-wrap align-items-center">
                        <div class="col-first">
                            <h1>Shop Category page</h1>
                             <nav class="d-flex align-items-center justify-content-start">
                                <a href="<?= base_url();?>">Home<i class="fa fa-caret-right" aria-hidden="true"></i></a>
                                <a href="category.html">Category</a>
                            </nav>
                        </div>
                    </div>
                </div>
</section>
			<!-- End Banner Area -->
			
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-9 col-lg-8 col-md-7">
						<!-- Start Filter Bar -->
						<div class="filter-bar d-flex flex-wrap align-items-center">
						<form class="form-inline my-2 my-lg-0">
							<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
							<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
						</form>

							
							<div class="pagination">
								<a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
								<a href="#" class="active">1</a>
								<a href="#">2</a>
								<a href="#">3</a>
								<a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
								<a href="#">6</a>
								<a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
							</div>
						</div>
						<!-- End Filter Bar -->
						<!-- Start Best Seller -->
						<section class="lattest-product-area pb-40 category-list">
							<div class="row">

							<?php foreach($product as $p):?>

								<div class="col-xl-4 col-lg-6 col-md-12 col-sm-6 single-product">
								  <div class="content">
								      <div class="content-overlay"></div>
								  		 <img class="content-image img-fluid d-block mx-auto" src="<?= base_url('uploads/produk/'. $p['gambar']);?>" alt="<?= $p['gambar'];?>">
								      <div class="content-details fadeIn-bottom">
									        <div class="bottom d-flex align-items-center justify-content-center">
											<?= anchor('category/addCart/'. $p['id_produk'], '<span class="lnr lnr-cart"></span>') ;?>
												<a href="<?= base_url('Category/detailproduk/'. $p['id_produk']);?>" data-toggle="modal" data-target="#exampleModal"><span class="lnr lnr-frame-expand"></span></a>
											</div>
								      </div>
								  </div>
								  <div class="price">
								  		<h5><?= $p['nama_produk'];?></h5>
								  		<h3>Rp. <?= $p['harga'];?></h3>
								   </div>
								</div>

							<?php endforeach;?>
								
							</div>
						</section>
					</div>

					<div class="col-xl-3 col-lg-4 col-md-5">
						<div class="sidebar-categories">
							<div class="head">Lihat Produk</div>
							<ul class="main-categories">
								<li class="main-nav-list"><a data-toggle="collapse" href="#fruitsVegetable" aria-expanded="false" aria-controls="fruitsVegetable"><span class="lnr lnr-arrow-right"></span>Hijab</a>
									<ul class="collapse" id="fruitsVegetable" data-toggle="collapse" aria-expanded="false" aria-controls="fruitsVegetable">
										<li class="main-nav-list child"><a href="#">Medium (M)</a></li>
										<li class="main-nav-list child"><a href="#">Long (L)</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>							
							
			</div>
		</div>
	</div>