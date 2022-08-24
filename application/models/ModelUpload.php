<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelUpload extends CI_Model{

    public function simpanKtp(){

        // KTP
        $config['upload_path']          = './assets/gambar/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 2048;
        $config['max_width']            = 3000;
        $config['max_height']           = 3000;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('ktp'))
        {
            $ktp = null;
        }
        else
        {
          $ktp = $this->upload->data();
          
          
        }

        // KK
        $config['upload_path']          = './assets/gambar/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 2048;
        $config['max_width']            = 3000;
        $config['max_height']           = 3000;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('kk'))
        {
            $kk = null;
        }
        else
        {
          $kk = $this->upload->data();
          
          
        }

        // Akte
        $config['upload_path']          = './assets/gambar/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 2048;
        $config['max_width']            = 3000;
        $config['max_height']           = 3000;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('akte'))
        {
            $akte = null;
        }
        else
        {
          $akte = $this->upload->data();
          
          
        }
        

        $data = [
          "ktp" => $ktp['file_name'],
          "kk" => $kk['file_name'],
          "akte" => $akte['file_name']
        ];


        $this->db->insert('berkas', $data);
    }

    function dataSantri(){
        $this->db->select('*');
        $this->db->from('santri');
        $this->db->join('ayah','ayah.id_santri = santri.id_santri','LEFT');
        $this->db->join('ibu','ibu.id_santri = santri.id_santri','LEFT');
        $this->db->join('wali','wali.id_santri = santri.id_santri','LEFT');
        $this->db->join('berkas','berkas.id_santri = santri.id_santri','LEFT');
        $this->db->where('aprove', 1);
        return $this->db->get();
        
    }

    function dataSantri2(){
        $this->db->select('*');
        $this->db->from('santri');
        $this->db->join('ayah','ayah.id_santri = santri.id_santri','LEFT');
        $this->db->join('ibu','ibu.id_santri = santri.id_santri','LEFT');
        $this->db->join('wali','wali.id_santri = santri.id_santri','LEFT');
        $this->db->join('berkas','berkas.id_santri = santri.id_santri','LEFT');
        return $this->db->get();
        
    }

    function dataSantriAprove(){
        $this->db->select('*');
        $this->db->from('santri');
        $this->db->join('ayah','ayah.id_santri = santri.id_santri','LEFT');
        $this->db->join('ibu','ibu.id_santri = santri.id_santri','LEFT');
        $this->db->join('wali','wali.id_santri = santri.id_santri','LEFT');
        $this->db->join('berkas','berkas.id_santri = santri.id_santri','LEFT');
        $this->db->where('aprove', 2);
        return $this->db->get();
        
    }

    function dataSantriAprove2(){
        $this->db->select('*');
        $this->db->from('santri');
        $this->db->where('aprove', 2);
        return $this->db->get();
        
    }

    function dataSantriAprove3($data){
        $this->db->select('*');
        $this->db->from('santri');
        $this->db->where('aprove', 2);
        $this->db->where('tahun_ajaran', $data);
        return $this->db->get();
        
    }

    function dataDetail($data){
        $this->db->select('*');
        $this->db->from('santri');
        $this->db->where('id_santri', $data);
        return $this->db->get();
        
    }

    function ayah($data){
        $this->db->select('*');
        $this->db->from('ayah');
        $this->db->where('id_santri', $data);
        return $this->db->get();
        
    }

    function ibu($data){
        $this->db->select('*');
        $this->db->from('ibu');
        $this->db->where('id_santri', $data);
        return $this->db->get();
        
    }

    function wali($data){
        $this->db->select('*');
        $this->db->from('wali');
        $this->db->where('id_santri', $data);
        return $this->db->get();
        
    }

    function berkas($data){
        $this->db->select('*');
        $this->db->from('berkas');
        $this->db->where('id_santri', $data);
        return $this->db->get();
        
    }

    public function aprove($id,$data)
    {
      $this->db->where('id_santri', $id);
      return $this->db->update('santri', $data);
    }


}