<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
		if ($this->login_model->isNotLogin()) {
			redirect(base_url('Login'));
		}
		$this->load->model('admin');
	}

	public function index()
	{
		redirect(base_url('login'));
	}

	public function home()
	{
		// echo "<pre>";
		// echo print_r($this->session->userdata['user_logged']['username']);
		// echo "</pre>";
		$dataStaff = $this->admin->getData();
		$staffData = array('data' => $dataStaff);
		$username = array('username' => $this->session->userdata['user_logged']);
		$data = array_merge($staffData, $username);

		$this->load->view('home', $data);
	}

	public function add()
	{
		$username = array('username' => $this->session->userdata['user_logged']);
		$this->load->view('add', $username);
	}

	public function insert()
	{
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		$position = $this->input->post('position');
		$password = $this->input->post('password');
		$passwordHash = password_hash($password, PASSWORD_BCRYPT);
		$data = array(
			'email' => $email,
			'phone' => $phone,
			'position' => $position,
			'password' => $passwordHash
		);
		$this->admin->insert($data);

		redirect(base_url('Welcome/home'));
	}

	public function edit($id)
	{
		$dataStaff = $this->admin->getDataById($id);
		// echo "<pre>";
		// echo print_r($dataStaff);
		// echo "</pre>";
		$staffData = array('data' => $dataStaff);
		$username = array('username' => $this->session->userdata['user_logged']);
		$data = array_merge($staffData, $username);

		$this->load->view('edit', $data);
	}

	public function update()
	{
		$staffId = $this->input->post('staffId');
		$dataStaff = $this->admin->getDataById($staffId);

		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		$position = $this->input->post('position');
		$password = $this->input->post('password');
		if (!$password) {
			$passwordHash = $dataStaff->password;
		} else {
			$passwordHash = password_hash($password, PASSWORD_BCRYPT);
		}

		$data = array(
			'email' => $email,
			'phone' => $phone,
			'position' => $position,
			'password' => $passwordHash
		);
		$this->admin->update($data, $staffId);
		redirect(base_url('Welcome/home'));
	}

	public function delete($id)
	{
		$this->admin->delete($id);
		redirect(base_url('Welcome/home'));
	}
}
