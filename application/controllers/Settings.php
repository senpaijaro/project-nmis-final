<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Settings extends CI_Controller {

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
			$data['showsettings'] = $this->model->Settings();
			$this->load->view('components/admin-header',$data);
			$this->load->view('admin/website-settings');
			$this->load->view('components/footer');
		}

		public function updateSettings()
		{
			$data = array(
				'title_page'	   => $this->input->post('title_page'),
				'home_page_title'  => $this->input->post('home_page_title'),
				'admin_page_title' => $this->input->post('admin_page_title'),
				'footer' 		   => $this->input->post('footer')
				);
			$id = $this->input->post('id');
			$data = $this->security->xss_clean($data);
			$result = $this->model->updateSettings($data,$id);
			if($result)
			{
				$logs = array(
						'username'=>  $_SESSION['fullname'],
						'date'    => date('Y-m-d'),
						'time'    => date(' g:i:A'),
						'action_details' =>  'Website updated settings'
				);
				$this->model->addLogs($logs);
				redirect('Settings','refresh');
			}
			else
			{
				redirect('Settings','refresh');
			}
		}
		public function updateLogo()
			{
			    $config['upload_path']          = './images/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 10000;
                $config['max_width']            = 10000;
                $config['max_height']           = 10000;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('errors' => $this->upload->display_errors());
                        $this->session->set_flashdata($error);
                        redirect('WebsiteSettings','refresh');
                }
                else
                {
                        $file = $this->upload->data();
                        $image = base_url().'images/'.$file['file_name'];
                        $data = array('login_logo' => $image);
                        $id = $this->input->post('id');
                        $result = $this->model->updateLogo($data,$id);
                        if($result)
                        {
                    	$logs = array(
						'username'=>  $_SESSION['fullname'],
						'date'    => date('Y-m-d'),
						'time'    => date(' g:i:A'),
						'action_details' =>  'Update logo login website'
						);
						$this->model->addLogs($logs);
                        	redirect('Settings','refresh');
                        }
                        else
                        {
                        	redirect('Settings','refresh');
                        }
                 }
			}

}