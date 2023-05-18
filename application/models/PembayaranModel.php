<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PembayaranModel extends CI_Model
{
    private $table = 'pembayaran';

    public function store($data)
    {
        $result = $this->db->insert($this->table, $data);
        return $result;
    }

    public function get()
    {
        $query = $this->db->get($this->table);
        return $query->result();
    }

    public function getById($id)
    {
        $query = $this->db->get_where($this->table, ['id' => $id]);
        return $query->result()[0];
    }

    public function getByLast()
    {
        $this->db->order_by("id", "desc");
        $query = $this->db->get($this->table);
        return $query->result()[0];
    }

    public function getWithSiswa()
    {
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->join('siswa', 'siswa.id=' . $this->table . '.id_siswa');
        $this->db->join('kategori', 'kategori.id=siswa.id_kategori');
        $this->db->join('kelas', 'kelas.id=siswa.id_kelas');
        $query = $this->db->get();
        return $query->result();
    }

    public function update($id, $data)
    {
        $this->db->update($this->table, $data, ['id' => $id]);
        return $this->db->affected_rows();
    }

    public function delete($id)
    {
        $result = $this->db->delete($this->table, ['id' => $id]);
        return $result;
    }
}
