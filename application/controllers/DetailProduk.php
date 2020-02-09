<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DetailProduk extends CI_Controller {
    public function index($id)
	{
        $data['judul'] = "Detail Produk";
        $data['product'] = $this->Model_category->tampil_data($id);
        $this->load->view('templates/header', $data);
        $this->load->view('detailproduk/index', $data);
        $this->load->view('templates/footer');
    }
}