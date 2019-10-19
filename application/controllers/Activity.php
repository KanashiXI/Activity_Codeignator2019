<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Activity extends CI_Controller {

	function index()
	{
		$this->load->view('layout/head');
		$this->load->view('layout/menu');
		// $this->load->view('layout/header');
		$this->load->view('activity/content');
		$this->load->view('layout/footer');
		$this->load->view('layout/foot');
	}

	function insert(){
		$this->load->view('layout/head');
		$this->load->view('layout/menu');
		$this->load->view('activity/insert/content');
		$this->load->view('layout/footer');
		$this->load->view('layout/foot');
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
