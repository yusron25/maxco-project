<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	public function index(){
		echo $_SESSION['language'];
	}

	public function ubahsession(){

		$d = date('H-i-s')
		session_start();();
		$_SESSION['nativ'] = $d;

		$this->session->set_userdata('ci__' ,$d);
		
	}

	public function vsess(){
		session_start();
		echo json_encode($_SESSION);
	}


}
