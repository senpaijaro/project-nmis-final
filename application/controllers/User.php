<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class User extends CI_Controller{


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
			$this->load->model('administrator_model','contact');
			$this->load->helper('string');
			$this->load->helper('inflector');
			date_default_timezone_set('Asia/Manila');
		}

		public function home()
		{
			$settings = $this->model->Settings();
			extract($settings);
			$data['res'] = array(
								'title'  	=> $title_page,
								'home_page_title' => $home_page_title,
								'footer'    => $footer
								);
			$data['showservice']  = $this->models->ShowService();
			$this->load->view('components/member-header',$data);
			$this->load->view('member/home');
			$this->load->view('components/footer');
		}
		public function contact()
		{
			$settings = $this->model->Settings();
			extract($settings);
			$data['res'] = array(
								'title'  	=> $title_page,
								'home_page_title' => $home_page_title,
								'footer'    => $footer
								);
			$data['showadmin'] = $this->contact->ShowAdministrator();
			$this->load->view('components/member-header',$data);
			$this->load->view('member/contact');
			$this->load->view('components/footer');
		}
		public function processing()
		{
			$settings = $this->model->Settings();
			extract($settings);
			$data['res'] = array(
								'title'  	=> $title_page,
								'home_page_title' => $home_page_title,
								'footer'    => $footer
								);
			$data['showprocess']  = $this->modelss->Showprocessing();
			$this->load->view('components/member-header',$data);
			$this->load->view('member/processing');
			$this->load->view('components/footer');
		}
		public function Showrequest()
		{
			$id = $this->uri->segment(2);
			$data['showrequest'] = $this->modelss->Showrequest($id);
			$settings = $this->model->Settings();
			extract($settings);
			$data['res'] = array(
								'title'  	=> $title_page,
								'home_page_title' => $home_page_title,
								'footer'    => $footer
								);
			$data['showservice']  = $this->models->ShowService();
			$this->load->view('components/member-header',$data);
			$this->load->view('member/update-request');
			$this->load->view('components/footer');
		}
		public function Addrequest()
		{
			$data = array(
					'req_date' 		=> date('Y-m-d'),
					'req_number' 	=> $this->input->post('req_number'),
					'region' 	    => $this->input->post('region'),
					'division' 		=> $this->input->post('division'),
					'unit' 			=> $this->input->post('unit'),
					'client_name' 	=> humanize($this->input->post('client_name')),
					'required_date' => $this->input->post('required_date'),
					'type_request' 	=> $this->input->post('type_request'),
					'specify' 		=> $this->input->post('specify'),
					'detailed_desc' => $this->input->post('detailed_desc'),
					'status' 		=> 'Processing'
				);
			$result = $this->modelss->Addrequest($data);
			if($result)
			{
				redirect('home','refresh');
			}
			else
			{
				redirect('home','refresh');
			}
		}
		public function Updaterequest()
		{
			$data = array(
					'client_name' 	=> humanize($this->input->post('client_name')),
					'required_date' => $this->input->post('required_date'),
					'type_request' 	=> $this->input->post('type_request'),
					'detailed_desc' => $this->input->post('detailed_desc')
				);
			$id = $this->input->post('id');
			$result = $this->modelss->Updaterequest($id,$data);
			if($result)
			{
				redirect('Showrequest/'.$id,'refresh');
			}
			else
			{
				redirect('home/'.$id,'refresh');
			}
		}
		public function Completed()
		{
			$settings = $this->model->Settings();
			extract($settings);
			$data['res'] = array(
								'title'  	=> $title_page,
								'home_page_title' => $home_page_title,
								'footer'    => $footer
								);
			$data['showcompleted'] = $this->modelsss->Showcompleted();
			$this->load->view('components/member-header',$data);
			$this->load->view('member/completed');
			$this->load->view('components/footer');
		}
		public function ViewCompleted()
		{
			$id = $this->uri->segment(2);
			$data['showrequest'] = $this->modelsss->Showrequest($id);
			$settings = $this->model->Settings();
			extract($settings);
			$data['res'] = array(
								'title'  	=> $title_page,
								'home_page_title' => $home_page_title,
								'footer'    => $footer
								);
			$this->load->view('components/member-header',$data);
			$this->load->view('member/view-completed');
			$this->load->view('components/footer');
		}
		public function Cancelled()
		{
			$settings = $this->model->Settings();
			extract($settings);
			$data['res'] = array(
								'title'  	=> $title_page,
								'home_page_title' => $home_page_title,
								'footer'    => $footer
								);
			$data['showcancelled'] = $this->modelsss->Showcancelled();
			$this->load->view('components/member-header',$data);
			$this->load->view('member/cancelled');
			$this->load->view('components/footer');
		}
		public function ViewCancelled()
		{
			$id = $this->uri->segment(2);
			$data['showrequest'] = $this->modelsss->Showrequest($id);
			$settings = $this->model->Settings();
			extract($settings);
			$data['res'] = array(
								'title'  	=> $title_page,
								'home_page_title' => $home_page_title,
								'footer'    => $footer
								);
			$this->load->view('components/member-header',$data);
			$this->load->view('member/view-cancelled');
			$this->load->view('components/footer');
		}

		

}