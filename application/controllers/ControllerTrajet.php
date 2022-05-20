<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ControllerTrajet extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('UsersMod');
    $this->load->model('TrajetMod');
    $this->load->model('VehiculeMod');
  }
  public function liste()
  {
    $data['trajets'] = $this->TrajetMod->getTrajet();
    $data['page'] = 'trajet.php';
    $this->load->view('backoffice/template', $data);
  }

  public function pageAjout()
  {

    $data['chauffeurs'] = $this->UsersMod->getChauffeurs();
    $data['voitures'] = $this->VehiculeMod->getVehiculeDisponible("");
    $data['page'] = 'ajoutTrajet.php';
    $this->load->view('backoffice/template', $data);
  }
  public function pageAjoutSansErreur()
  {
    $data['chauffeurs'] = $this->UsersMod->getChauffeurs();
    $data['voitures'] = $this->VehiculeMod->getVehiculeDisponible("");
    $data['page'] = 'ajoutTrajet.php';
    $_SESSION['error_ajout_trajet'] = "rien";
    $this->load->view('backoffice/template', $data);
  }

  public function ajout()
  {
    $data['chauffeurs'] = $this->UsersMod->getChauffeurs();
    $data['voitures'] = $this->VehiculeMod->getVehiculeDisponible("");
    $data['page'] = 'ajoutTrajet.php';
    $date_depart  = new DateTime($this->input->post('date_depart') . " " . $this->input->post('heure_depart'));
    $date_arrivee = new DateTime($this->input->post('date_arrivee') . " " . $this->input->post('heure_arrivee'));
    $vitesse_moyenne = 0;
    $interval = $date_depart->diff($date_arrivee);
    $yMin = $interval->format("%y") * 525600; // convertir années en minutes
    $mMin = $interval->format("%m") * 1440 * 31; // convertir mois (en 31 jours) en minutes
    $dMin = $interval->format("%d") * 1440; // convertir jours en minutes
    $hMin = $interval->format("%h") * 60; // convertir heures en minutes
    $iMin = $interval->format("%i");
    $temps_minute = $yMin + $mMin + $dMin + $hMin + $iMin;
    $temps_heures = $temps_minute / 60;
    $distance = (float)($this->input->post('kilometre_arrive')) - (float)($this->input->post('kilometre_depart'));
    $temps_heures = (float)$temps_heures;
    if ($temps_heures == 0) {
      $_SESSION['error_ajout_trajet'] = "date_error";
      redirect(site_url('page-ajout-trajet-gestion-de-voiture'));
    }

    $vitesse_moyenne = $distance / $temps_heures;

    if ($date_depart >= $date_arrivee) {
      $_SESSION['error_ajout_trajet'] = "date_error";
      redirect(site_url('page-ajout-trajet-gestion-de-voiture'));
    }
    if ($vitesse_moyenne > 76) {
      $_SESSION['error_ajout_trajet'] = "vitesse_moyenne_error";
      redirect(site_url('page-ajout-trajet-gestion-de-voiture'));
    }

    if ((float)$this->input->post('kilometre_depart') > (float)$this->input->post('kilometre_arrive')) {
      $_SESSION['error_ajout_trajet'] = "kilometre_error";
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
      'motif' =>(string) $this->input->post('motif')
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
