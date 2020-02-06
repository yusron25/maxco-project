<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){

		parent::__construct();

		if( !$this->session->has_userdata('language') ){
			$this->session->set_userdata('language','english');
		}
		
		$this->lang->load('navbar',$this->session->userdata('language') );
	}

	public function index()
	{
		$data['body'] = "home/home_v";
		$this->load->view('template',$data);
	}
}
