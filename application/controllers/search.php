<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_data_rute');
		$this->load->library('encryption');
		if ($this->session->userdata('status')!='login') {
			redirect(base_url('login'));
		}
	 }

	public function index(){
		$rute_from = $this->input->get('rute_from');
		$rute_to = $this->input->get('rute_to');
		$depart_at = $this->input->get('depart_at');
		$passanger = $this->input->get('passanger');
		$class = $this->input->get('class');

		$data = [
			'depart_at' => $depart_at,
			'rute_from' => $rute_from,
			'rute_to' => $rute_to,
			// 'price' => 
			'class' => $class
		];

		$rute = $this->m_data_rute->tampil_data_where($data);

		$data['rute'] = $rute;
		$this->load->view('v_search_rute',$data);

		// var_dump($rute);
	}
	// function rute(){
		
}
