<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller{
    public function index()
    {
    $data['judul'] = "Dashboard Admin - Category Produk";
    $data['product'] = $this->Model_category->tampil_data();
    $this->load->view('templates_admin/header', $data);
    $this->load->view('templates_admin/sidebar');
    $this->load->view('admin/category');
    $this->load->view('templates_admin/footer');
    }

    public function tambah_produk()
    {
    $data['judul'] = "Dashboard Admin - Tambah Produk";
    //$data['product'] = $this->Model_category->tambah();
    $this->load->view('templates_admin/header', $data);
    $this->load->view('templates_admin/sidebar');
    $this->load->view('admin/tambah_produk');
    $this->load->view('templates_admin/footer');
    }

    public function addProduct()
    {
        $nama_produk = $this->input->post('nama_produk');
        $detail_produk = $this->input->post('detail_produk');
        $stok = $this->input->post('stok');
        $model = $this->input->post('model');
        $kategori = $this->input->post('kategori');        
        $harga = $this->input->post('harga');
        
        $gambar = $_FILES['gambar']['name'];

        if ($gambar = '') { } else {
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']     = '2048';
            $config['upload_path'] = './uploads/produk/';

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('gambar')) {
                echo "Gambar Gagal diupload!";
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }

        $data = [
            'nama_produk' => $nama_produk,
            'detail_produk' => $detail_produk,
            'stok' => $stok,
            'model' => $model,
            'kategori' => $kategori,
            'harga' => $harga,
            'gambar' => $gambar
        ];

        $this->Model_category->tambah_barang($data, 'produk');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
               Product data has been added!
              </div>');
        redirect('admin/category');
    }

    public function edit($id_produk)
    {
        $data['judul'] = "Dashboard Admin - edit Produk";
        $where = ['id_produk' => $id_produk];
        $data['produk'] = $this->Model_category->edit_produk($where, 'produk')->result();
        $this->load->view('templates_admin/header', $data);
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/category_edit', $data);
        $this->load->view('templates_admin/footer');
    }

    public function update()
    {
        $data['produk'] = $this->db->get_where('produk')->row_array();

        $id_produk      = $this->input->post('id_produk');
        $nama_produk    = $this->input->post('nama_produk');
        $detail_produk  = $this->input->post('detail_produk');
        $stok           = $this->input->post('stok');
        $model          = $this->input->post('model');
        $kategori       = $this->input->post('kategori');
        $harga          = $this->input->post('harga');

        // cek gambar jika ada gambar yang akan diupload
        $upload_image = $_FILES['gambar']['name'];

        if ($upload_image) {
            $config['allowed_types'] = 'png|jpg|jpeg';
            $config['max_size'] = '2048';
            $config['upload_path'] = './uploads/produk/';

            $this->load->library('upload', $config);

            if($this->upload->do_upload('gambar')){
                $old_image = $data['produk']['gambar']['id_produk'];
                unlink(FCPATH . 'uploads/produk/'. $old_image);

                $new_image = $this->upload->data('file_name');
                $this->db->set('gambar', $new_image);                
            }else{
                echo $this->upload->display_errors();
            }
        }

        $data = [
            'nama_produk'   => $nama_produk,
            'detail_produk' => $detail_produk,
            'stok'          => $stok,
            'model'         => $model,
            'kategori'      => $kategori,
            'harga'         => $harga,
        ];

        $where = [
            'id_produk' => $id_produk
        ];
        
        $this->Model_dashboard->update_data($where, $data, 'produk');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role = "alert">Banner & Data Produk berhasil diubah!</div>');
        redirect('admin/Category');
    }

    public function delete($id_produk)
    {
        {
            $where = ['id_produk' => $id_produk];
            $this->Model_category->hapus($where, 'produk');
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            your product data has been deleted!
           </div>');
            redirect('admin/category');
        }
    }
}   