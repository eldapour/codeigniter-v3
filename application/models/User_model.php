<?php
class User_model extends CI_Model
{
	/**
	 * @return array|array[]|object|object[]
	 */
	public function get_users(): array|object
	{
		$query = $this->db->get('users');
		return $query->result();
	} // end get users

	public function get_user($user)
	{
		$this->db->where('id', $user);
		$query = $this->db->get('users');
		return $query->first_row();
	} // end get user

	public function insert_user($request)
	{
		$this->db->insert('users', $request);
	} // end get user

	public function user_update($request)
	{
		$this->db->where('id',$request['id']);
		$this->db->update('users', $request);
	} // end get user

	public function delete_user($id)
	{
		$this->db->where('id',$id)
			->delete('users');
	}
}
