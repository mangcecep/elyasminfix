<?php

class Model_dashboard extends CI_Model
{
    public function tampil_data()
    {
        return $query = $this->db->get('home')->result_array();
    }

    public function getBannerById()
    {
        return $this->db->get_where('home')->row_array();
    }

    public function edit_banner($Where, $table)
    {
        return $this->db->get_where($table);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    
}