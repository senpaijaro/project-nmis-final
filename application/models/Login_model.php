<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Login_model extends CI_Model{


		public function login($username,$password)
		{
			$this->db->select('password')->from('nmis_accounts_tbl')->where('username', $username);
			$hash = $this->db->get()->row('password');
			return password_verify($password, $hash);
		}

		public function GetId($username) 
		{
			
			$this->db->select('user_id')->from('nmis_accounts_tbl')->where('username', $username);
			return $this->db->get()->row('user_id');
			
		}
		public function GetUserInformation($id) 
			{
				
				$this->db->from('nmis_accounts_tbl')->where('user_id', $id);
				return $this->db->get()->row();
				
			}

}