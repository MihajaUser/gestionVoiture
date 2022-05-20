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
        $this->load->view('frontoffice/template', $data);
    }
    public function pageSignUp()
    {
        $data['page'] = 'signUp.php';
        $this->load->view('frontoffice/template', $data);
    }

    public function signUp()
    {
        $this->pageLogin();
    }
    public function  deconnexion(){
        $this->pageLogin();
    }
    public function vehicule()
    {
        $user =  $this->UsersMod->checkUsers($this->input->post('email'), sha1($this->input->post('mdp')));
        if (count($user) == 0) {
            $data['errorLogin'] = 1;
            $data['page'] = 'login.php';    
            $this->load->view('frontoffice/template', $data);
        } else {
            $this->load->model('VehiculeMod');
            $data['vehicules'] = $this->VehiculeMod->getVehicule("");
            $data['page'] = 'vehicule.php';
            $this->session->set_userdata('user', $user);
            $this->load->view('backoffice/template', $data);
        }
    }
}
