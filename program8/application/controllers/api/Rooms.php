<?php
use Restserver\Libraries\REST_Controller;

/**
*
*/
class Rooms extends REST_Controller
{
  function __construct()
  {
    parent::__construct();
    $this->load->model('room_model');
  }
  public function roomrate_get()
  {
    $data = $this->room_model->roomrate();
    $this->response( [ 'rates' => $data ], 200 );
  }
  public function roomcountbytype_get()
  {
    $data = $this->room_model->roomcount();
    $this->response( [ 'rooms' => $data ], 200 );
  }
  public function roomlist_get()
  {
    $where = '';
    if(null !== $this->get('lt')){
      $lantai = $this->get('lt');
      $where = "r.room LIKE'" . $lantai . "__%'";
    }

    $data = $this->room_model->roomlist();
    $this->response( [ 'rooms' => $data ], 200 );
  }
  public function roomview_get()
  {
    $data = $this->room_model->roomview();
    $this->response( [ 'rooms' => $data ], 200 );
  }
  public function roomvrate_get()
  {
    $data = $this->room_model->roomvrate();
    $this->response( [ 'rooms' => $data ], 200 );
  }
}
?>
