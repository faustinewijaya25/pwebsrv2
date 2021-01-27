<?php

class Room_model extends CI_Model
 {
public $table_name = 'dok_standar';
public  function __construct()
{
    parent::__construct();
  }

  public function roomList($where = '')
  {
    //$sql ="SELECT rooms.room, roomtype.rtype, roomtype.rate, views.dview,
            //views.addv, rate+(rate*addv) frate FROM rooms INNER JOIN roomtype ON
            //(rooms.rtype = roomtype.kode) INNER JOIN views ON (rooms.dview = views.vcode)";

    $this->db->select('rooms.room, roomtype.rtype, roomtype.rate, views.dview, views.addv, rate+(rate*addv) frate, guests.date_in, guests.date_out');
    $this->db->join('roomtype','rooms.rtype = roomtype.kode');
    $this->db->join('views','rooms.dview = views.vcode');
    $this->db->join('guests ', 'rooms.room=guests.room');
    //$this->db->where("room LIKE '12__%'");
    if( $where != '' ) $this->db->where( $where );
    $query = $this->db->get( 'rooms' );
    return $query->result_array();
  }
}
