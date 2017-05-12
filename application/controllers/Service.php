<?php defined('BASEPATH') OR exit('No direct script access allowed');

		
		class Service extends CI_Controller{


		public function __construct()
		{
			parent::__construct();
			if(!isset($_SESSION['logged_in'])){
				redirect('auth');
			}
			$this->load->model('settings_model','model');
			$this->load->model('Service_model','models');
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
			$data['showservice']  = $this->models->ShowService();
			$this->load->view('components/admin-header',$data);
			$this->load->view('admin/show-service');
			$this->load->view('components/footer');
		}

		public function addService()
		{
			$data = array(
					'service' => $this->input->post('service'),
					'status'  => 'active'
					);
			$data = $this->security->xss_clean($data);
			$result = $this->models->addService($data);
			if($result)
			{
				$logs = array(
						'username'=> $_SESSION['fullname'],
						'date'    => date('Y-m-d'),
						'time'    => date(' g:i:A'),
						'action_details' =>  $this->input->post('service').' new added service'
					);
				$this->model->addLogs($logs);
				redirect('Service','refresh');
			}
			else
			{
				redirect('Service','refresh');
			}
		}
		public function updateService()
		{
			$data = array(
					'service' => $this->input->post('service')
					);
			$data = $this->security->xss_clean($data);
			$id = $this->input->post('id');
			$result = $this->models->updateService($data,$id);
			if($result)
			{
				$logs = array(
						'username'=>  $_SESSION['fullname'],
						'date'    => date('Y-m-d'),
						'time'    => date(' g:i:A'),
						'action_details' =>  $this->input->post('service').'  updated service'
					);
				$this->model->addLogs($logs);
				redirect('Service','refresh');
			}
			else
			{
				redirect('Service','refresh');
			}
		}

		public function DeleteService($id)
		{
			$result = $this->models->DeleteService($id);
			if($result)
			{
				$logs = array(
						'username'=>  $_SESSION['fullname'],
						'date'    => date('Y-m-d'),
						'time'    => date(' g:i:A'),
						'action_details' =>  'deleted service'
					);
				$this->model->addLogs($logs);
				redirect('Service','refresh');
			}
			else
			{
				redirect('Service','refresh');
			}
		}

}
