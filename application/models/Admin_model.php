<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

  public function getProgrammes() {
    // Récupérez les programmes depuis la base de données
    $query = $this->db->get('programme');
    return $query->result();
  }

  public function ajouterProgramme($programmeData) {
    // Insérez le programme dans la base de données
    $this->db->insert('programme', $programmeData);
  }

  public function supprimerProgramme($id) {
    // Supprimez le programme de la base de données en utilisant l'ID
    $this->db->where('id', $id);
    $this->db->delete('programme');
  }

  public function modifierProgramme($id, $programmeData) {
    $this->db->where('id', $id);
    $this->db->update('programme', $programmeData);
  }

  public function getPlats() {
    // Récupérez les plats depuis la base de données
    $query = $this->db->get('plat');
    return $query->result();
  }

  public function ajouterPlat($platData) {
    // Insérez le plat dans la base de données
    $this->db->insert('plat', $platData);
  }

  public function supprimerPlat($id) {
    // Supprimez le plat de la base de données en utilisant l'ID du plat
    $this->db->where('id', $id);
    $this->db->delete('plat');
  }

  public function modifierPlat($id, $platData) {

    $this->db->where('id', $id);
    $this->db->update('plat', $platData);
  }

  public function getActivites() {
    // Récupérez les activités depuis la base de données
    $query = $this->db->get('activite');
    return $query->result();
  }

  public function ajouterActivite($activiteData) {
    // Insérez l'activité dans la base de données
    $this->db->insert('activite', $activiteData);
  }

  public function supprimerActivite($id) {
    // Supprimez l'activité de la base de données en utilisant l'ID de l'activité
    $this->db->where('id', $id);
    $this->db->delete('activite');
  }

  public function modifierActivite($id, $activiteData) {
    $this->db->where('id', $id);
    $this->db->update('activite', $activiteData);
  }
}
