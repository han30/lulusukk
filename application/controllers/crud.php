<?php 
 
class Crud extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->model('m_data_rute');
		$this->load->model('m_data_customer');
		$this->load->model('m_data_reservation');
		$this->load->model('m_data_transportation');
		$this->load->model('m_data_transportation_type');
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
		$class = $this->input->post('class');
		$transpotation_id = $this->input->post('transpotation_id');
		$data = array(
			'rute_from' => $rute_from,
			'rute_to' => $rute_to,
			'depart_at' => $depart_at,
			'price' => $price,
			'class' => $class,
			'transpotation_id' => $transpotation_id
		);
 
		$this->m_data_rute->input_data($data,'tb_rute');
		redirect('admin/rute');
	}
	function tambah_customer(){
		$this->load->view('v_admin_data_tambah_customer');
	}
 
	function tambah_customer_aksi(){
	
		$name = $this->input->post('name');
		$address = $this->input->post('address');
		$phone = $this->input->post('phone');
		$gender = $this->input->post('gender');
		$data = array(
			'name' => $name,
			'address' => $address,
			'phone' => $phone,
			'gender' => $gender
		);

 
		$this->m_data_customer->input_data($data,'tb_customer');
		redirect('admin/customer');
	}
	function tambah_reservation(){
		$this->load->view('v_admin_data_tambah_reservation');
	}
 
	function tambah_reservation_aksi(){
	
		$reservation_code = $this->input->post('reservation_code');
		$reservation_at = $this->input->post('reservation_at');
		$phone = $this->input->post('reservation_date');
		$cutomer_id = $this->input->post('cutomer_id');
		$seat_code = $this->input->post('seat_code');
		$rute_id = $this->input->post('rute_id');
		$depart_at = $this->input->post('depart_at');
		$price = $this->input->post('price');
		$user_id = $this->input->post('user_id');
		$data = array(
			'reservation_code' => $reservation_code,
			'reservation_at' => $reservation_at,
			'phone' => $phone,
			'cutomer_id' => $cutomer_id,
			'seat_code' => $seat_code,
			'rute_id' => $rute_id,
			'depart_at' => $depart_at,
			'price' => $price,
			'user_id' => $user_id,
		);
 
		$this->m_data_customer->input_data($data,'tb_reservation');
		redirect('admin/reservation');
	}
		function tambah_transportation(){
		$this->load->view('v_admin_data_tambah_transportation');
	}
 
	function tambah_transportation_aksi(){
	
		$code = $this->input->post('code');
		$description = $this->input->post('description');
		$seat_qty = $this->input->post('seat_qty');
		$transportation_type_id = $this->input->post('transportation_type_id');
		$data = array(
			'code' => $code,
			'description' => $description,
			'seat_qty' => $seat_qty,
			'transportation_type_id' => $transportation_type_id
		);
 
		$this->m_data_transportation->input_data($data,'tb_transportation');
		redirect('admin/transportation');
	}
		function tambah_transportation_type(){
		$this->load->view('v_admin_data_tambah_transportation_type');
	}
 
	function tambah_transportation_type_aksi(){
	
		$description = $this->input->post('description');
		$data = array(
			'description' => $description,
		);
 
		$this->m_data_transportation_type->input_data($data,'tb_transportation_type');
		redirect('admin/transportation_type');
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
 	function edit_customer($id){
	$where = array('id' => $id);
	$data['tb_customer'] = $this->m_data_customer->edit_data($where,'tb_customer')->result();
	$this->load->view('v_admin_data_edit_customer',$data);
	}
 	function edit_reservation($id){
	$where = array('id' => $id);
	$data['tb_reservation'] = $this->m_data_reservation->edit_data($where,'tb_reservation')->result();
	$this->load->view('v_admin_data_edit_reservation',$data);
	}
 	function edit_transportation($id){
	$where = array('id' => $id);
	$data['tb_transportation'] = $this->m_data_transportation->edit_data($where,'tb_transportation')->result();
	$this->load->view('v_admin_data_edit_transportation',$data);
	}
 	function edit_transportation_type($id){
	$where = array('id' => $id);
	$data['tb_transportation_type'] = $this->m_data_transportation_type->edit_data($where,'tb_transportation_type')->result();
	$this->load->view('v_admin_data_edit_transportation_type',$data);
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
	function hapus_customer($id){
		$where = array('id' => $id);
		$this->m_data_customer->hapus_data($where,'tb_customer');
		redirect('admin/customer');
	}
	function hapus_reservation($id){
		$where = array('id' => $id);
		$this->m_data_reservation->hapus_data($where,'tb_reservation');
		redirect('admin/reservation');
	}
	function hapus_transportation($id){
		$where = array('id' => $id);
		$this->m_data_transportation->hapus_data($where,'tb_transportation');
		redirect('admin/transportation');
	}
	function hapus_transportation_type($id){
		$where = array('id' => $id);
		$this->m_data_transportation_type->hapus_data($where,'tb_transportation_type');
		redirect('admin/transportation_type');
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
	$class = $this->input->post('class');
	$transpotation_id = $this->input->post('transpotation_id');
	$data = array(
		'rute_from' => $rute_from,
		'rute_to' => $rute_to,
		'depart_at' => $depart_at,
		'price' => $price,
		'class' => $class,
		'transpotation_id' => $transpotation_id,
	);
 
	$where = array(
		'id' => $id
	);

	$this->m_data_rute->update_data($where,$data,'tb_rute');
	redirect('admin/rute');
	}
	function update_customer(){
		$name = $this->input->post('name');
		$address = $this->input->post('address');
		$phone = $this->input->post('phone');
		$gender = $this->input->post('gender');
		$data = array(
			'name' => $name,
			'address' => $address,
			'phone' => $phone,
			'gender' => $gender
	);
 
	$where = array(
		'id' => $this->input->post('id')
	);

	$this->m_data_customer->update_data($where,$data,'tb_customer');
	redirect('admin/customer');
	}
	function update_reservation(){
		$reservation_code = $this->input->post('reservation_code');
		$reservation_at = $this->input->post('reservation_at');
		$phone = $this->input->post('reservation_date');
		$cutomer_id = $this->input->post('cutomer_id');
		$seat_code = $this->input->post('seat_code');
		$rute_id = $this->input->post('rute_id');
		$depart_at = $this->input->post('depart_at');
		$price = $this->input->post('price');
		$user_id = $this->input->post('user_id');
		$data = array(
			'reservation_code' => $reservation_code,
			'reservation_at' => $reservation_at,
			'phone' => $phone,
			'cutomer_id' => $cutomer_id,
			'seat_code' => $seat_code,
			'rute_id' => $rute_id,
			'depart_at' => $depart_at,
			'price' => $price,
			'user_id' => $user_id,
	);
 
	$where = array(
		'id' => $id
	);

	$this->m_data_reservation->update_data($where,$data,'tb_reservation');
	redirect('admin/reservation');
	}
	function update_transportation(){
		$code = $this->input->post('code');
		$description = $this->input->post('description');
		$seat_qty = $this->input->post('seat_qty');
		$transportation_type_id = $this->input->post('transportation_type_id');
		$data = array(
			'code' => $code,
			'description' => $description,
			'seat_qty' => $seat_qty,
			'transportation_type_id' => $transportation_type_id
		);
 
	$where = array(
		'id' => $this->input->post('id')
	);

	$this->m_data_transportation->update_data($where,$data,'tb_transportation');
	redirect('admin/transportation');
	}
	function update_transportation_type(){
		$description = $this->input->post('description');
		$data = array(
			'description' => $description,
		);
 
	$where = array(
		'id' => $this->input->post('id')
	);

	$this->m_data_transportation_type->update_data($where,$data,'tb_transportation_type');
	redirect('admin/transportation_type');
	}
}