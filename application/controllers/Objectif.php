<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Objectif extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Charger le modèle si nécessaire
        $this->load->model('objectif_model');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('Programme_model');
    }

    public function index() {
        // Afficher le formulaire de l'objectif
        $this->load->view('objectif_form');
    }

    public function save() {
        // Récupérer les données du formulaire de l'objectif
        $objectif = $this->input->post('objectif');

        // Stocker l'ID de l'objectif dans la session
        $this->session->set_userdata('objectif_id', $objectif);

        $id = $this->session->userdata('objectif_id');
        $data['id']=$id;

        // Rediriger vers la page de profil
        // redirect('programme');
        $this->index2();
    }

    public function index2() {
        // Récupérer l'ID de l'objectif depuis la page précédente
        $objectifId = $this->session->userdata('objectif_id');
        if ($objectifId) {
            $data['objectif'] = $this->Programme_model->getObjectif($objectifId);
            $data['programmes'] = $this->Programme_model->getProgrammes($objectifId);

            $this->load->model('Programme_model');
            $data['programme_details'] = array();

            foreach ($data['programmes'] as $programme) {
                $platId = $programme->id_plat;
                $activiteId = $programme->id_activite;
                $programme_details = new stdClass();
                $programme_details->plat_photo = $this->Programme_model->getPlatPhoto($platId);
                $programme_details->plat_nom = $this->Programme_model->getPlatNom($platId);
                $programme_details->activite_photo = $this->Programme_model->getActivitePhoto($activiteId);
                $programme_details->activite_nom = $this->Programme_model->getActiviteNom($activiteId);
                $data['programme_details'][] = $programme_details;
            }

            // Charger la vue en fonction de l'ID de l'objectif
            if ($objectifId == 1) {
                $this->load->view('objectif1_view', $data);
            } elseif ($objectifId == 2) {
                $this->load->view('objectif2_view', $data);
            } else {
                // L'ID de l'objectif n'a pas de vue associée
                // Rediriger vers une page d'erreur ou afficher un message d'erreur
                redirect('erreur');
            }
        } else {
            // L'ID de l'objectif n'est pas disponible
            // Rediriger vers la page de sélection de l'objectif
            redirect('selection_objectif');
        }
    }
}
