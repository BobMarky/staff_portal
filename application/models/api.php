<?php
defined('BASEPATH') or exit('No direct script access allowed');

class api extends CI_Model
{
    public function getData($id = null)
    {
        $this->db->select('*');
        $this->db->from('staff');
        if ($id != null) {
            $this->db->where('staffId', $id);
        }
        $query = $this->db->get();
        return $query->result();
    }

    public function insert($data)
    {
        $this->db->insert('staff', $data);
        return $this->db->affected_rows();
    }

    public function update($data, $id)
    {
        $this->db->where('staffId', $id);
        $this->db->update('staff', $data);
    }
}
