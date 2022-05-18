<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class VisiteMod extends CI_Model
{
  public  function getVisite($idVehicule)
  {
    $query = $this->db->query('select * from visiteTechniques');
    if ($idVehicule != '') {
      $query = $this->db->query("select * from visiteTechniques where id_voiture='" . $idVehicule . "'");
    }
    return $query->result_array();
  }

  public  function insert($data)
  {
    $this->db->insert("visiteTechniques", $data);
    print_r($this->db->last_query());    
  }

  public  function update($data)
  {
    $this->db->where('id', $data['id']);
    $this->db->update('visiteTechniques', $data);
    print_r($this->db->last_query());    
  }
  public function supprimer($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('visiteTechniques');
  }
}
