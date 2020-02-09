<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detailorder extends CI_Controller {

    public function index($id_invoice)
    {
        $data['judul'] = "Detail Order";
        $data['detail'] = $this->Model_order->tampil_data_penerima($id_invoice);
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/detailorder', $data);
        $this->load->view('templates_admin/footer');
    }
}