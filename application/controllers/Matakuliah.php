<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matakuliah extends CI_Controller {
	public function index(){
		$this->load->view('form_input_matkul');
	}

	public function cetak(){
		$this->form_validation->set_rules('kode', 'Kode Matakuliah', 'required|min_length[3]', [
		 'required' => 'Kode Matakuliah Harus diisi',
		 'min_length' => 'Kode terlalu pendek'
		 ]);

		$this->form_validation->set_rules('nama', 'Nama Matakuliah', 'required|min_length[3]', [
		 'required' => 'Nama Matakuliah Harus diisi',
		 'min_lenght' => 'Nama terlalu pendek'
		 ]);
		
		if($this->form_validation->run() == false){
			$this->load->view('form_input_matkul');
		}else{
			$data = [
				'kode' => $this->input->post('kode'),
				'nama' => $this->input->post('nama'),
				'sks' => $this->input->post('sks')
			];
			
			$this->load->view('view_data_matkul', $data);
		}
	}
}