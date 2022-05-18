<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ControllerTrajet extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('UsersMod');
    $this->load->model('TrajetMod');
  }

  public function liste()
  {
    $data['trajets'] = $this->TrajetMod->getTrajet();
    $data['page'] = 'trajet.php';
    $this->load->view('backoffice/template', $data);
  }

  public function pageAjout()
  {
    $this->load->model('UsersMod');
    $this->load->model('VehiculeMod');
    $data['chauffeurs'] = $this->UsersMod->getChauffeurs();
    $data['voitures'] = $this->VehiculeMod->getVehicule("");
    $data['page'] = 'ajoutTrajet.php';
    $this->load->view('backoffice/template', $data);
  }

  public function ajout()
  {
    if ($this->input->post('id_voiture')==null || $this->input->post('id_chauffeur')==null) {
      redirect(site_url('page-ajout-trajet-gestion-de-voiture'));
    }
    $insert = array(
      'id' => '',
      'id_chauffeur' => $this->input->post('id_voiture'),
      'id_voiture' => $this->input->post('id_chauffeur'),
      'date_depart' => $this->input->post('date_depart'),
      'heure_depart' => $this->input->post('heure_depart'),
      'lieu_depart' => $this->input->post('lieu_depart'),
      'kilometre_depart' => $this->input->post('kilometre_depart'),
      'date_arrivee' => $this->input->post('date_arrivee'),
      'heure_arrivee' => $this->input->post('heure_arrivee'),
      'lieu_arrive' => $this->input->post('lieu_arrive'),
      'kilometre_arrivee' => $this->input->post('kilometre_arrive'),
      'prix_carburant' => $this->input->post('prix_carburant'),
      'quantite_carburant' => $this->input->post('quantite_carburant'),
      'motif' => $this->input->post('motif')
    );
    $this->TrajetMod->insert($insert);
     redirect(site_url('liste-trajet-gestion-de-voiture'));
  }
  public function supprimer()
  {
    $this->TrajetMod->supprimer($this->input->post('idTrajet'));
    $this->liste();
  }
}
