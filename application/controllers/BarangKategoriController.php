<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BarangKategoriController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('BarangKategoriModel', 'barang_kategori_model');
        $this->load->model('BarangModel', 'barang_model');
    }


    public function index()
    {

        $data['heading'] = 'Data Kategori Barang';
        $data['sub_heading'] = 'Master Data';
        $data['controller'] = $this;
        $data['barang_kategori'] = $this->barang_kategori_model->get();

        $this->load->view('layouts/header'); //Header berisi link css dan font serta aset lainya
        $this->load->view('components/navbar/index'); // Navbar berisi navbar
        $this->load->view('components/sidebar/index'); // Sidebar berisi sidebar
        $this->load->view('components/content/start'); // Content berisi content start
        $this->load->view('components/heading/index', $data); // Berisi heading
        $this->load->view('barang/kategori/index', $data); // Contant
        $this->load->view('components/content/end'); // Content end verisi div penutup dari content start
        $this->load->view('components/modal_confirm/index'); // Modal Confirm
        $this->load->view('layouts/footer'); // Footer berisi assets footer
    }

    public function getById()
    {
        $result = $this->barang_kategori_model->getById($this->input->get('id'));
        echo json_encode($result);
    }

    public function data()
    {
        $data['nama_kategori'] = $this->input->post('nama_kategori');

        return $data;
    }

    public function store()
    {
        $data = $this->data();

        $this->barang_kategori_model->store($data);
        redirect('barang-kategori');
    }

    public function update()
    {
        $data = $this->data();

        $this->barang_kategori_model->update($this->input->post('id'), $data);
        redirect('barang-kategori');
    }

    public function delete()
    {
        $barang = $this->barang_model->getWhere(['barang_kategori_id' => $this->input->get('id')]);
        foreach ($barang as $val) {
            $this->barang_model->delete($val->id);
        }

        $result = $this->barang_kategori_model->delete($this->input->get('id'));
        echo json_encode($result);
    }
}
