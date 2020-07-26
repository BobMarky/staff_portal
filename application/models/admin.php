<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin extends CI_Model
{

    public function getData()
    {
        $this->db->select('*');
        $this->db->from('staff');
        $query = $this->db->get();
        return $query->result();
    }

    public function insert($data)
    {
        $this->db->insert('staff', $data);
    }

    public function getDataById($id)
    {
        $this->db->select('*');
        $this->db->from('staff');
        $this->db->where('staffId', $id);
        $query = $this->db->get();
        $ret = $query->result();
        return $ret[0];
    }

    public function update($data, $id)
    {
        $this->db->where('staffId', $id);
        $this->db->update('staff', $data);
    }

    public function delete($id)
    {
        $this->db->where('staffId', $id);
        $this->db->delete('staff');
    }
}
