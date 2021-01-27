<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Resep extends CI_Controller {

	public function index()
	{
		$this->load->view('resep/list');
	}

  public function pallubasa()
  {
    $this->load->view('resep/pallubasa');
  }

  public function papedatelorayam()
  {
    $this->load->view('resep/papedatelorayam');
  }

  public function rawonsurabaya()
  {
    $this->load->view('resep/rawonsurabaya');
  }

  public function satelilitayamkhasbali()
  {
    $this->load->view('resep/satelilitayamkhasbali');
  }

  public function seblakbandung()
  {
    $this->load->view('resep/seblakbandung');
  }
}
  ?>
