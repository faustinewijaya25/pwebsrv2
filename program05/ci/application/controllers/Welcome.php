<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}
	// public function web()
  // {
  //   $this->load->view('about/desain_web');
  // }

	public function pweb()
	{
		$this->load->view('hellopweb');
	}

}
