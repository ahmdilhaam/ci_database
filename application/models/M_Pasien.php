<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_Pasien extends CI_Model {
    public $id;
    public $kode;
    public $nama;
    public $tmp_lahir;
    public $tgl_lahir;
    public $gender;
    public $email;

    public function getAll()
    {
        $query = $this->db->get('pasien');

        return $query;
    }

    public function findById($id)
    {
        $query = $this->db->get_where('pasien', ['id' => $id]);

        return $query->row();
    }
}