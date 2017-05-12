<?php defined('BASEPATH') OR exit('No direct script access allowed');

		class Division_model extends CI_Model{


		public function AddDivision($data)
			{
				$check = $this->db->select('division')->from('nmis_division_tbl')->where(array('division'=> $data['division']))->get();
				if($check->num_rows() > 0)
				{
					$this->session->set_flashdata('message', 'exist');
					return $check;
				}
				else
				{
					$query = $this->db->insert('nmis_division_tbl',$data);
					$this->session->set_flashdata('message', 'added');
					return $query;
				}
			}
			public function ShowDivision()
			{
				$query = $this->db->get_where('nmis_division_tbl',array('status'=>'active'));
				if($query)
				{
					return $query->result();
				}
				else
				{
					return false;
				}
			}
			public function updateDivision($data,$id)
			{
				$check = $this->db->select('division')->from('nmis_division_tbl')->where(array('division'=> $data['division']))->get();
				if($check->num_rows() > 0)
				{
					$this->session->set_flashdata('message', 'exist');
					return $check;
				}
				else
				{
					$query = $this->db->where('nmis_division_tbl.id',$id)->update('nmis_division_tbl',$data);
					$this->session->set_flashdata('message', 'success_updated');
					return $query;
				}
			}

			public function DeleteDivision($id)
			{
				$query = $this->db->where('nmis_division_tbl.id', $id)->delete('nmis_division_tbl');
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