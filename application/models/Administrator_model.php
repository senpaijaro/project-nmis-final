<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator_model extends CI_Model{



		public function ShowAdministrator()
		{
			$query = $this->db->order_by('firstname','asc')->get_where('nmis_accounts_tbl', array('status'=>'Active', 'role'=> 0));
			if($query->num_rows() > 0)
			{
				return $query->result();
			}
			else
			{
				return false;
			}
		}

		public function Showuser()
		{
			$query = $this->db->order_by('firstname','asc')->get_where('nmis_accounts_tbl', array('status'=>'Active', 'role'=> 1));
			if($query->num_rows() > 0)
			{
				return $query->result();
			}
			else
			{
				return false;
			}
		}

		public function addAccounts($data){
			$check = $this->db->select('username')->from('nmis_accounts_tbl')->where(array('username'=> $data['username']))->get();
			if($check->num_rows() > 0)
			{
				$this->session->set_flashdata('message', 'exist_username');
				return $check;
			}
			else
			{
				$query = $this->db->insert('nmis_accounts_tbl',$data);
				$this->session->set_flashdata('message', 'success_addAdmisnistrator');
				return $query;
			}
		}

		public function ShowprofileAdmin($id)
		{
			$query = $this->db->get_where('nmis_accounts_tbl', array('user_id'=>$id,'status'=>'Active'));
			if($query)
			{
				return $query->row_array();
			}
			else
			{
				return false;
			}
		}
		public function UpdateProfile($id,$data){

			$query = $this->db->where('nmis_accounts_tbl.user_id',$id)->update('nmis_accounts_tbl',$data);
			if($query)
			{
				$this->session->set_flashdata('message', 'success_updated');
				return $query;
			}
			else
			{
				return false;
			}
		}
		public function changepassword($id,$data)
		{
			$query = $this->db->where('nmis_accounts_tbl.user_id',$id)->update('nmis_accounts_tbl',$data);
			if($query)
			{
				$this->session->set_flashdata('message', 'success_updated');
				return $query;
			}
			else
			{
				return false;
			}
		}

		public function updatePicture($id, $data)
		{
			$query = $this->db->where('nmis_accounts_tbl.user_id',$id)->update('nmis_accounts_tbl',$data);
			if($query)
			{
				$this->session->set_flashdata('message','success_updated');
				return $query;
			}
			else
			{
				return false;
			}
		}
		public function deactivate_admin($status,$id)
			{
				$query = $this->db->where('nmis_accounts_tbl.user_id',$id)->update('nmis_accounts_tbl', array('status'=>$status));
				if($query)
				{
					$this->session->set_flashdata("message", "deactivate");
					return $query;
				}
				else
				{
					return false;
				}
			}

}
