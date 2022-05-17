<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ControllerUsers extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('UsersMod');
    }
    public function pageLogin()
    {
        $data['page'] = 'login.php';
        $this->load->view('frontoffice/index', $data);
    }
  
    public function accueille()
    { 
        $user =  $this->UsersMod->checkUsers($this->input->post('email'), sha1($this->input->post('mdp')));
        if (count($user) == 0) {
            $data['errorLogin'] = 1;
            $this->load->view('frontoffice/index', $data);
        } else {
            $data['page'] = 'acceuille.php';
            $this->session->set_userdata('user', $user);
            $this->load->view('backoffice/template', $data);
        }
    }
}
