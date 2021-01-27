<?php

/**
 *
 */
class Members_model extends CI_model
{

  function __construct()
  {
    parent::__construct();
  }

  public function memberlist( $where='' )
  {
    $this->db->select('members.member_ID, members.nama, country.Country, members.kota, members.alamat');
    $this->db->join('country', 'members.negara = country.CC');
    if ( $where != '' )  $this->db->where( $where );
    $query = $this->db->get( 'members' );
    return $query->result_array();
  }
}

 ?>
