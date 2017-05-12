<?php defined('BASEPATH') OR exit('No direct script access allowed');

		
		class Region extends CI_Controller{


		public function __construct()
		{
			parent::__construct();
			if(!isset($_SESSION['logged_in'])){
				redirect('auth');
			}
			$this->load->model('settings_model','model');
			$this->load->model('region_model','models');
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
			$data['showregion']  = $this->models->ShowRegion();
			$this->load->view('components/admin-header',$data);
			$this->load->view('admin/show-region');
			$this->load->view('components/footer');
		}

		public function addRegion()
		{
			$data = array(
					'region' => $this->input->post('region'),
					'status'  => 'active'
					);
			$data = $this->security->xss_clean($data);
			$result = $this->models->addRegion($data);
			if($result)
			{
				$logs = array(
						'username'=> $_SESSION['fullname'],
						'date'    => date('Y-m-d'),
						'time'    => date(' g:i:A'),
						'action_details' =>  $this->input->post('region').' new added region'
					);
				$this->model->addLogs($logs);
				redirect('Region','refresh');
			}
			else
			{
				redirect('Region','refresh');
			}
		}
		public function updateRegion()
		{
			$data = array(
					'region' => $this->input->post('region')
					);
			$id   = $this->input->post('id');
			$data = $this->security->xss_clean($data);
			$result = $this->models->updateRegion($data,$id);
			if($result)
			{
				$logs = array(
						'username'=> $_SESSION['fullname'],
						'date'    => date('Y-m-d'),
						'time'    => date(' g:i:A'),
						'action_details' =>  $this->input->post('region').' updated region'
					);
				$this->model->addLogs($logs);
				redirect('Region','refresh');
			}
			else
			{
				redirect('Region','refresh');
			}
		}

		public function DeleteRegion($id)
		{
			$result = $this->models->DeleteRegion($id);
			if($result)
			{
				$logs = array(
						'username'=> $_SESSION['fullname'],
						'date'    => date('Y-m-d'),
						'time'    => date(' g:i:A'),
						'action_details' =>  'deleted division'
					);
				$this->model->addLogs($logs);
				redirect('Region','refresh');
			}
			else
			{
				redirect('Region','refresh');
			}
		}


}