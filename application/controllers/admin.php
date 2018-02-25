<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
		$this->load->model('m_data_rute');
		$this->load->model('m_data_customer');
		$this->load->model('m_data_transportation');
		$this->load->model('m_data_transportation_type');
		$this->load->model('m_data_reservation');
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

	function customer(){
		$data['tb_customer'] = $this->m_data_customer->tampil_data()->result();
		$this->load->view('v_admin_data_customer',$data);
	}
	function transportation(){
		$data['tb_transportation'] = $this->m_data_transportation->tampil_data()->result();
		$this->load->view('v_admin_data_transportation',$data);
	}
	function transportation_type(){
		$data['tb_transportation_type'] = $this->m_data_transportation_type->tampil_data()->result();
		$this->load->view('v_admin_data_transportation_type',$data);
	}
	function reservation(){
		$data['tb_reservation'] = $this->m_data_reservation->tampil_data()->result();
		$this->load->view('v_admin_data_reservation',$data);
	}
}
