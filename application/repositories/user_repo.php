<?php
//
//require_once 'application/interfaces/user_interface.php';
//class user_repo extends CI_Controller implements user_interface {
//
//
//	public function index(): void
//	{
//		$data['users'] = $this->User_model->get_users();
//		$this->load->view('user/index',$data);
//	}
//
//	public function user($user): void
//	{
//		$data['user'] = $this->User_model->get_user($user);
//		$this->load->view('user/user',$data);
//	}
//
//	public function create(): void
//	{
//		$request = $_POST;
//		$this->User_model->insert_user($request);
//		redirect('/user/index');
//	}
//
//	public function delete($id): void
//	{
//		$this->User_model->delete_user($id);
//		redirect('/user/index');
//	}
//}
