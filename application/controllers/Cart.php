<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {
    public function index()
	{
        $data['judul'] = "Cart";
        $data['produk'] = $this->Model_category->countAllProduk();
        $this->load->view('templates/header', $data);
        $this->load->view('cart/index', $data);
        $this->load->view('templates/footer');
    }

    public function hapusCart($rowid)
    {
        $data = [
            'rowid' => $rowid,
            'qty' =>0
        ];
        $this->cart->update($data);
        redirect('category');
    }
}