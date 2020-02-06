<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Language extends CI_Controller {

	public function english()
	{
		$this->session->set_userdata("language","english");
		redirect(base_url());
	}

	public function indonesian(){

		$this->session->set_userdata("language","indonesian");
		redirect(base_url());
	}

}
