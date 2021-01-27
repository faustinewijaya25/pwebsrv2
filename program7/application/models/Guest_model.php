<?php

/**
 *
 */
class Guest_model extends CI_model
{

  function __construct()
  {
    parent::__construct();
  }

  public function guestList( $where='' )
  {
    $this->db->select('guests.member_ID, members.nama, country.Country, guests.date_in, guests.date_out, guests.room');
    $this->db->join('members', 'guests.member_ID = members.member_ID');
    $this->db->join('country', 'members.negara = country.CC');
    if ( $where != '' )  $this->db->where( $where );
    $query = $this->db->get( 'guests' );
    return $query->result_array();
  }
}

 ?>
