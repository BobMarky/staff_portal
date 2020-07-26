<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->library('form_validation');
    }

    function index()
    {
        $this->load->view('login_page');
    }

    function cek_login()
    {
        $this->form_validation->set_rules('email', 'email', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('form_login');
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $cek = $this->login_model->data_login($email, $password);
            if ($cek) {
                redirect(base_url('Welcome/Home'));
            } else {
                $this->session->set_flashdata('pesan', '<br>Email atau Password salah');
                redirect(base_url("login"));
            }
        }
    }

    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}
