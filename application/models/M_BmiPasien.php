<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_BmiPasien extends CI_Model {
    public $id;
    public $tanggal;
    public $pasien;
    public $bmi;

    public function getAll()
    {
        $query = $this->db->get('bmi_pasien');

        return $query;
    }

    public function findById($id)
    {
        $query = $this->db->get_where('bmi_pasien', ['id' => $id]);

        return $query->row();
    }
}