<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Settings_model extends CI_Model{


			public function Settings()
			{
				$query = $this->db->get('nmis_settings_tbl');
				if($query)
				{
					return $query->row_array();
				}
				else
				{
					return false;
				}
			}
			public function division()
			{
				$query	= $this->db->get('nmis_division_tbl');
				if($query)
				{
					return $query->result();
				}
				else
				{
					return false;
				}
			}
			public function region()
			{
				$query	= $this->db->get('nmis_region_tbl');
				if($query)
				{
					return $query->result();
				}
				else
				{
					return false;
				}
			}
			public function addUserLogs($logs)
			{
				$query = $this->db->insert('nmis_user_logs',$logs);
				if($query)
				{
					return true;
				}
				else
				{
					return false;
				}
			}
			public function addAdminLogs($logs)
			{
				$query = $this->db->insert('nmis_admin_logs',$logs);
				if($query)
				{
					return true;
				}
				else
				{
					return false;
				}
			}

			public function addLogs($logs)
			{
				$query = $this->db->insert('nmis_system_logs',$logs);
				if($query)
				{
					return true;
				}
				else
				{
					return false;
				}
			}

			public function ShowLogs()
			{
				$query = $this->db->get('nmis_system_logs');
				if($query)
				{
					return $query->result();
				}
				else
				{
					return false;
				}
			}
			public function Adminlogs()
			{
				$query = $this->db->get('nmis_admin_logs');
				if($query)
				{
					return $query->result();
				}
				else
				{
					return false;
				}
			}
			public function Userlogs()
			{
				$query = $this->db->get('nmis_user_logs');
				if($query)
				{
					return $query->result();
				}
				else
				{
					return false;
				}
			}
			public function updateSettings($data,$id)
			{
				$query = $this->db->where('nmis_settings_tbl.id', $id)->update('nmis_settings_tbl',$data);
				if($query)
				{
					$this->session->set_flashdata('message','success_updated');
					return true;
				}
				else
				{
					return false;
				}
			}
			public function updateLogo($data,$id)
			{
				$query = $this->db->where('nmis_settings_tbl.id', $id)->update('nmis_settings_tbl',$data);
				if($query)
				{
					$this->session->set_flashdata('message','success_updated');
					return true;
				}
				else
				{
					return false;
				}
			}

}