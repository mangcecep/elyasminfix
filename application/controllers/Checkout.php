<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {
    public function index()
	{
        $this->form_validation->set_rules('nama', 'Nama', 'trim|required', [
            'required' => 'Nama wajib diisi!'
        ]);

        $this->form_validation->set_rules('telepon', 'telepon', 'trim|required', [
            'required' => 'telepon wajib diisi!'
        ]);

        $this->form_validation->set_rules('email', 'Email', 'trim|required', [
            'required' => 'email wajib diisi!'
        ]);

        $this->form_validation->set_rules('provinsi', 'provinsi', 'trim|required', [
            'required' => 'provinsi wajib diisi!'
        ]);

        $this->form_validation->set_rules('kota', 'kota', 'trim|required', [
            'required' => 'kota wajib diisi!'
        ]);

        $this->form_validation->set_rules('kecamatan', 'kecamatan', 'trim|required', [
            'required' => 'kecamatan wajib diisi!'
        ]);

        $this->form_validation->set_rules('kelurahan', 'kelurahan', 'trim|required', [
            'required' => 'kelurahan wajib diisi!'
        ]);

        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required', [
            'required' => 'Alamat wajib diisi!'
        ]);
        
        $this->form_validation->set_rules('kode_post', 'Kode', 'trim|required', [
            'required' => 'kode_poss wajib diisi!'
        ]);
        
        if($this->form_validation->run() == FALSE){
                $data['judul'] = "Checkout";
                $data['produk'] = $this->Model_category->countAllProduk();
                $this->load->view('templates/header', $data);
                $this->load->view('checkout/index', $data);
                $this->load->view('templates/footer');
            } else {
                $this->Model_invoice->index();
                $this->session->set_flashdata('flash', 'Ditambahkan');
                redirect('confirmation');
            }
    }

    
}