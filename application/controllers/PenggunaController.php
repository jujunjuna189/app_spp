<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PenggunaController extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('PenggunaModel', 'pengguna_model');
    }

    public function index()
    {

        $data['heading'] = 'Pengguna';
        $data['sub_heading'] = 'Master Data';
        $data['pengguna'] = $this->pengguna_model->get();

        $this->load->view('layouts/header'); //Header berisi link css dan font serta aset lainya
        $this->load->view('components/navbar/index'); // Navbar berisi navbar
        $this->load->view('components/sidebar/index'); // Sidebar berisi sidebar
        $this->load->view('components/content/start'); // Content berisi content start
        $this->load->view('components/heading/index', $data); // Berisi heading
        $this->load->view('pengguna/index', $data); // Contant
        $this->load->view('components/content/end'); // Content end verisi div penutup dari content start
        $this->load->view('components/modal_confirm/index'); // Modal Confirm
        $this->load->view('layouts/footer'); // Footer berisi assets footer
    }

    public function getById()
    {
        $result = $this->pengguna_model->getById($this->input->get('id'));
        echo json_encode($result);
    }

    public function data()
    {
        $data['nama_lengkap'] = $this->input->post('nama_lengkap');
        $data['username'] = $this->input->post('username');
        $data['password'] = $this->input->post('password');
        $data['no_hp'] = $this->input->post('no_hp');
        $data['alamat'] = $this->input->post('alamat');
        $data['jabatan'] = $this->input->post('jabatan');

        return $data;
    }

    public function store()
    {
        $data = $this->data();

        $this->pengguna_model->store($data);
        redirect('pengguna');
    }

    public function update()
    {
        $data = $this->data();

        $this->pengguna_model->update($this->input->post('id'), $data);
        redirect('pengguna');
    }

    public function delete()
    {
        $result = $this->pengguna_model->delete($this->input->get('id'));
        echo json_encode($result);
    }
}
