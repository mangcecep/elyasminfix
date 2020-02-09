<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    public function index()
	{
        $data['judul'] = "home";
        $data['banner'] = $this->Model_dashboard->tampil_data();
        $this->load->view('templates/header', $data);
        $this->load->view('Home/index');
        $this->load->view('templates/footer');
	}

}