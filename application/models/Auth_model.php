<?php
class Auth_model extends CI_Model
{
	public function create($formarray)
	{
		$this->db->insert('user',$formarray);
	}
}
?>