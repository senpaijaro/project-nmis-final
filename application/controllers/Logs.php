<?php defined('BASEPATH') OR exit('No direct script access allowed');

		
		class Logs extends CI_Controller{


			public function __construct(){
				parent::__construct();
				if(!isset($_SESSION['logged_in'])){
				redirect('auth');
				}
				$this->load->model('settings_model','model');
				$this->load->model('administrator_model','models');
			}
			public function ShowLogs()
			{
				$settings = $this->model->Settings();
				extract($settings);
				$data['res'] = array(
									'title'  	=> $title_page,
									'nav_title' => $admin_page_title,
									'footer'    => $footer
									);
				$data['showlogs']  = $this->model->ShowLogs();
				$this->load->view('components/admin-header',$data);
				$this->load->view('admin/show-system-logs');
				$this->load->view('components/footer');
			}

			public function Adminlogs()
			{
				$settings = $this->model->Settings();
				extract($settings);
				$data['res'] = array(
									'title'  	=> $title_page,
									'nav_title' => $admin_page_title,
									'footer'    => $footer
									);
				$data['adminlogs']  = $this->model->Adminlogs();
				$this->load->view('components/admin-header',$data);
				$this->load->view('admin/admin-logs');
				$this->load->view('components/footer');
			}

			public function Userlogs()
			{
				$settings = $this->model->Settings();
				extract($settings);
				$data['res'] = array(
									'title'  	=> $title_page,
									'nav_title' => $admin_page_title,
									'footer'    => $footer
									);
				$data['userlogs']  = $this->model->Userlogs();
				$this->load->view('components/admin-header',$data);
				$this->load->view('admin/user-logs');
				$this->load->view('components/footer');
			}

}