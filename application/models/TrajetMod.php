<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class TrajetMod extends CI_Model
{
    public  function getTrajet()
    {
        $query = $this->db->query('select * from view_trajet');
        return $query->result_array();
    }

    public  function insert($data)
    {
        $this->db->insert("trajets", $data);
    }
    public function supprimer($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('trajets');
    }
}
