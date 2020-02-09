<?php 

class Model_invoice extends CI_Model
{
    public function index()
    {
        date_default_timezone_set('Asia/Jakarta');
        $nama       = $this->input->post('nama');
        $telepon    = $this->input->post('telepon');
        $email      = $this->input->post('email');
        $provinsi   = $this->input->post('provinsi');
        $kota       = $this->input->post('kota');        
        $kecamatan  = $this->input->post('kecamatan');
        $kelurahan  = $this->input->post('kelurahan');
        $alamat     = $this->input->post('alamat');
        $kode_post  = $this->input->post('kode_post');

        $invoice = [
            'nama' => $nama,
            'telepon' => $telepon,
            'email' => $email,
            'provinsi' => $provinsi,
            'kota' => $kota,        
            'kecamatan' => $kecamatan,
            'kelurahan' => $kelurahan,
            'alamat' => $alamat,
            'kode_post' => $kode_post,
            'tgl_pesan' => date('Y-m-d H:i:s'),
            'batas_bayar' => date('Y-m-d H:i:s', mktime(date('H'), date('i'), date('s'), date('m'), date('d') + 1, date('Y')))
        ];

        $this->db->insert('invoice', $invoice);
        $id_invoice = $this->db->insert_id();

        foreach ($this->cart->contents() as $item) {
            $data = [
                'id' => $id_invoice,
                'id_produk' => $item['id'],
                'nama_produk' => $item['name'],
                'jumlah' => $item['qty'],
                'harga' => $item['price']
            ];

            $this->db->insert('pesanan', $data);
        }

        return TRUE;
    }
}
