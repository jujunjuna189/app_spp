<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PembayaranController extends CI_Controller
{

    private $heading = 'Pembayaran';
    private $sub_heading = 'Transaksi';

    public function __construct()
    {
        parent::__construct();
        $this->load->model('SiswaModel', 'siswa_model');
        $this->load->model('KategoriModel', 'kategori_model');
        $this->load->model('PembayaranModel', 'pembayaran_model');
        $this->load->model('PembayaranDetailModel', 'pembayaran_detail_model');
    }

    public function index()
    {

        $data['heading'] = $this->heading;
        $data['sub_heading'] = $this->sub_heading;
        $data['pembayaran'] = $this->pembayaran_model->getWithSiswa();
        $data['controller'] = $this;

        $this->load->view('layouts/header'); //Header berisi link css dan font serta aset lainya
        $this->load->view('components/navbar/index'); // Navbar berisi navbar
        $this->load->view('components/sidebar/index'); // Sidebar berisi sidebar
        $this->load->view('components/content/start'); // Content berisi content start
        $this->load->view('components/heading/index', $data); // Berisi heading
        $this->load->view('pembayaran/index', $data); // Contant
        $this->load->view('components/content/end'); // Content end verisi div penutup dari content start
        $this->load->view('layouts/footer'); // Footer berisi assets footer
    }

    public function pembayaran()
    {
        $data['heading'] = $this->heading;
        $data['sub_heading'] = $this->sub_heading;
        $data['controller'] = $this;

        $this->load->view('layouts/header'); //Header berisi link css dan font serta aset lainya
        $this->load->view('components/navbar/index'); // Navbar berisi navbar
        $this->load->view('components/sidebar/index'); // Sidebar berisi sidebar
        $this->load->view('components/content/start'); // Content berisi content start
        $this->load->view('components/heading/index', $data); // Berisi heading
        $this->load->view('pembayaran/form/pembayaran', $data); // Contant
        $this->load->view('components/content/end'); // Content end verisi div penutup dari content start
        $this->load->view('layouts/footer'); // Footer berisi assets footer
    }

    public function hitung_tunggakan()
    {
        $siswa = $this->siswa_model->getById($this->input->get('id'));
        $kategori = $this->kategori_model->getById($siswa->id_kategori);

        $total = $this->countNominalWithArray([$kategori->harga_infaq, $kategori->harga_makan, $kategori->harga_semester], '+');

        $data = [
            'kategori' => $kategori,
            'harga_infaq' => $this->formatterCurrency($kategori->harga_infaq),
            'harga_makan' => $this->formatterCurrency($kategori->harga_makan),
            'harga_semester' => $this->formatterCurrency($kategori->harga_semester),
            'total' => $this->formatterCurrency($total),
        ];

        echo json_encode($data);
    }

    public function countNominalWithArray($array, $sparator)
    {
        $total = 0;
        foreach ($array as $val) {
            $total = eval("return $total $sparator $val;");
        }

        return $total;
    }

    public function data()
    {
        $data['id_siswa'] = $this->input->post('siswa')['id'];
        $data['nominal'] = $this->input->post('total');
        $data['tanggal'] = date('Y-m-d');

        return $data;
    }

    public function bayar()
    {
        $create = $this->pembayaran_model->store($this->data());
        if ($create) {
            $data_last = $this->pembayaran_model->getByLast();

            $data_detail['id_pembayaran'] = $data_last->id;
            $data_detail['detail_pembayaran'] = json_encode([
                'infaq' => $this->input->post('infaq'),
                'makan' => $this->input->post('makan'),
                'semester' => $this->input->post('semester'),
                'total' => $this->input->post('total'),
                'keterangan' => $this->input->post('keterangan'),
            ]);
            $create_detail = $this->pembayaran_detail_model->store($data_detail);
        }
        echo json_encode($create);
    }
}
