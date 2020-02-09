<?php

class Model_category extends CI_Model
{
    public function tampil_data()
    {
        return $query = $this->db->get('produk')->result_array();
    }
    
    public function tambah_barang($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function getProdukById()
    {
        return $this->db->get_where('produk')->row_array();
    }

    public function edit_produk($Where, $table)
    {
        return $this->db->get_where($table, $Where);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapus($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function find($id_produk)
    {
        $result = $this->db->where('id_produk', $id_produk)->limit(1)->get('produk');
        if($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }

    public function countAllProduk()
    {
        return $this->db->get('produk')->num_rows();
    }

    public function detail_produk($id_produk)
    {
        $result = $this->db->where('id_produk', $id_produk)->get('produk');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }
}