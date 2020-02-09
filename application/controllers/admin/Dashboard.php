<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function index()
	{
        $data['judul'] = "Dashboard Admin";
        $data['banner'] = $this->Model_dashboard->tampil_data();
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/index', $data);
        $this->load->view('templates_admin/footer');
    }

    public function edit($id)
    {
        $data['judul'] = "Dashboard Admin - edit Banner";
        $where = ['id' => $id];
        $data['banner'] = $this->Model_dashboard->edit_banner($where, 'home')->result();
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/banner_edit', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update()
    {
        $data['banner'] = $this->db->get_where('home')->row_array();
        $id       = $this->input->post('id');
        $minitext = $this->input->post('minitext');
        $promotiontext = $this -> input->post('promotiontext');

        // cek gambar jika ada gambar yang akan diupload
        $upload_image = $_FILES['gambar']['name'];

        if ($upload_image) {
            $config['allowed_types'] = 'png';
            $config['max_size'] = '2048';
            $config['upload_path'] = './uploads/banner/';

            $this->load->library('upload', $config);

            if($this->upload->do_upload('gambar')){
                $old_image = $data['home']['gambar']['id'];
                unlink(FCPATH . 'uploads/banner/'. $old_image);

                $new_image = $this->upload->data('file_name');
                $this->db->set('gambar', $new_image);                
            }else{
                echo $this->upload->display_errors();
            }
        }

        $data = [
            'minitext' => $minitext,
            'promotiontext' => $promotiontext
        ];

        $where = [
            'id' => $id
        ];
        
        $this->Model_dashboard->update_data($where, $data, 'home');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role = "alert">Banner & text telah berhasil diubah!</div>');
        redirect('admin/dashboard');
    }
}