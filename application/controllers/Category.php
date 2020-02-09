<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {
    public function index()
	{
        $data['judul'] = "Category";
        $data['product'] = $this->Model_category->tampil_data();
        $this->load->view('templates/header', $data);
        $this->load->view('category/index', $data);
        $this->load->view('templates/footer');
    }

    public function addCart($id)
    {
        $produk = $this->Model_category->find($id);

        $data = [
            'id'  => $produk->id_produk,
            'qty' => 1,
            'price' => $produk->harga,
            'name' => $produk->nama_produk 
        ];

        $this->cart->insert($data);
        redirect(category);
    }

    public function detailproduk($id_produk)
    {
        $data['judul'] = "Detail Produk";
        $data['produk'] = $this->Model_category->detail_produk($id_produk);
        $this->load->view('templates/header', $data);
        $this->load->view('detailproduk/index', $data);
        $this->load->view('templates/footer');
    }
}