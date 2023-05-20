<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BarangController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('BarangModel', 'barang_model');
    }


    public function index()
    {

        $data['heading'] = 'Data Barang';
        $data['sub_heading'] = 'Master Data';
        $data['controller'] = $this;
        $data['barang'] = $this->barang_model->get();

        $this->load->view('layouts/header'); //Header berisi link css dan font serta aset lainya
        $this->load->view('components/navbar/index'); // Navbar berisi navbar
        $this->load->view('components/sidebar/index'); // Sidebar berisi sidebar
        $this->load->view('components/content/start'); // Content berisi content start
        $this->load->view('components/heading/index', $data); // Berisi heading
        $this->load->view('barang/index', $data); // Contant
        $this->load->view('components/content/end'); // Content end verisi div penutup dari content start
        $this->load->view('components/modal_confirm/index'); // Modal Confirm
        $this->load->view('layouts/footer'); // Footer berisi assets footer
    }

    public function getById()
    {
        $result = $this->barang_model->getById($this->input->get('id'));
        echo json_encode($result);
    }

    public function data()
    {
        $data['nama_barang'] = $this->input->post('nama_barang');
        $data['nama_suplier'] = $this->input->post('nama_suplier');
        $data['harga'] = $this->input->post('harga');

        return $data;
    }

    public function store()
    {
        $data = $this->data();

        $this->barang_model->store($data);
        redirect('barang');
    }

    public function update()
    {
        $data = $this->data();

        $this->barang_model->update($this->input->post('id'), $data);
        redirect('barang');
    }

    public function delete()
    {
        $result = $this->barang_model->delete($this->input->get('id'));
        echo json_encode($result);
    }
}
