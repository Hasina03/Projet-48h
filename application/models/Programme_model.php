<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Programme_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getObjectif($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('objectifs');
        return $query->row();
    }

    public function getProgrammes($objectifId) {
        $this->db->where('id_objectifs', $objectifId);
        $query = $this->db->get('programme');
        return $query->result();
    }

    public function getPlatPhoto($id) {
        $this->db->select('photo');
        $this->db->from('plat');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row()->photo;
    }

    public function getPlatNom($id) {
        $this->db->select('nom');
        $this->db->from('plat');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row()->nom;
    }

    public function getActivitePhoto($id) {
        $this->db->select('photo');
        $this->db->from('activite');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row()->photo;
    }

    public function getActiviteNom($id) {
        $this->db->select('nom');
        $this->db->from('activite');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row()->nom;
    }
}
