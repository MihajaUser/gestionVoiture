<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class VehiculeMod extends CI_Model
{
    public  function getVehicule($id)
    {
         $query = $this->db->query('select * from view_vehicule_papiers');
        if ($id != '') {
            $query = $this->db->query("select * from view_vehicule_papiers where id='".$id."'");
        }
        return $query->result_array();
    }

    public  function insert($data)
    {
        $this->db->insert("vehicules", $data);
    }
    public function supprimer($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('vehicules');
    }
}
