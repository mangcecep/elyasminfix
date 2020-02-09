<!DOCTYPE html>
	<html lang="en" class="no-js">
	<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="<?= base_url('vendor/elyasmin/img/elyasminlogo.png');?>">
		<!-- Author Meta -->
		<meta name="@mangCepDev" content="el yasmin Collection">
		<!-- Meta Description -->
		<meta name="description" content="Kami adalah produsen pertama sebagai supplyer kerudung sekaligus official brand 'el yasmin Collection'. sehingga jika anda tertarik menjadi mitra kami dengan memperoleh harga dari konveksi langsung silahkan mengakses member area. ">
		<!-- Meta Keyword -->
		<meta name="keywords" content="kerudung, hijab, murah, bandung, grosir hijab, gamis, muslimah, niqab">
		<!-- meta character set -->
		
		<!-- Site Title -->
		<title>El yasmin Collection - <?= $judul;?> </title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="<?= base_url('vendor/elyasmin/');?>css/linearicons.css">
			<link rel="stylesheet" href="<?= base_url('vendor/elyasmin/');?>css/font-awesome.min.css">
			<link rel="stylesheet" href="<?= base_url('vendor/elyasmin/');?>css/nice-select.css">
		    <link rel="stylesheet" href="<?= base_url('vendor/elyasmin/');?>css/ion.rangeSlider.css" />
		    <link rel="stylesheet" href="<?= base_url('vendor/elyasmin/');?>css/ion.rangeSlider.skinFlat.css" />
			<link rel="stylesheet" href="<?= base_url('vendor/elyasmin/');?>css/bootstrap.css">
			<link rel="stylesheet" href="<?= base_url('vendor/elyasmin/');?>css/main.css">
		</head>
		<body>

			<!-- Start Header Area -->
			<header class="default-header">
				<nav class="navbar navbar-expand-lg  navbar-light">
					<div class="container-fluid">
						  <a class="navbar-brand" href="<?= base_url();?>">
						  	<img src="<?= base_url('vendor/elyasmin/');?>img/elyasminlogo.png" alt="Logo_elyasmin"width="200" height="40">
						  </a>

						  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						    <span class="navbar-toggler-icon"></span>
						  </button>

						  
						<div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
						    <ul class="navbar-nav">
								<li><a href="<?= base_url();?>">Home</a></li>
								<li><a href="<?= base_url('Category');?>">Categories</a></li>
								<li>
									<?php $keranjang = '<i class="lnr lnr-cart"> [' . $this->cart->total_items() . ']</i>';?>
									<?= anchor('cart', $keranjang);?>
								
								</li>



								<li><a href="<?= base_url('MemberArea');?>">MEMBER AREA</a></li>
							</ul>
						</div>	
								
							
							<!-- <ul class="list">
								<li><a href="#">+62 821 1828 9080</a></li>
								<li><a href="#">support@elyasmincollection.com</a></li>
							</ul> -->
						
						  
					</div>
				</nav>
				<div class="fixed-bottom" align = "right">
					<a href="https://api.whatsapp.com/send?phone=6282118014542&text=Saya%20tertarik%20dengan%20produk%20yang%20ada%20di%20web%20Elyasmin%20bisa%20minta%20foto%20produknya%20kak?"><img src="<?= base_url('vendor/elyasmin/');?>img/whatsapp.png" alt="whatsapp button" width =150px height = 150px></a>
				</div>
			</header>
			<!-- End Header Area -->