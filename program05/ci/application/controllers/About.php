<?php
defined('BASEPATH') OR exit ('No direct script access allowed');


class About extends CI_Controller {

  public function saya()
  {
    $this->load->view('about/tentang_saya');
  }

  public function kharisma()
  {
    $this->load->view('about/tentang_kharisma');
  }

  public function web()
  {
    $this->load->view('about/desain_web');
  }

  public function list()
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
