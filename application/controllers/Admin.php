<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

  public function __construct(){
      parent::__construct();
      $this->load->model('ModelUpload');
      $this->load->library('form_validation');

    }

    public function index() {

        $data['judul'] = 'Data Calon Santri';
        $data['santri'] = $this->ModelUpload->dataSantri()->result_array();


        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('templates/admin_topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/admin_footer');
    }

    public function detail($id) {

        $data['judul'] = 'Dasboard';
        $data['santri'] = $this->ModelUpload->dataDetail($id)->row_array();
        $data['ayah'] = $this->ModelUpload->ayah($id)->row_array();
        $data['ibu'] = $this->ModelUpload->ibu($id)->row_array();
        $data['wali'] = $this->ModelUpload->wali($id)->row_array();
        $data['berkas'] = $this->ModelUpload->berkas($id)->row_array();


        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('templates/admin_topbar', $data);
        $this->load->view('admin/detail', $data);
        $this->load->view('templates/admin_footer');
    }

    public function aprove($id) {

          $data = [
            "aprove" => 2
          ];
    
          $this->ModelUpload->aprove($id,$data);
    
          redirect('admin');
    }


    public function dataAprove() {

        $data['judul'] = 'Aprove';
        $data['santri'] = $this->ModelUpload->dataSantriAprove()->result_array();


        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('templates/admin_topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/admin_footer');
    }


    public function laporan() {

        $data['judul'] = 'Laporan';
        $data['santri'] = $this->ModelUpload->dataSantriAprove()->result_array();


        $this->load->view('templates/admin_header', $data);
        $this->load->view('templates/admin_sidebar', $data);
        $this->load->view('templates/admin_topbar', $data);
        $this->load->view('admin/laporan', $data);
        $this->load->view('templates/admin_footer');
    }

    public function print() {

        
        $data['santri'] = $this->ModelUpload->dataSantriAprove2()->result_array();
        $this->load->view('laporan/print', $data);
        
    }


    public function print_k() {

        $tahun = $this->input->post('tahun_ajaran',true);

        $data['santri'] = $this->ModelUpload->dataSantriAprove3($tahun)->result_array();
        $data['tahun'] = $tahun;
        
        $this->load->view('laporan/print_k', $data);
        
    }

    public function print_l($id) {

        $data['santri'] = $this->ModelUpload->dataDetail($id)->row_array();
        $data['ayah'] = $this->ModelUpload->ayah($id)->row_array();
        $data['ibu'] = $this->ModelUpload->ibu($id)->row_array();
        $data['wali'] = $this->ModelUpload->wali($id)->row_array();
        
        $this->load->view('laporan/print2', $data);
        
    }

    

    public function login() {

        $this->load->view('admin/login');
    }

    public function auth() {

        $admin = $this->input->post('admin');
        $password = $this->input->post('password');

        if ($admin == 'admin') {
            if ($password == 1234) {
                redirect('Admin');
            }else {
                redirect('Splass');
            }
        }else {
            redirect('Splass');
        }
    }

}