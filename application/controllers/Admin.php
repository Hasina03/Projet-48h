<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

  public function __construct() {
    parent::__construct();
    // Chargez le modèle Admin_model
    $this->load->model('Admin_model');
  }

  public function index() {
    $data['programme'] = $this->Admin_model->getProgrammes();
    $data['plat'] = $this->Admin_model->getPlats();
    $data['activite'] = $this->Admin_model->getActivites();

    // Chargez votre vue admin_form en passant les données récupérées
    $this->load->view('admin_form', $data);
  }

  public function ajouterProgramme() {
    // Récupérez les données soumises par le formulaire
    $programmeData = array(
      'id' => $this->input->post('id'),
      'id_plat' => $this->input->post('id_plat'),
      'id_objectifs' => $this->input->post('id_objectifs'),
      'id_activite' => $this->input->post('id_activite')
    );

    // Appelez la méthode du modèle pour insérer le programme
    $this->Admin_model->ajouterProgramme($programmeData);

    // Redirigez vers la page d'administration
    redirect('admin');
  }

  public function supprimerProgramme($id) {
    // Appelez la méthode du modèle pour supprimer le programme
    $this->Admin_model->supprimerProgramme($id);

    // Redirigez vers la page d'administration
    redirect('admin');
  }

  public function modifierProgramme($id) {
    // Récupérez les données soumises par le formulaire
    $programmeData = array(
      'id_plat' => $this->input->post('id_plat'),
      'id_objectifs' => $this->input->post('id_objectifs'),
      'id_activite' => $this->input->post('id_activite')
    );

    // Appelez la méthode du modèle pour mettre à jour le programme
    $this->Admin_model->modifierProgramme($id, $programmeData);

    // Redirigez vers la page d'administration
    redirect('admin');
  }

  public function ajouterPlat() {
    // Récupérez les données soumises par le formulaire
    $platData = array(
      'id' => $this->input->post('id'),
      'nom' => $this->input->post('nom'),
      'photo' => $this->input->post('photo')
    );

    // Appelez la méthode du modèle pour insérer le plat
    $this->Admin_model->ajouterPlat($platData);

    // Redirigez vers la page d'administration
    redirect('admin');
  }

  public function supprimerPlat($id) {
    // Appelez la méthode du modèle pour supprimer le plat
    $this->Admin_model->supprimerPlat($id);

    // Redirigez vers la page d'administration
    redirect('admin');
  }

  public function modifierPlat($id_plat) {
    // Récupérez les données soumises par le formulaire
    $platData = array(
      'nom_plat' => $this->input->post('nom_plat')
      // Ajoutez les autres champs à modifier
    );

    // Appelez la méthode du modèle pour modifier les informations du plat
    $this->Admin_model->modifierPlat($id_plat, $platData);

    // Redirigez vers la page d'administration ou une autre page appropriée
    redirect('admin');
  }

  public function ajouterActivite() {
    // Récupérez les données soumises par le formulaire
    $activiteData = array(
      'id' => $this->input->post('id'),
      'nom' => $this->input->post('nom'),
      'photo' => $this->input->post('photo')

    );

    // Appelez la méthode du modèle pour insérer l'activité
    $this->Admin_model->ajouterActivite($activiteData);

    // Redirigez vers la page d'administration
    redirect('admin');
  }

  public function supprimerActivite($id) {
    // Appelez la méthode du modèle pour supprimer l'activité
    $this->Admin_model->supprimerActivite($id);

    // Redirigez vers la page d'administration
    redirect('admin');
  }

  public function modifierActivite($id) {
    // Récupérez les données soumises par le formulaire
    $activiteData = array(
      'nom' => $this->input->post('nom')
      // Ajoutez les autres champs à modifier
    );

    // Appelez la méthode du modèle pour modifier les informations de l'activité
    $this->Admin_model->modifierActivite($id, $activiteData);

    // Redirigez vers la page d'administration ou une autre page appropriée
    redirect('admin');
  }


  }

