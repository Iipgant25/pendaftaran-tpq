<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends CI_Controller {

	public function __construct(){

        parent::__construct();
		$this->load->model('ModelUpload');
        $this->load->library('form_validation');

    }

	public function index()
	{
		$this->load->view('daftar');
	}

	public function daftar()
	{

		$this->form_validation->set_rules('nama_santri', 'Nama', 'required');
		$this->form_validation->set_rules('nik_santri', 'Nik', 'required');
		$this->form_validation->set_rules('no_kk', 'Nomor KK', 'required');
		$this->form_validation->set_rules('tempat', 'Tempat Lahir', 'required');
		$this->form_validation->set_rules('tgl', 'Tanggal Lahir', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('jeniskel', 'Jenis Kelamin', 'required');
		$this->form_validation->set_rules('ke', 'Anak Ke', 'required');
		$this->form_validation->set_rules('dari', 'Dari Bersaudara', 'required');
		$this->form_validation->set_rules('no_hp', 'Nomor Hp', 'required');
		

		if ( $this->form_validation->run()  == false) {

			
			$this->load->view('daftar');

		} else {

			$tahun = date('Y');
			$tahun2 = $tahun + 1;
			
			$santri = [
			'nama_santri' => htmlspecialchars($this->input->post('nama_santri',true)),
			'nik_santri' => htmlspecialchars($this->input->post('nik_santri',true)),
			'no_kk' => htmlspecialchars($this->input->post('no_kk',true)),
			'tempat_lahir' => htmlspecialchars($this->input->post('tempat',true)),
			'tgl_lahir' => htmlspecialchars($this->input->post('tgl',true)),
			'alamat' => htmlspecialchars($this->input->post('alamat',true)),
			'jenis_kelamin' => htmlspecialchars($this->input->post('jeniskel',true)),
			'no_hp' => htmlspecialchars($this->input->post('no_hp',true)),
			'anak_ke' => htmlspecialchars($this->input->post('ke',true)),
			'dari' => htmlspecialchars($this->input->post('dari',true)),
			'aprove' => 1,
			'tahun_ajaran' => $tahun . '/' . $tahun2
			];

			$this->db->insert('santri', $santri);

			if ($this->input->post('nama_ayah',true) != null ){
				if ($this->input->post('nik_ayah',true) != null ) {
					if ($this->input->post('pendidikan_ayah',true) != null ) {
						if ($this->input->post('pekerjaan_ayah',true) != null ) {
							$ayah= [
								'nama_ayah' => htmlspecialchars($this->input->post('nama_ayah',true)),
								'nik_ayah' => htmlspecialchars($this->input->post('nik_ayah',true)),
								'pendidikan' => htmlspecialchars($this->input->post('pendidikan_ayah',true)),
								'pekerjaan' => htmlspecialchars($this->input->post('pekerjaan_ayah',true))
								];
				
							$this->db->insert('ayah', $ayah);
						}else {
							$ayah= [
								'nama_ayah' => '-',
								'nik_ayah' => '-',
								'pendidikan' => '-',
								'pekerjaan' => '-'
								];
				
							$this->db->insert('ayah', $ayah);
						}
			
					}else {
						$ayah= [
							'nama_ayah' => '-',
							'nik_ayah' => '-',
							'pendidikan' => '-',
							'pekerjaan' => '-'
							];
			
						$this->db->insert('ayah', $ayah);
					}
		
				}else {
					$ayah= [
						'nama_ayah' => '-',
						'nik_ayah' => '-',
						'pendidikan' => '-',
						'pekerjaan' => '-'
						];
		
					$this->db->insert('ayah', $ayah);
				}
			}else {
				$ayah= [
					'nama_ayah' => '-',
					'nik_ayah' => '-',
					'pendidikan' => '-',
					'pekerjaan' => '-'
					];
	
				$this->db->insert('ayah', $ayah);
			}

			if ($this->input->post('nama_ibu',true) != null ){
				if ($this->input->post('nik_ibu',true) != null ) {
					if ($this->input->post('pendidikan_ibu',true) != null ) {
						if ($this->input->post('pekerjaan_ibu',true) != null ) {
							$ibu= [
								'nama_ibu' => htmlspecialchars($this->input->post('nama_ibu',true)),
								'nik_ibu' => htmlspecialchars($this->input->post('nik_ibu',true)),
								'pendidikan' => htmlspecialchars($this->input->post('pendidikan_ibu',true)),
								'pekerjaan' => htmlspecialchars($this->input->post('pekerjaan_ibu',true))
								];
				
							$this->db->insert('ibu', $ibu);
						}else {
							$ibu= [
								'nama_ibu' => '-',
								'nik_ibu' => '-',
								'pendidikan' => '-',
								'pekerjaan' => '-'
								];
				
							$this->db->insert('ibu', $ibu);
						}
					}else {
						$ibu= [
							'nama_ibu' => '-',
							'nik_ibu' => '-',
							'pendidikan' => '-',
							'pekerjaan' => '-'
							];
			
						$this->db->insert('ibu', $ibu);
					}
				}else {
					$ibu= [
						'nama_ibu' => '-',
						'nik_ibu' => '-',
						'pendidikan' => '-',
						'pekerjaan' => '-'
						];
		
					$this->db->insert('ibu', $ibu);
				}
			}else {
				$ibu= [
					'nama_ibu' => '-',
					'nik_ibu' => '-',
					'pendidikan' => '-',
					'pekerjaan' => '-'
					];
	
				$this->db->insert('ibu', $ibu);
			}


			if ($this->input->post('nama_wali',true) != null ){
				if ($this->input->post('alamat_wali',true) != null) {
					if ($this->input->post('no_hp_wali',true) != null) {
						$wali= [
							'nama_wali' => htmlspecialchars($this->input->post('nama_wali',true)),
							'alamat' => htmlspecialchars($this->input->post('alamat_wali',true)),
							'no_hp' => htmlspecialchars($this->input->post('no_hp_wali',true))
							];
			
						$this->db->insert('wali', $wali);
					}else {
						$wali= [
							'nama_wali' => '-',
							'alamat' => '-',
							'no_hp' => '-'
							];
			
						$this->db->insert('wali', $wali);
					}
				}else {
					$wali= [
						'nama_wali' => '-',
						'alamat' => '-',
						'no_hp' => '-'
						];
		
					$this->db->insert('wali', $wali);
				}
			}else {
				$wali= [
					'nama_wali' => '-',
					'alamat' => '-',
					'no_hp' => '-'
					];
	
				$this->db->insert('wali', $wali);
			}

			$this->ModelUpload->simpanKtp();

			$this->session->set_flashdata('message', 'Data Anda Berhasil Terkirim');
			redirect(base_url('pendaftaran'));
		}
	}
}

