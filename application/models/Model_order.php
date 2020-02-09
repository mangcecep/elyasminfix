<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Model_order extends CI_Model
{
    public function tampil_data()
    {
        return $query = $this->db->get('pesanan')->result_array();
    }

    public function tampil_data_invoice()
    {
        return $query = $this->db->get('invoice')->result_array();
    }

    public function tampil_data_penerima($id_invoice)
    {
        
        $this->db->select('invoice.nama, 
		invoice.alamat,
		invoice.kelurahan,
		invoice.kecamatan,
		invoice.kota,
		invoice.provinsi,
		invoice.kode_post,
		invoice.telepon,
		pesanan.nama_produk,
		pesanan.jumlah,
		(pesanan.jumlah * pesanan.harga) AS "Subtotal"');
        $this->db->from('invoice');
        $this->db->join('pesanan', 'invoice.id_invoice = pesanan.id');
        //$query = $this->db->where('id_invoice =', $id);
        $result = $this->db->where('id_invoice', $id_invoice)->get('invoice');
        return $query->result();
        // if ($result->num_rows() > 0) {
        //     return $result->result();
        // } else {
        //     return false;
        // }
    }
}