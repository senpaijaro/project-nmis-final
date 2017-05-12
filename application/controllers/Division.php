<?php defined('BASEPATH') OR exit('No direct script access allowed');

		
		class Division extends CI_Controller{


		public function __construct()
		{
			parent::__construct();
			if(!isset($_SESSION['logged_in'])){
				redirect('auth');
			}
			$this->load->model('settings_model','model');
			$this->load->model('division_model','models');
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
			$data['showdivision']  = $this->models->ShowDivision();
			$this->load->view('components/admin-header',$data);
			$this->load->view('admin/show-division');
			$this->load->view('components/footer');
		}

		public function AddDivision()
		{
			$data = array(
					'division' => $this->input->post('division'),
					'status'  => 'active'
					);
			$data = $this->security->xss_clean($data);
			$result = $this->models->AddDivision($data);
			if($result)
			{
				$logs = array(
						'username'=> $_SESSION['fullname'],
						'date'    => date('Y-m-d'),
						'time'    => date(' g:i:A'),
						'action_details' =>  $this->input->post('division').' new added division'
					);
				$this->model->addLogs($logs);
				redirect('Division','refresh');
			}
			else
			{
				redirect('Division','refresh');
			}
		}
		public function updateDivision()
		{
			$data = array(
					'division' => $this->input->post('division')
					);
			$id   = $this->input->post('id');
			$data = $this->security->xss_clean($data);
			$result = $this->models->updateDivision($data,$id);
			if($result)
			{
				$logs = array(
						'username'=> $_SESSION['fullname'],
						'date'    => date('Y-m-d'),
						'time'    => date(' g:i:A'),
						'action_details' =>  $this->input->post('division').' updated division'
					);
				$this->model->addLogs($logs);
				redirect('Division','refresh');
			}
			else
			{
				redirect('Division','refresh');
			}
		}

		public function DeleteDivision($id)
		{
			$result = $this->models->DeleteDivision($id);
			if($result)
			{
				$logs = array(
						'username'=> $_SESSION['fullname'],
						'date'    => date('Y-m-d'),
						'time'    => date(' g:i:A'),
						'action_details' =>  'deleted region'
					);
				$this->model->addLogs($logs);
				redirect('Division','refresh');
			}
			else
			{
				redirect('Division','refresh');
			}
		}
}