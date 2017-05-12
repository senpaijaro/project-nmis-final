<?php defined('BASEPATH') OR exit('No direct script access allowed');

		class Region_model extends CI_Model{

			public function addRegion($data)
			{
				$check = $this->db->select('region')->from('nmis_region_tbl')->where(array('region'=> $data['region']))->get();
				if($check->num_rows() > 0)
				{
					$this->session->set_flashdata('message', 'exist');
					return $check;
				}
				else
				{
					$query = $this->db->insert('nmis_region_tbl',$data);
					$this->session->set_flashdata('message', 'added');
					return $query;
				}
			}
			public function ShowRegion()
			{
				$query = $this->db->get_where('nmis_region_tbl',array('status'=>'active'));
				if($query)
				{
					return $query->result();
				}
				else
				{
					return false;
				}
			}
			public function DeleteRegion($id)
			{
				$query = $this->db->where('nmis_region_tbl.id', $id)->delete('nmis_region_tbl');
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
			public function updateRegion($data,$id)
			{
				$check = $this->db->select('region')->from('nmis_region_tbl')->where(array('region'=> $data['region']))->get();
				if($check->num_rows() > 0)
				{
					$this->session->set_flashdata('message', 'exist');
					return $check;
				}
				else
				{
					$query = $this->db->where('nmis_region_tbl.id',$id)->update('nmis_region_tbl',$data);
					$this->session->set_flashdata('message', 'success_updated');
					return $query;
				}
			}

}