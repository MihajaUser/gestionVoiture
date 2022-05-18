<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class UsersMod extends CI_Model
{
    public  function Utilisateurs()
    {
        $query = $this->db->query('select * from UtilisateursVoitures');
        return $query->result_array();
    }

    public  function getChauffeurs()
    {
        $query = $this->db->query("select * from UtilisateursVoitures where statut='chauffeur'");
        return $query->result_array();
    }
    public function checkUsers($email,$mdp){
        $request="select * from UtilisateursVoitures where email = '" .$email."'  and mdp = '".$mdp."'";
        $query = $this->db->query($request);
        return $query->result_array();
    }
    
    public  function insert($data)
    {
        $this->db->insert("UtilisateursVoitures", $data);
    }
}