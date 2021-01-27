<?php
use Restserver\Libraries\REST_Controller;
/**
 *
 */
class Guest extends REST_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('guest_model');
  }

  public function guestslist_get()
  {
    $data = $this->guest_model->guestslist();
    $this->response(['guestList', $data],200);
  }
}

 ?>
