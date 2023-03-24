<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KelasController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('KelasModel', 'kelas_model');
    }


    public function index()
    {

        $data['heading'] = 'Kelas';
        $data['sub_heading'] = 'Master Data';
        $data['kelas'] = $this->kelas_model->get();

        $this->load->view('layouts/header'); //Header berisi link css dan font serta aset lainya
        $this->load->view('components/navbar/index'); // Navbar berisi navbar
        $this->load->view('components/sidebar/index'); // Sidebar berisi sidebar
        $this->load->view('components/content/start'); // Content berisi content start
        $this->load->view('components/heading/index', $data); // Berisi heading
        $this->load->view('kelas/index', $data); // Contant
        $this->load->view('components/content/end'); // Content end verisi div penutup dari content start
        $this->load->view('components/modal_confirm/index'); // Modal Confirm
        $this->load->view('layouts/footer'); // Footer berisi assets footer
    }

    public function getById()
    {
        $result = $this->kelas_model->getById($this->input->get('id'));
        echo json_encode($result);
    }

    public function data()
    {
        $data['nama_kelas'] = $this->input->post('nama_kelas');

        return $data;
    }

    public function store()
    {
        $data = $this->data();

        $this->kelas_model->store($data);
        redirect('kelas');
    }

    public function update()
    {
        $data = $this->data();

        $this->kelas_model->update($this->input->post('id'), $data);
        redirect('kelas');
    }

    public function delete()
    {
        $result = $this->kelas_model->delete($this->input->get('id'));
        echo json_encode($result);
    }
}
