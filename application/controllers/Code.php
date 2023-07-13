<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include("SecureController.php");

/**
 * @property $objet
 */
class Code extends SecureController{

    public function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Code_model');
    }

    public function index(){
        $data['codes'] = $this->Code_model->getCodes();
        $this->load->view('code_form', $data);
    }

    public function verify_code() {
        $this->form_validation->set_rules('code', 'Code', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('code_form');
        } else {
            $code = $this->input->post('code');
            $code_exists = $this->Code_model->checkCodeExists($code);

            if ($code_exists) {
                // Demande de confirmation à l'administrateur
                // ...

                // Affichage d'un message de succès
                $data['success_message'] = 'La demande de confirmation a été envoyée à l\'administrateur.';
            } else {
                // Affichage d'un message d'erreur
                $data['error_message'] = 'Le code n\'existe pas dans la base de données.';
            }

            $data['codes'] = $this->Code_model->getCodes();
            $this->load->view('code_form', $data);
        }
    }
}
?>
