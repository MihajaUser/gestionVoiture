<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ControllerInfo extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('UsersMod');
        $this->load->model('InfoMod');
    }

    public function liste()
    {
        $data['informations'] = $this->InfoMod->getInformation();
        $data['page'] = 'acceuille.php';
        $this->load->view('backoffice/template', $data);
    }

    public function pageAjout()
    {
        $data['page'] = 'ajout.php';
        $this->load->view('backoffice/template', $data);
    }

    public function ajout()
    {
        $config['allowed_types'] = 'jpg|png|gif|';
        $config['upload_path'] = './assets/photo';
        $config['ecrypt_name'] = true;
        $this->load->library('upload', $config);
        if ($this->upload->do_upload('photo')) {
            $insert = array(
                'id' => '',
                'titre' => $this->input->post('titre'),
                'description' => $this->input->post('description'),
                'photo' => $_FILES['photo']['name']
            );
            $this->InfoMod->insert($insert);
            $this->liste();
        } else {
            print_r($this->upload->display_errors());
        }
    }
    public function supprimer()
    {
        $this->InfoMod->supprimer($this->input->post('idInformation'));
        $this->liste();
    }
}
