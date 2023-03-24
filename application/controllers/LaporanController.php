<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LaporanController extends CI_Controller
{

    public function index()
    {

        $data['heading'] = 'Laporan';
        $data['sub_heading'] = 'Master Data';

        $this->load->view('layouts/header'); //Header berisi link css dan font serta aset lainya
        $this->load->view('components/navbar/index'); // Navbar berisi navbar
        $this->load->view('components/sidebar/index'); // Sidebar berisi sidebar
        $this->load->view('components/content/start'); // Content berisi content start
        $this->load->view('components/heading/index', $data); // Berisi heading
        $this->load->view('laporan/index'); // Contant
        $this->load->view('components/content/end'); // Content end verisi div penutup dari content start
        $this->load->view('layouts/footer'); // Footer berisi assets footer
    }
}
