<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
		$this->load->model('m_data_rute');
		$this->load->library('encryption');
		if ($this->session->userdata('status')!='login') {
			redirect(base_url('login'));
		}
	 }
	public function index()
	{
		$data['tb_user']= $this->m_data->tampil_data()->result();
		$this->load->view('v_admin',$data);
	}

	function rute(){
		$data['tb_rute'] = $this->m_data_rute->tampil_data()->result();
		$this->load->view('v_admin_data_rute',$data);
	}
}
