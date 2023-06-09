<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AuthController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('PenggunaModel', 'pengguna_model');
    }

    public function index()
    {
        $this->load->view('layouts/header');
        $this->load->view('auth/login');
        $this->load->view('layouts/footer');
    }

    public function onLogin()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $login = $this->pengguna_model->getWhere(['username' => $username, 'password' => $password]);

        if (count($login) > 0) {
            $this->session->set_userdata('user', $login[0]);
            redirect('dashboard');
        } else {
            $this->session->set_flashdata('error', [
                'message' => 'Gagal login',
            ]);
            redirect('login');
        }
    }

    public function register()
    {
        $this->load->view('layouts/header');
        $this->load->view('auth/register');
        $this->load->view('layouts/footer');
    }

    public function onRegister()
    {
        $data['nama'] = $this->input->post('nama');
        $data['username'] = $this->input->post('username');
        $data['password'] = $this->input->post('password');

        $register = $this->pengguna_model->store($data);
        redirect('login');
    }

    public function checkAuth()
    {
        if (!$this->session->userdata('user')) {
            redirect('login');
        }
    }

    public function logout()
    {
    }
}
