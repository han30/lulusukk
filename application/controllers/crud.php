<?php 
 
class Crud extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->model('m_data_rute');
		$this->load->helper('url');
		$this->load->library('encryption');
 
	}
 
	function index(){
		$data['tb_user'] = $this->m_data->tampil_data()->result();
		$this->load->view('v_admin',$data);
	}

	function rute(){
		$data['tb_rute'] = $this->m_data_rute->tampil_data()->result();
		$this->load->view('v_admin_data_rute',$data);
	}

	function tambah(){
		$this->load->view('v_admin_data_tambah_user');
	}
 
	function tambah_aksi(){
	
		$fullname = $this->input->post('fullname');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$level = $this->input->post('level');
		$data = array(
			'fullname' => $fullname,
			'username' => $username,
			'password' => base64_encode($password),
			'level' => $level
		);
 
		$this->m_data->input_data($data,'tb_user');
		redirect('admin/');
	}

	function tambah_rute(){
		$this->load->view('v_admin_data_tambah_rute');
	}
 
	function tambah_rute_aksi(){
	
		$rute_from = $this->input->post('rute_from');
		$rute_to = $this->input->post('rute_to');
		$depart_at = $this->input->post('depart_at');
		$price = $this->input->post('price');
		$transpotation_id = $this->input->post('transpotation_id');
		$data = array(
			'rute_from' => $rute_from,
			'rute_to' => $rute_to,
			'depart_at' => $depart_at,
			'price' => $price,
			'transpotation_id' => $transpotation_id
		);
 
		$this->m_data_rute->input_data($data,'tb_rute');
		redirect('admin/rute');
	}

	function edit($id){
	$where = array('id' => $id);
	$data['tb_user'] = $this->m_data->edit_data($where,'tb_user')->result();
	$this->load->view('v_admin_data_edit_user',$data);
	}

 	function edit_rute($id){
	$where = array('id' => $id);
	$data['tb_rute'] = $this->m_data_rute->edit_data($where,'tb_rute')->result();
	$this->load->view('v_admin_data_edit_rute',$data);
	}
 
	function hapus($id){
		$where = array('id' => $id);
		$this->m_data_rute->hapus_data($where,'tb_user');
		redirect('admin/');
	}

	function hapus_rute($id){
		$where = array('id' => $id);
		$this->m_data_rute->hapus_data($where,'tb_rute');
		redirect('admin/rute');
	}

	function update(){
	$id = $this->input->post('id');
	$fullname = $this->input->post('fullname');
	$username = $this->input->post('username');
	$password = $this->input->post('password');
	$level = $this->input->post('level');
	$data = array(
		'fullname' => $fullname,
		'username' => $username,
		'password' => base64_encode($password),
		'level' => $level
	);
 
	$where = array(
		'id' => $id
	);

	$this->m_data->update_data($where,$data,'tb_user');
	redirect('admin/');
	
	// $query = $this->db->query('UPDATE `tb_user` SET `username` = "'.$username.'", `password` = "'.$password.'", `fullname` = "'.$fullname.'", `level` = "'.$level.'" WHERE `tb_user`.`id` = "'.$id.'"');
	// 	if ($query) {
	// 		echo redirect('admin/');
	// 	}
	}
	function update_rute(){
	$id = $this->input->post('id');
	$rute_from = $this->input->post('rute_from');
	$rute_to = $this->input->post('rute_to');
	$depart_at = $this->input->post('depart_at');
	$price = $this->input->post('price');
	$transpotation_id = $this->input->post('transpotation_id');
	$data = array(
		'rute_from' => $rute_from,
		'rute_to' => $rute_to,
		'depart_at' => $depart_at,
		'price' => $price,
		'transpotation_id' => $transpotation_id,
	);
 
	$where = array(
		'id' => $id
	);

	$this->m_data_rute->update_data($where,$data,'tb_rute');
	redirect('admin/rute');
	}
}