<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class UsersMod extends CI_Model
{
    public  function Utilisateurs()
    {
        $query = $this->db->query('select * from admin');
        return $query->result_array();
    }

    public function checkUsers($email,$mdp){
        $request="select * from admin where email = '" .$email."'  and mdp = '".$mdp."'";
        $query = $this->db->query($request);
        return $query->result_array();
    }

    public  function insert($data)
    {
        $this->db->insert("admin", $data);
    }
}