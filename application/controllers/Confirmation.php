<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Confirmation extends CI_Controller {
    public function index()
	{
        $data['judul'] = "confirmation";
        $this->load->view('templates/header', $data);
        $this->load->view('confirmation/index');
        $this->load->view('templates/footer');
    }
}