<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class TrajetMod extends CI_Model
{
    public  function getTrajet()
    {
        $query = $this->db->query('select * from view_trajet');
        return $query->result_array();
    }
    public  function getTrajetVehicule($idVoiture)
    {
        $this->db->where(array('id_voiture' => $idVoiture));
        $query = $this->db->get('view_trajet');
        print_r($this->db->last_query());
        return $query->result_array();
    }

    public  function insert($data)
    {
        var_dump($data);
        echo("fais inserttrajet");
        $this->db->insert("trajets", $data);
        print_r($this->db->error());
        print_r($this->db->last_query());
    }
    public function supprimer($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('trajets');
    }
}
