<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ControllerVisite extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('UsersMod');
    $this->load->model('VisiteMod');
  }

  public function liste()
  {
    $data['Visites'] = $this->VisiteMod->getVisite("");
    $data['page'] = 'asssurance.php';
    $this->load->view('backoffice/template', $data);
  }

  public function pageAjout()
  {
    $data['page'] = 'ajouterVisite.php';
    $data['numero'] =   $this->input->post('numero');
    $data['idVehicule'] =  $this->input->post('idVehicule');
    $this->load->view('backoffice/template', $data);
  }


  public function ajout()
  {
    $insert = array(
      'id' => '',
      'id_voiture' => $this->input->post('id_voiture'),
      'date_emission' => $this->input->post('date_emission'),
      'heure_emission' => $this->input->post('heure_emission'),
      'date_expiration' => $this->input->post('date_expiration'),
      'heure_expiration' => $this->input->post('heure_expiration')
    );
    $this->VisiteMod->insert($insert);
    redirect(site_url('liste-voiture-gestion-de-voiture'));
  }
  public function pageModifier()
  {
    $data['page'] = 'modifierVisite.php';
    $data['numero'] =   $this->input->post('numero');
    $data['vehicule'] =  $this->VisiteMod->getVisite($this->input->post('idVehicule'));
    $this->load->view('backoffice/template', $data);
  }


  public function modifier()
  {
    $insert = array(
      'id' => $this->input->post('id'),
      'id_voiture' => $this->input->post('id_voiture'),
      'date_emission' => $this->input->post('date_emission'),
      'heure_emission' => $this->input->post('heure_emission'),
      'date_expiration' => $this->input->post('date_expiration'),
      'heure_expiration' => $this->input->post('heure_expiration')
    );

    $this->VisiteMod->update($insert);
    redirect(site_url('liste-voiture-gestion-de-voiture'));
  }

  public function supprimer()
  {
    $this->VisiteMod->supprimer($this->input->post('idVisite'));
    $this->liste();
  }
}
