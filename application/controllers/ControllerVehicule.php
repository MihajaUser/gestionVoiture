<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ControllerVehicule extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('UsersMod');
        $this->load->model('VehiculeMod');
    }

    public function liste()
    {
        $data['vehicules'] = $this->VehiculeMod->getVehicule("");
        $data['page'] = 'vehicule.php';
        $this->load->view('backoffice/template', $data);
    }

    public function pageAjout()
    {
        $data['page'] = 'ajoutVehicule.php';
        $this->load->view('backoffice/template', $data);
    }

    public function ajout()
    {
        $insert = array(
            'id' => '',
            'numero' => $this->input->post('numero'),
            'marque' => $this->input->post('marque'),
            'modele' => $this->input->post('modele'),
            'type' => $this->input->post('type')
        );
        $this->VehiculeMod->insert($insert);
        redirect(site_url('liste-voiture-gestion-de-voiture'));
    }
    public function supprimer()
    {
        $this->VehiculeMod->supprimer($this->input->post('idvehicule'));
        $this->liste();
    }
    public function papiers(){
        $data['page'] = 'papierVehicule.php';
        $data['papiers'] = $this->VehiculeMod->getVehicule($this->input->post('idVehicule'));
        $this->load->view('backoffice/template', $data);
    }

}
