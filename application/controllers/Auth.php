<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Auth extends CI_Controller {


		public function __construct()
		{
			
			parent::__construct();
			$this->load->model('settings_model','model');
			$this->load->model('login_model','models');
			date_default_timezone_set('Asia/Manila');
		}
		public function index()
		{
			$settings = $this->model->Settings();
			extract($settings);
			$data['res'] = array(
								'login_logo'=> $login_logo,
								'title'  	=> $title_page,
								'nav_title' => $admin_page_title,
								'footer'    => $footer
								);
			$this->load->view('login',$data);
		}

		public function login()
		{
			$this->form_validation->set_rules('username', 'Username', 'trim|required|max_length[20]|min_length[5]|xss_clean');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|max_length[20]|min_length[5]|xss_clean');
			
			if ($this->form_validation->run() == false) {
				
				$data = array('errors'=>validation_errors(' <i class="fa fa-remove"></i> '));
				$this->session->set_flashdata($data);
				redirect('Auth');
				
			}
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$data = $this->security->xss_clean($username,$password);
			$user_login = $this->models->login($username,$password);

			if($user_login)
			{
				$id 	= $this->models->GetId($username);
				$row 	= $this->models->GetUserInformation($id);
				$role 	= $row->role;
				$username = $row->username;
				$image 	  = $row->image;
				$division = $row->division;
				$region   = $row->region;
				$unit     = $row->unit_section;
				$fullname = $row->firstname.' '.$row->lastname;
				$logindata  = array(
					'session_id' => $id,
					'role'    => $role,
					'username'=>$username,
					'fullname'=>$fullname, 
					'image'   =>$image, 
					'division'=>$division,
					'region'  =>$region,
					'unit'    =>$unit,
					'logged_in' => TRUE);
				switch ($role) 
				{
					case 0:
					$this->session->set_userdata($logindata);
					$logs = array(
						'date'    => date('Y-m-d'),
						'time'    => date(' g:i:A'),
						'details' =>  $this->input->post('username').' successfully login'
					);
					$this->model->addAdminLogs($logs);
					redirect('Dashboard','refresh');
					break;
					case 1:
					$logs = array(
						'date'    => date('Y-m-d'),
						'time'    => date(' g:i:A'),
						'details' =>  $this->input->post('username').' successfully login'
					);
					$this->model->addUserLogs($logs);
					$this->session->set_userdata($logindata);
					redirect('home','refresh');
					break;
				}
			}
			else
			{
					$this->session->set_flashdata("error","Invalid password and username");
					redirect("auth","refresh");
			}
		}

		public function logout()
		{
			unset($_SESSION['logged_in']);
			unset($_SESSION['session_id']);
			unset($_SESSION['role']);
			unset($_SESSION['username']);
			unset($_SESSION['division']);
			unset($_SESSION['region']);
			unset($_SESSION['unit']);
			redirect('auth','refresh');
		}

}