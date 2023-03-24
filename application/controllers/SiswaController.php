<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SiswaController extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('SiswaModel', 'siswa_model');
        $this->load->model('KategoriModel', 'kategori_model');
        $this->load->model('KelasModel', 'kelas_model');
    }

    public function index()
    {
        $data['heading'] = 'Siswa';
        $data['sub_heading'] = 'Master Data';
        $data['siswa'] = $this->siswa_model->get();
        $data['kategori'] = $this->kategori_model->get();
        $data['kelas'] = $this->kelas_model->get();

        $this->load->view('layouts/header'); //Header berisi link css dan font serta aset lainya
        $this->load->view('components/navbar/index'); // Navbar berisi navbar
        $this->load->view('components/sidebar/index'); // Sidebar berisi sidebar
        $this->load->view('components/content/start'); // Content berisi content start
        $this->load->view('components/heading/index', $data); // Berisi heading
        $this->load->view('siswa/index', $data); // Contant
        $this->load->view('components/content/end'); // Content end verisi div penutup dari content start
        $this->load->view('components/modal_confirm/index'); // Modal Confirm
        $this->load->view('layouts/footer'); // Footer berisi assets footer
    }

    public function detail()
    {
        $data['heading'] = 'Siswa';
        $data['sub_heading'] = 'Detail Siswa';
        $data['siswa'] = $this->siswa_model->getById($this->input->get('id_siswa'));

        $this->load->view('layouts/header'); //Header berisi link css dan font serta aset lainya
        $this->load->view('components/navbar/index'); // Navbar berisi navbar
        $this->load->view('components/sidebar/index'); // Sidebar berisi sidebar
        $this->load->view('components/content/start'); // Content berisi content start
        $this->load->view('components/heading/index', $data); // Berisi heading
        $this->load->view('siswa/detail/index', $data); // Contant
        $this->load->view('components/content/end'); // Content end verisi div penutup dari content start
        $this->load->view('components/modal_confirm/index'); // Modal Confirm
        $this->load->view('layouts/footer'); // Footer berisi assets footer
    }

    public function getById()
    {
        $result = $this->siswa_model->getById($this->input->get('id'));
        echo json_encode($result);
    }

    public function data()
    {
        $data['nama_lengkap'] = $this->input->post('nama_lengkap');
        $data['id_kategori'] = $this->input->post('id_kategori');
        $data['id_kelas'] = $this->input->post('id_kelas');
        $data['no_hp'] = $this->input->post('no_hp');
        $data['alamat'] = $this->input->post('alamat');

        return $data;
    }

    public function store()
    {
        $data = $this->data();

        $this->siswa_model->store($data);
        redirect('siswa');
    }

    public function update()
    {
        $data = $this->data();

        $this->siswa_model->update($this->input->post('id'), $data);
        redirect('siswa');
    }

    public function delete()
    {
        $result = $this->siswa_model->delete($this->input->get('id'));
        echo json_encode($result);
    }
}
