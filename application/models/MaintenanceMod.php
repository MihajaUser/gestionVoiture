<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class MaintenanceMod extends CI_Model
{
    public  function getMaintenance($id)
    {
        $query = $this->db->query('select * from view_maintenance');
        if ($id != '') {
            $query = $this->db->query("select * from view_maintenance where id='" . $id . "'");
        }
        return $query->result_array();
    }

    public function getObjectsMaintance(){
        $query = $this->db->get('objetsMaintenance');
        return $query->result_array();
    }

    public  function insert($data)
    {
        $this->db->insert("maintenances", $data);
    }
    public function supprimer($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('maintenances');
    }
}
