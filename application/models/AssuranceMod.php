<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class AssuranceMod extends CI_Model
{
  public  function getAssurance($idVehicule)
  {
    $query = $this->db->query('select * from assurances');
    if ($idVehicule != '') {
      $query = $this->db->query("select * from assurances where id_voiture='" . $idVehicule . "'");
    }
    return $query->result_array();
  }

  public  function insert($data)
  {
    $this->db->insert("assurances", $data);
  }

  public  function update($data)
  {
    $this->db->where('id', $data['id']);
    $this->db->update('assurances', $data);
    print_r($this->db->last_query());    
  }
  public function supprimer($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('assurances');
  }
}
