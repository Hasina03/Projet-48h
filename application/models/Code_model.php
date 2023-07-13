<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Code_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function getCodes() {
        $this->db->select('code, valeur_ariary');
        $query = $this->db->get('code');
        return $query->result();
    }

    public function checkCodeExists($code) {
        $this->db->where('code', $code);
        $query = $this->db->get('code');
        return $query->num_rows() > 0;
    }

}
