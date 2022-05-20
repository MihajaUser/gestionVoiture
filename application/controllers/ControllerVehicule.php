<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class ControllerVehicule extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('UsersMod');
        $this->load->model('VehiculeMod');
        $this->load->model('MaintenanceMod');
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
    public function papiers()
    {
        $data['page'] = 'papierVehicule.php';
        $data['papiers'] = $this->VehiculeMod->getVehicule($this->input->post('idVehicule'));
        $this->load->view('backoffice/template', $data);
    }
    public function vehiculeDisponible()
    {
        $data['vehicules'] = $this->VehiculeMod->getVehiculeDisponible("");
        $data['page'] = 'vehiculeDisponible.php';
        $this->load->view('backoffice/template', $data);
    }

    public function trajetsVehicule()
    {
        $this->load->model('TrajetMod');
        $data['trajets'] = $this->TrajetMod->getTrajetVehicule($this->input->post('idVehicule'));
        $data['page'] = 'trajetsVehicule.php';
        $this->load->view('backoffice/template', $data);
    }

    public function maintenance()
    {
        $data['vehicules'] = $this->MaintenanceMod->getMaintenance("");
        $data['page'] = 'maintenance.php';
        $this->load->view('backoffice/template', $data);
    }

    public function pageAjoutMaintenance()
    {
        $data['vehicules'] = $this->VehiculeMod->getVehicule($this->input->post('idVehicule'));
        $data['objetsMaintenances'] = $this->MaintenanceMod->getObjectsMaintance();
        $data['page'] = 'ajouterMaintenance.php';
        $this->load->view('backoffice/template', $data);
    }

    public function ajoutMaintenance()
    {
        echo "ajoutMaintenance";
        $insert = array(
            'id' => '',
            'id_vehicule' => $this->input->post('id_vehicule'),
            'id_objetsMaintenance' => $this->input->post('id_objetsMaintenance'),
            'usure' => $this->input->post('usure'),
            'kilometrage_durant_maintenance' => $this->input->post('kilometrage_durant_maintenance')
        );
        //var_dump($insert);
        $this->MaintenanceMod->insert($insert);
        redirect(site_url('maintenance-vehicule-voiture-gestion-de-voiture'));
    }

    public function pagePdf()
    {
        $data['page'] = 'trajetsVehicule.php';
        $this->load->view('backoffice/trajetVehiculePdf', $data);
    }
    public function toPdf()
    {
        echo ("controllerUse to pdf");
        $live_mpdf = new \Mpdf\Mpdf();
        $data['trajets'] = $this->TrajetMod->getTrajetVehicule($this->input->post('idVehicule'));
        $all_html = $this->load->view('html_to_pdf', $data, true);
        $live_mpdf->WriteHTML($all_html);
        $live_mpdf->Output();
    }
}
