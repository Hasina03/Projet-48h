<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include("SecureController.php");
/**
 * @property $objet
 */
class Home extends SecureController{

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $user = $this->session->user;
        $this->load->view('home');

    }

}
?>
