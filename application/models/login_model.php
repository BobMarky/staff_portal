<?php
defined('BASEPATH') or exit('No direct script access allowed');

class login_model extends CI_Model
{
    function data_login($email, $password)
    {
        $this->db->select('*');
        $this->db->from("staff");
        $this->db->where("email", $email);
        $query = $this->db->get();
        $ret = $query->result();
        // $user = $this->db->get($this->_table)->row();
        // var_dump($ret[0]->password);
        // die();
        if ($ret) {
            if (password_verify($password, $ret[0]->password) == TRUE) {
                $data_session = array(
                    'username' => $email,
                    'status' => 'login'
                );
                $this->session->set_userdata(['user_logged' => $data_session]);
                return $ret[0];
            }
        }
    }

    function isNotLogin()
    {
        return $this->session->userdata('user_logged') === null;
    }
}
