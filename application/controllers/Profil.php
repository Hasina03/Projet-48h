<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Charger le modèle si nécessaire
        $this->load->model('profil_model');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function index() {
        // Récupérer l'ID de l'utilisateur depuis la session

        $userData = $this->session->userdata('user');

        if(isset($userData)){
            $idUser = $userData['id'];
            // Récupérer l'ID de l'objectif depuis la session
            $idObjectif = $this->session->userdata('objectif_id');

            // Charger la vue du formulaire de profil avec l'ID de l'utilisateur et l'ID de l'objectif
            $data = array(
                'idUser' => $idUser,
                'idObjectif' => $idObjectif
            );
            $this->load->view('profil_form', $data);
        }


    }

    public function save() {
        // Récupérer l'ID de l'utilisateur depuis la session
        $userData = $this->session->userdata('user');
        $idUser = $userData['id'];

        // Récupérer les données du formulaire de profil
        $genre = $this->input->post('genre');
        $taille = $this->input->post('taille');
        $poids = $this->input->post('poids');

        // Récupérer l'ID de l'objectif depuis la session
        $idObjectif = $this->session->userdata('objectif_id');

        // Créer un tableau avec les données
        $data = array(
            'idUser' => $idUser,
            'id_objectif' => $idObjectif,
            'genre' => $genre,
            'taille' => $taille,
            'poids' => $poids
        );

        // Appeler la méthode du modèle pour enregistrer le profil
        $this->profil_model->save_profil($data);

        // Afficher une page de succès ou rediriger vers une autre page
        redirect('login');
    }
}
