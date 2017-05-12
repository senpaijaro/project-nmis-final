<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Requested_model extends CI_Model{


		public function Showrequest($id)
		{
			$query = $this->db->get_where('nmis_request_tbl', array('id'=>$id));
			if($query)
			{
				return $query->row_array();
			}
			else
			{
				return false;
			}
		}

		public function UpdatedRequest($id,$data)
		{
			$query = $this->db->where('nmis_request_tbl.id',$id)->update('nmis_request_tbl',$data);
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

		public function Showcompleted()
		{
			$query = $this->db->get_where('nmis_request_tbl', array('status'=>'Completed'));
			if($query)
			{
				return $query->result();
			}
			else
			{
				return false;
			}
		}
		public function Showcancelled()
		{
			$query = $this->db->get_where('nmis_request_tbl', array('status'=>'Cancelled'));
			if($query)
			{
				return $query->result();
			}
			else
			{
				return false;
			}
		}

}
