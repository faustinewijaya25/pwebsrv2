<?php

/**
 *
 */
class Member_model extends CI_model
{

  function __construct()
  {
    parent::__construct();
  }

  public function memberlist()
  {
    $this->db->select('m.member_ID, m.nama, m.alamat, m.kota, m.kodepos, m.negara, m.telepon, m.hp');
    $this->db->from('members m');
    $this->db->join('country c', 'm.negara = c.CC');

    $query = $this->db->get();
    return $query->result();
  }
}

 ?>
