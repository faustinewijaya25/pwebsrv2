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

  public function guestslist()
  {
    $this->db->select('g.member_ID, g.date_in, g.date_out, g.room, m.nama, m.alamat, m.kota, m.kodepos, m.negara, m.telepon, m.hp');
      $this->db->from('guests g');
      $this->db->join('members m', 'g.member_ID = m.member_ID');
      $this->db->join('country c','m.negara = c.CC');
      $this->db->where('date_out IS NULL');

      $query = $this->db->get();
      return $query->result();
  }
}

 ?>
