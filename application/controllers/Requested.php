<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Requested extends CI_Controller{


		public function __construct()
		{
			parent::__construct();
			if(!isset($_SESSION['logged_in'])){
				redirect('auth');
			}
			$this->load->model('settings_model','model');
			$this->load->model('service_model','models');
			$this->load->model('user_model','modelss');
			$this->load->model('requested_model','modelsss');
			$this->load->helper('string');
			$this->load->helper('inflector');
			date_default_timezone_set('Asia/Manila');
		}
		public function index()
		{
			$settings = $this->model->Settings();
			extract($settings);
			$data['res'] = array(
								'title'  	=> $title_page,
								'nav_title' => $admin_page_title,
								'footer'    => $footer
								);
			$data['showprocess']  = $this->modelss->Showprocessing();
			$this->load->view('components/admin-header',$data);
			$this->load->view('admin/requested');
			$this->load->view('components/footer');
		}

		public function ShowRequested()
		{
			$id = $this->uri->segment(2);
			$data['showrequest'] = $this->modelsss->Showrequest($id);
			$settings = $this->model->Settings();
			extract($settings);
			$data['res'] = array(
								'title'  	=> $title_page,
								'nav_title' => $admin_page_title,
								'footer'    => $footer
								);
			$this->load->view('components/admin-header',$data);
			$this->load->view('admin/update-request');
			$this->load->view('components/footer');
		}
		public function Showcompleted()
		{
			$settings = $this->model->Settings();
			extract($settings);
			$data['res'] = array(
								'title'  	=> $title_page,
								'nav_title' => $admin_page_title,
								'footer'    => $footer
								);
			$data['showcompleted'] = $this->modelsss->Showcompleted();
			$this->load->view('components/admin-header',$data);
			$this->load->view('admin/completed');
			$this->load->view('components/footer');
		}
		public function ViewCompleteds()
		{
			$id = $this->uri->segment(2);
			$data['showrequest'] = $this->modelsss->Showrequest($id);
			$settings = $this->model->Settings();
			extract($settings);
			$data['res'] = array(
								'title'  	=> $title_page,
								'nav_title' => $admin_page_title,
								'footer'    => $footer
								);
			$this->load->view('components/admin-header',$data);
			$this->load->view('admin/complete-request');
			$this->load->view('components/footer');
		}
		public function Showcancelled()
		{
			$settings = $this->model->Settings();
			extract($settings); 
			$data['res'] = array(
								'title'  	=> $title_page,
								'nav_title' => $admin_page_title,
								'footer'    => $footer
								);
			$data['showcancelled'] = $this->modelsss->Showcancelled();
			$this->load->view('components/admin-header',$data);
			$this->load->view('admin/cancelled');
			$this->load->view('components/footer');
		}

		public function UpdatedRequest()
		{
			$status = $this->input->post('status');
			switch ($status) {
				case 'Completed':
						$action_reason = $this->input->post('action_taken');
					break;
				case 'Cancelled':
						$action_reason = $this->input->post('reason_cancelled');
					break;
				
				default:
					# code...
					break;
			}

			$data = array(
					'request_description' => $this->input->post('req_description'),
					'recommendation'	  => $this->input->post('recommendation'),
					'recommended_by'	  => $this->input->post('recommended_by'),
					'action_reason'		  => $action_reason,
					'updated_by'		  => $this->input->post('updated_by'),
					'status'		      => $status
					);
			$id = $this->input->post('id');
			$result = $this->modelsss->UpdatedRequest($id,$data);
			if($result)
			{
				$logs = array(
						'username'=> $_SESSION['fullname'],
						'date'    => date('Y-m-d'),
						'time'    => date(' g:i:A'),
						'action_details' =>  $this->input->post('fullname').' Updated here request'
					);
				$this->model->addLogs($logs);
				redirect('ShowRequested/'.$id,'refresh');
			}
			else
			{
				redirect('ShowRequested/'.$id,'refresh');
			}
		}

}	