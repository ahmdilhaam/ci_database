<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {
	function __construct()
	{
		parent::__construct();

        $this->load->model('m_pasien');
    }

	public function index()
	{
        $this->load->model('m_pasien','pasien1');
        $this->pasien1->id=1;
        $this->pasien1->kode='010001';
        $this->pasien1->nama='Faiz Fikri';
        $this->pasien1->gender='L';

        $this->load->model('m_pasien','pasien2');
        $this->pasien2->id=2;
        $this->pasien2->kode='020001';
        $this->pasien2->nama='Pandan Wangi';
        $this->pasien2->gender='P';

        $list_pasien=[$this->pasien1, $this->pasien2];
        $data['list_pasien']=$list_pasien;

        $this->load->view('pasien/index',$data);
    }

    public function list()
    {
        $data['pasien'] = $this->m_pasien->getAll();
        $data['view'] = 'pasien/list';
        $data['title'] = 'Pasien';

        $this->load->view('index', $data);
    }

    public function view($id)
    {
        $data['pasien'] = $this->m_pasien->findById($id);
        $data['view'] = 'pasien/view';
        $data['title'] = 'Pasien';

        $this->load->view('index', $data);
    }
}