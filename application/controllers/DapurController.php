<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DapurController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('DapurModel', 'dapur_model');
        $this->load->model('BarangModel', 'barang_model');
    }

    public function index()
    {
        $data['heading'] = 'Pengeluaran Dapur';
        $data['sub_heading'] = 'Pendataan Barang';
        $data['barang'] = $this->barang_model->get();
        $data['dapur'] = $this->dapur_model->get();

        $this->load->view('layouts/header'); //Header berisi link css dan font serta aset lainya
        $this->load->view('components/navbar/index'); // Navbar berisi navbar
        $this->load->view('components/sidebar/index'); // Sidebar berisi sidebar
        $this->load->view('components/content/start'); // Content berisi content start
        $this->load->view('components/heading/index', $data); // Berisi heading
        $this->load->view('dapur/index'); // Contant
        $this->load->view('components/content/end'); // Content end verisi div penutup dari content start
        $this->load->view('layouts/footer'); // Footer berisi assets footer
    }

    public function data()
    {
        $data['nama_barang'] = $this->input->post('nama_barang');
        $data['nama_suplier'] = $this->input->post('nama_suplier');
        $data['harga'] = $this->input->post('harga');
        $data['jml_beli'] = $this->input->post('jml_beli');
        $data['jml_keseluruhan'] = $this->input->post('jml_keseluruhan');
        $data['tgl'] = date('Y-m-d');

        return $data;
    }

    public function store()
    {
        $data = $this->data();

        $store = $this->dapur_model->store($data);
        redirect('dapur');
    }
}
