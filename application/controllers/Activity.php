<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Activity extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('activities_model');
		$this->load->helper('form');
	}

	function index()
	{
		$activity_data = $this->activities_model->get_all();
		$data['activity_data'] = $activity_data;

		$this->load->view('layout/head');
		$this->load->view('layout/menu');
		// $this->load->view('layout/header');
		$this->load->view('activity/content', $data);
		$this->load->view('layout/footer');
		$this->load->view('layout/foot');
	}

	function insert(){
		$this->load->view('layout/head');
		$this->load->view('layout/menu');
		$this->load->view('activity/insert/content');
		$this->load->view('layout/footer');
		$this->load->view('activity/insert/script');
		$this->load->view('layout/foot');
	}

	function save(){
		// var_dump($this->input->post());
		
		$this->load->library('form_validation');

		$this->form_validation->set_rules('activity_name', 'activity_name', 'required', 
											array('required'=> 'กรุณากรอกชื่อกิจกรรม'));

		// $activity_id = $this->input->post('activity_id');
		// $activity_name = $this->input->post('activity_name');
		// $start_date = $this->input->post('start_date');
		// $end_date = $this->input->post('end_date');

		if ($this->form_validation->run() == FALSE)
		{
				$this->insert();
		}
		else
		{
				$this->load->view('formsuccess');
		}
	}

	function update(){
		$this->load->view('layout/head');
		$this->load->view('layout/menu');
		$this->load->view('activity/update/content');
		$this->load->view('layout/footer');
		$this->load->view('layout/foot');
	}

	function delete(){
		$this->load->view('layout/head');
		$this->load->view('layout/menu');
		$this->load->view('activity/delete/content');
		$this->load->view('layout/footer');
		$this->load->view('layout/foot');
	}
}
