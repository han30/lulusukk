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

	function rute(){
		$rute_from = $this->input->post('rute_from');
		$rute_to = $this->input->post('rute_to');
		$depart_at = $this->input->post('depart_at');
		$where = "where rute_from like '" . $rute_from . "' and rute_to like '"  . $rute_to ."' and depart_at like '" . $depart_at . "'";
		$query = "SELECT *  from tb_rute " . $where;
		$data['rute'] = $this->db->query($query);
		$this->load->view('v_search_rute',$data);
	}
}
