<?php
class User extends CI_Controller {

	public function index(): void
	{
		$data['users'] = $this->user_model->get_users();
		$this->load->view('user/index',$data);
	}

	public function user($user): void
	{
		$data['user'] = $this->user_model->get_user($user);
		$this->load->view('user/user',$data);
	}

	public function create()
	{
		$request = $_POST;
		$this->user_model->insert_user($request);
		redirect('/user/index');
	}

	public function delete($id)
	{
		$this->user_model->delete_user($id);
		redirect('/user/index');
	}
}
