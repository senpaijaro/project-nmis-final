<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Showadministrator extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		if(!isset($_SESSION['logged_in'])){
				redirect('auth');
		}
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
		$data['showadmin'] = $this->models->ShowAdministrator();
		$this->load->view('components/admin-header',$data);
		$this->load->view('admin/show-administrator');
		$this->load->view('components/footer');
	}

	public function addAdministrator()
	{
		$password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
		$gender = $this->input->post('gender');
		switch ($gender) {
			case 'Male':
			$image = base_url().'images/profile_default/male.jpg';
				break;
			case 'Female':
			$image = base_url().'images/profile_default/female.jpg';
				break;

			default:
				break;
		}
		$data = array(
					  'division' 	 => $this->input->post('division'),
					  'unit_section' => $this->input->post('unit'),
					  'firstname'    => $this->input->post('firstname'),
					  'lastname' 	 => $this->input->post('lastname'),
					  'gender'       => $gender,
					  'image'        => $image,
 					  'username' 	 => $this->input->post('username'),
 					  'email' 	 	 => $this->input->post('email'),
 					  'number' 	  	 => $this->input->post('number'),
					  'password'	 => $password,
					  'status'	     => 'Active',
					  'role'    	 => 0
					  );
		$data = $this->security->xss_clean($data);
		$result = $this->models->addAccounts($data);
		if($result)
		{
			$logs = array(
						'username'=>  $_SESSION['fullname'],
						'date'    => date('Y-m-d'),
						'time'    => date(' g:i:A'),
						'action_details' =>  $this->input->post('username').' Member Accounts Added'
					);
			$this->model->addLogs($logs);
			redirect('Showadministrator','refresh');
		}
		else
		{
			redirect('Showadministrator','refresh');
		}
	}

	public function ShowprofileAdmin(){
		$settings = $this->model->Settings();
		extract($settings);
		$data['res'] = array(
							'title'  	=> $title_page,
							'nav_title' => $admin_page_title,
							'footer'    => $footer
							);
		$id = $this->uri->segment(2);
		
		$data['showprofile'] = $this->models->ShowprofileAdmin($id);
		$data['divisions'] = $this->model->division();
		$this->load->view('components/admin-header',$data);
		$this->load->view('admin/show-profile-admin');
		$this->load->view('components/footer');
	}

	public function UpdateProfile()
	{
		$data = array(
					  'division' 	 => $this->input->post('division'),
					  'unit_section' => $this->input->post('unit'),
					  'firstname'    => $this->input->post('firstname'),
					  'lastname' 	 => $this->input->post('lastname'),
					  'gender'       => $this->input->post('gender'),
 					  'username' 	 => $this->input->post('username'),
 					  'email' 	 => $this->input->post('email'),
 					  'number' 	  	 => $this->input->post('number'),
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
			redirect('ShowprofileAdmin/'.$id,'refresh');
		}
		else
		{
			redirect('ShowprofileAdmin'.$id,'refresh');
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
			redirect('ShowprofileAdmin/'.$id,'refresh');
		}
		else
		{
			redirect('ShowprofileAdmin/'.$id,'refresh');
		}
	}

	public function updatePicture()
	{
		$config['upload_path']          = './images/';
	    $config['allowed_types']        = 'gif|jpg|png';
	    $config['max_size']             = 10000;
	    $config['max_width']            = 10000;
	    $config['max_height']           = 10000;

	    $this->load->library('upload', $config);

	    if ( ! $this->upload->do_upload('userfile'))
	    {
	            $id = $this->input->post('id');
	            $error = array('error' => $this->upload->display_errors());
	            $this->session->set_flashdata($error);
	            redirect('ShowProfileAdmin/'.$id.'','refresh');
	    }
	    else
	    {
	            $file = $this->upload->data();
	            $image = base_url().'images/'.$file['file_name'];
	            $data = array('image' => $image);
	            $id = $this->input->post('id');
	            $result = $this->models->updatePicture($id,$data);
	            if($result)
	            {
	            	$logs = array(
						'username'=>  $_SESSION['fullname'],
						'date'    => date('Y-m-d'),
						'time'    => date(' g:i:A'),
						'action_details' =>  $this->input->post('username').' Updated picture'
					);
					$this->model->addLogs($logs);
	            	redirect('ShowprofileAdmin/'.$id,'refresh');
	            }
	            else
	            {

	            	redirect('ShowprofileAdmin/'.$id,'refresh');
	            }
	     }
	}
	
	public function deactivate_admin($id)
	{
		$status = "Deactivate";
		$result = $this->models->deactivate_admin($status,$id);
		if($result)
		{
			redirect('ShowAdministrator', 'refresh');
		}
		else
		{
			redirect('ShowAdministrator', 'refresh');
		}
	}
}
