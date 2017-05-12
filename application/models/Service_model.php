<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Service_model extends CI_Model{


			public function ShowService()
			{
				$query = $this->db->get_where('nmis_service_tbl',array('status'=>'active'));
				if($query)
				{
					return $query->result();
				}
				else
				{
					return false;
				}
			}

			public function addService($data)
			{
				$check = $this->db->select('service')->from('nmis_service_tbl')->where(array('service'=> $data['service']))->get();
				if($check->num_rows() > 0)
				{
					$this->session->set_flashdata('message', 'exist');
					return $check;
				}
				else
				{
					$query = $this->db->insert('nmis_service_tbl',$data);
					$this->session->set_flashdata('message', 'added');
					return $query;
				}
			}
			public function updateService($data,$id)
			{
				$check = $this->db->select('service')->from('nmis_service_tbl')->where(array('service'=> $data['service']))->get();
				if($check->num_rows() > 0)
				{
					$this->session->set_flashdata('message', 'exist');
					return $check;
				}
				else
				{
					$query = $this->db->where('nmis_service_tbl.id',$id)->update('nmis_service_tbl',$data);
					$this->session->set_flashdata('message', 'success_updated');
					return $query;
				}
			}
			public function DeleteService($id)
			{
				$query = $this->db->where('nmis_service_tbl.id', $id)->delete('nmis_service_tbl');
				if($query)
				{
					$this->session->set_flashdata('message', 'deleted');
					return $query;
				}
				else
				{
					return false;
				}
			}
}