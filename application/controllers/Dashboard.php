<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		if(!isset($_SESSION['logged_in'])){
				redirect('auth');
		}
		$this->load->model('settings_model','model');
		$this->load->model('administrator_model','models');
		$this->load->model('Dashboard_model','modelsss');
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
		$data['allrequest'] = $this->modelsss->getAllRequestss();
		$data['count_user']= $this->modelsss->getCountactive();
		$data['count_admin']= $this->modelsss->getCountActiveAdmin();
		$data['deact_admin']= $this->modelsss->getCountDeacAdmin();
		$data['deact_user']= $this->modelsss->getCountDeacUser();
		$data['process']= $this->modelsss->getCountOnprocess();
		$data['cancelled']= $this->modelsss->getCountCancelled();
		$data['completed']= $this->modelsss->getCountCompleted();
		$this->load->view('components/admin-header',$data);
		$this->load->view('admin/dashboard');
		$this->load->view('components/footer');
	}
}