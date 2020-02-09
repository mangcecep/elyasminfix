<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MemberArea extends CI_Controller {
    public function index()
	{
        $data['judul'] = "Category";
        $this->load->view('templates/header', $data);
        $this->load->view('member area/index');
        $this->load->view('templates/footer');
    }
}