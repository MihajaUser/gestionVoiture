<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class VehiculeMod extends CI_Model
{
    public  function getVehicule($id)
    {
        $query = $this->db->query('select * from view_vehicule_papiers');
        if ($id != '') {
            $query = $this->db->query("select * from view_vehicule_papiers where id='" . $id . "'");
        }
        return $query->result_array();
    }

    public  function getVehiculeDisponible($id)
    {   
        $this->db->where(array('disponible' => true,'assurance_reste_jour >'=>0,'visiteTechniques_reste_jour>'=>0));
        if ($id != '') {
            $this->db->where('id', $id);
        }
        $query = $this->db->get('view_vehicule_papiers');
        print_r($this->db->last_query());
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
