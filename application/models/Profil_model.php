<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        // Charger la base de données si nécessaire
        $this->load->database();
    }

    public function save_profil($data) {
        // Insérer les données du profil dans la base de données
        $this->db->insert('profil', $data);

        // Vérifier si l'insertion a réussi
        // return $this->db->affected_rows() > 0;
    }


}
