<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Showuser extends CI_Controller {

		public function __construct()
		{
			if(!isset($_SESSION['logged_in'])){
				redirect('auth');
			}
			parent::__construct();
			$this->load->model('settings_model','model');
			$this->load->model('administrator_model','models');
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
			$data['division'] = $this->model->division();
			$data['region'] = $this->model->region();
			$data['showuser'] = $this->models->Showuser();
			$this->load->view('components/admin-header',$data);
			$this->load->view('admin/show-user');
			$this->load->view('components/footer');
		}

	public function Showprofileuser(){
		$settings = $this->model->Settings();
		extract($settings);
		$data['res'] = array(
							'title'  	=> $title_page,
							'nav_title' => $admin_page_title,
							'footer'    => $footer
							);
		$id = $this->uri->segment(2);
		$data['division'] = $this->model->division();
		$data['regions'] = $this->model->region();
		$data['showprofile'] = $this->models->ShowprofileAdmin($id);
		$data['divisions'] = $this->model->division();
		$this->load->view('components/admin-header',$data);
		$this->load->view('admin/show-profile-user');
		$this->load->view('components/footer');
	}

	public function addUser()
	{
		$password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
		$data = array(
					  'region' 	 => $this->input->post('region'),
					  'division' 	 => $this->input->post('division'),
					  'unit_section' => $this->input->post('unit'),
					  'firstname'    => $this->input->post('firstname'),
					  'lastname' 	 => $this->input->post('lastname'),
 					  'username' 	 => $this->input->post('username'),
					  'password'	 => $password,
					  'status'	     => 'Active',
					  'role'    	 => 1
					  );
		$data = $this->security->xss_clean($data);
		$result = $this->models->addAccounts($data);
		if($result)
		{
			$logs = array(
						'username'=>  $_SESSION['fullname'],
						'date'    => date('Y-m-d'),
						'time'    => date(' g:i:A'),
						'action_details' =>  $this->input->post('username').' User Accounts Added'
					);
			$this->model->addLogs($logs);
			redirect('Showuser','refresh');
		}
		else
		{
			redirect('Showuser','refresh');
		}
	}

	public function UpdateProfile()
	{
		$data = array(
					  'region' 	 => $this->input->post('region'),
					  'division' 	 => $this->input->post('division'),
					  'unit_section' => $this->input->post('unit'),
					  'firstname'    => $this->input->post('firstname'),
					  'lastname' 	 => $this->input->post('lastname'),
 					  'username' 	 => $this->input->post('username'),
					  );
		$id  = $this->input->post('id');
		$data = $this->security->xss_clean($data);
		$result = $this->models->UpdateProfile($id,$data);
		if($result)
		{
			$logs = array(
						'username'=>  $_SESSION['fullname'],
						'date'    => date('Y-m-d'),
						'time'    => date(' g:i:A'),
						'action_details' =>  $this->input->post('username').' Member Accounts Updated'
					);
			$this->model->addLogs($logs);
			redirect('Showprofileuser/'.$id,'refresh');
		}
		else
		{
			redirect('Showprofileuser'.$id,'refresh');
		}
	}
	public function changepassword()
	{
		$password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
		$data = array('password'=>$password);
		$id   = $this->input->post('id');
		$data = $this->security->xss_clean($data);
		$result = $this->models->changepassword($id,$data);
		if($result)
		{
			$logs = array(
						'username'=>  $_SESSION['fullname'],
						'date'    => date('Y-m-d'),
						'time'    => date(' g:i:A'),
						'action_details' =>  $this->input->post('username').' Updated password'
					);
			$this->model->addLogs($logs);
			redirect('Showprofileuser/'.$id,'refresh');
		}
		else
		{
			redirect('Showprofileuser/'.$id,'refresh');
		}
	}


}