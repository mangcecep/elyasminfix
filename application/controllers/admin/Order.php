<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

    public function index()
    {
        $data['judul'] = "Dashboard Order";
        $data['order'] = $this->Model_order->tampil_data();
        $data['invoice'] = $this->Model_order->tampil_data_invoice();
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/order', $data);
        $this->load->view('templates_admin/footer');
    }

    public function detailorder($id_invoice)
    {
        $data['judul'] = "Detail Produk";
        $data['invoice'] = $this->Model_order->tampil_data_penerima($id_invoice);
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/detailorder', $data);
        $this->load->view('templates_admin/footer');
    }
}