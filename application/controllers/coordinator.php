<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coordinator extends CI_Controller {	

	public function dashboard()
	{	
		$this->load->view('dashboard');
	}

	public function pro()
	{	
		$this->load->view('dashboard');
	}

}
