<?php
/**
 *
 */
class Member extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('members_model');
  }

  public function memberlist( $negara = '' )
  {
    if ($negara == '') {
      $where = '';
    }
    else {
      $where = "CC LIKE '".$negara."' " ;
    }
    $data['judul'] = "PWEB Hotel - Member List";
    $data['members'] = $this->members_model->memberList( $where );
    $this->load->view('layout/header.php');
    $this->load->view('memberlist', $data);
    $this->load->view('layout/footer.php');
  }
}
