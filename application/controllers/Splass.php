<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Splass extends CI_Controller {

  public function __construct(){
      parent::__construct();
      $this->load->model('ModelUpload');
      $this->load->library('form_validation');

    }

    public function index() {

        $this->load->view('splass/index');
    }

}