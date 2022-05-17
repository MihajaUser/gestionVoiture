<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ControllerUsers extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('UsersMod');
        $this->load->model('InfoMod');
    }
    public function pageLogin()
    {
        $data['page'] = 'login.php';
        $this->load->view('frontoffice/index', $data);
    }
    public function details($id, $titre, $description, $photo)
    {
        $informations = array('id' => $id, 'titre' => $titre, 'description' => $description, 'photo' => $photo);
        $data['information'] = $informations;
        $data['page'] = 'details.php';
        $this->load->view('frontoffice/index', $data);
    }
    public function accueille()
    {
        $data['informations'] =    $this->InfoMod->getInformation();
        $user =  $this->UsersMod->checkUsers($this->input->post('email'), sha1($this->input->post('mdp')));
        if (count($user) == 0) {
            $data['errorLogin'] = 1;
            $data['page'] = 'actualite.php';
            $this->load->view('frontoffice/index', $data);
        } else {
            $data['page'] = 'acceuille.php';
            $this->session->set_userdata('user', $user);
            $this->load->view('backoffice/template', $data);
        }
    }
}
