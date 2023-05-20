<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DashboardController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('PembayaranModel', 'pembayaran_model');
        $this->load->model('DapurModel', 'dapur_model');
    }

    public function index()
    {

        $data['heading'] = 'Dashboard';
        $data['controller'] = $this;
        $data['pembayaran'] = $this->pembayaran_model->getByToday();

        $data['count_data'] = [
            'today' => $this->count_data($data['pembayaran'], 'nominal'),
            'in' => $this->count_data($this->pembayaran_model->get(), 'nominal'),
            'out' => $this->count_with_qty($this->dapur_model->get(), 'harga', 'jml_beli'),
        ];

        $this->load->view('layouts/header'); //Header berisi link css dan font serta aset lainya
        $this->load->view('components/navbar/index'); // Navbar berisi navbar
        $this->load->view('components/sidebar/index'); // Sidebar berisi sidebar
        $this->load->view('components/content/start'); // Content berisi content start
        $this->load->view('components/heading/index', $data); // Berisi heading
        $this->load->view('dashboard/index'); // Contant
        $this->load->view('components/content/end'); // Content end verisi div penutup dari content start
        $this->load->view('layouts/footer'); // Footer berisi assets footer
    }

    public function count_with_qty($array, $key, $key_qty)
    {
        $data = 0;
        foreach ($array as $val) {
            $data = $data + ($val->{$key} * $val->{$key_qty});
        }

        return $data;
    }

    public function count_data($array, $key)
    {
        $data = 0;
        foreach ($array as $val) {
            $data = $data + $val->{$key};
        }
        return $data;
    }
}
