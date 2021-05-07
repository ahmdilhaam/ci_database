<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bmi_Pasien extends CI_Controller {
	function __construct()
	{
		parent::__construct();

        $this->load->model('m_pasien');
        $this->load->model('m_bmipasien');
    }

	public function index()
	{
        return 'index';
    }

    public function list()
    {
        $data['bmi'] = $this->m_bmipasien->getAll();
        $data['view'] = 'bmi_pasien/list';
        $data['title'] = 'BMI';

        $this->load->view('index', $data);
    }

    public function view($id)
    {
        $data['bmi'] = $this->m_bmipasien->findById($id);
        $data['pasien'] = $this->m_pasien->findById($data['bmi']->pasien_id);
        $data['view'] = 'bmi_pasien/view';
        $data['title'] = 'BMI';

        $this->load->view('index', $data);
    }
}