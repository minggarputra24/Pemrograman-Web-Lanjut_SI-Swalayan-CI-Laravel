<?php

/**
 * 
 */
class login_model extends CI_Model
{
	
	function Login($username,$password)
	{
		$this->db->select('username,password,level, status ');
		$this->db->from('user');
		$this->db->where('username',$username);

		$this->db->where('password',$password);

		$query=$this->db->get();
		return $query;		
		return false;
		
	}
}
?>