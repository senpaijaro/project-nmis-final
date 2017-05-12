<?php defined('BASEPATH') OR exit('No direct script access allowed');

		class User_model extends CI_Model{


		public function Addrequest($data)
		{
			$query = $this->db->insert('nmis_request_tbl',$data);
			if($query)
			{
				$this->session->set_flashdata('message','send');
				return $query;
			}
			else
			{
				return false;
			}
		}

		public function Showprocessing()
		{
			$query = $this->db->get_where('nmis_request_tbl', array('status'=>'Processing'));
			if($query)
			{
				return $query->result();
			}
			else
			{
				return false;
			}
		}

		public function Showrequest($id)
		{
			$query = $this->db->get_where('nmis_request_tbl', array('id'=>$id,'status'=>'Processing'));
			if($query)
			{
				return $query->row_array();
			}
			else
			{
				return false;
			}
		}
		

		public function Updaterequest($id,$data)
		{
			$query = $this->db->where('nmis_request_tbl.id',$id)->update('nmis_request_tbl',$data);
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


}
