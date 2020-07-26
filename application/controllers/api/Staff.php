<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/RestController.php';
require APPPATH . 'libraries/Format.php';

use chriskacerguis\RestServer\RestController;

class Staff extends RestController
{

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model('api');
    }

    public function index_get()
    {
        $id = $this->get('id');

        if ($id === null) {
            $staffs = $this->api->getData();
            if ($staffs) {
                $this->response($staffs, 200);
            } else {
                $this->response([
                    'status' => false,
                    'message' => 'No users were found'
                ], 404);
            }
        } else if ($id) {
            $staff = $this->api->getData($id);
            if ($staff) {
                $this->response($staff, 200);
            } else {
                $this->response([
                    'status' => false,
                    'message' => 'No such user found'
                ], 404);
            }
        }
    }

    public function index_post()
    {
        $email = $this->post('email');
        $phone = $this->post('phone');
        $password = $this->post('password');
        $position = $this->post('position');
        if ($email && $phone && $password && $position) {
            $data = [
                'email' => $email,
                'phone' => $phone,
                'password' => password_hash($password, PASSWORD_BCRYPT),
                'position' => $position,
            ];
            if ($this->api->insert($data) > 0) {
                $this->response([
                    'status' => true,
                    'message' => 'New staff has been created'
                ], 200);
            }
        } else {
            $this->response([
                'status' => false,
                'message' => 'Failed to create new staff'
            ], 404);
        }
    }

    public function index_put()
    {
        $id = $this->put('id');
        $email = $this->put('email');
        $phone = $this->put('phone');
        $password = $this->put('password');
        $position = $this->put('position');

        if ($id) {
            $staff = $this->api->getData($id);
            if ($staff != null) {
                $data = [
                    'email' => $email ? $email : $staff[0]->email,
                    'phone' => $phone ? $phone : $staff[0]->phone,
                    'password' => $password ? password_hash($password, PASSWORD_BCRYPT) : $staff[0]->password,
                    'position' => $position ? $position : $staff[0]->position,
                ];

                $this->api->update($data, $id);
                $this->response([
                    'status' => true,
                    'message' => 'Staff has been updated'
                ], 200);
            } else {
                $this->response([
                    'status' => false,
                    'message' => 'Staff data not found'
                ], 404);
            }
        } else {
            $this->response([
                'status' => false,
                'message' => 'Please input staff ID'
            ], 404);
        }
    }
}
