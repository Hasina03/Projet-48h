<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Objectif_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function create_objectif($data) {
        // Insérer un nouvel objectif dans la base de données
        $this->db->insert('objectifs', $data);
        
        // Retourner l'ID de l'objectif créé
        return $this->db->insert_id();
    }

    /*public function get_objectif($id) {
        // Récupérer un objectif spécifique en fonction de son ID
        $query = $this->db->get_where('objectifs', array('id' => $id));
        return $query->row();
    }

    public function update_objectif($id, $data) {
        // Mettre à jour un objectif existant
        $this->db->where('id', $id);
        $this->db->update('objectifs', $data);
    }

    public function delete_objectif($id) {
        // Supprimer un objectif de la base de données
        $this->db->where('id', $id);
        $this->db->delete('objectifs');
    }

    public function get_all_objectifs() {
        // Récupérer tous les objectifs
        $query = $this->db->get('objectifs');
        return $query->result();
    }

    // Ajoutez d'autres méthodes de modèle si nécessaire
    */
}
