<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_model extends CI_Model {

			public function getCountactive()
			{
			$this->db->where(array('status'=>'Active','role'=>'1') );
			return $this->db->count_all_results('nmis_accounts_tbl');
			}
			public function getCountActiveAdmin()
			{
			$this->db->where(array('status'=>'Active','role'=>'0') );
			return $this->db->count_all_results('nmis_accounts_tbl');
			}
			public function getCountDeacAdmin()
			{
			$this->db->where(array('status'=>'Deactivate','role'=>'0') );
			return $this->db->count_all_results('nmis_accounts_tbl');
			}
			public function getCountDeacUser()
			{
			$this->db->where(array('status'=>'Deactivate','role'=>'1') );
			return $this->db->count_all_results('nmis_accounts_tbl');
			}
			public function getCountOnprocess()
			{
			$this->db->where(array('status'=>'Processing'));
			return $this->db->count_all_results('nmis_request_tbl');
			}
			public function getCountCancelled()
			{
			$this->db->where(array('status'=>'Cancelled'));
			return $this->db->count_all_results('nmis_request_tbl');
			}
			public function getCountCompleted()
			{
			$this->db->where(array('status'=>'Completed'));
			return $this->db->count_all_results('nmis_request_tbl');
			}
			public function getCountDeactivate()
			{
			$this->db->where('status', 'Deactivate');
			return $this->db->count_all_results('nmis_accounts_tbl');
			}
			
			public function getAllRequestss()
			{
				$query = $this->db->order_by('id','desc')->get_where('nmis_request_tbl', array('status'=>'Processing'));
				if($query->num_rows() > 0)
				{
					return $query->result();
				}
				else
				{
					return false;
				}
			}

}