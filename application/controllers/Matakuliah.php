<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matakuliah extends CI_Controller {
	public function index(){
		$this->load->view('form_input_matkul');
	}

	public function cetak(){
		$data = [
			'kode' => $this->input->post('kode'),
			'nama' => $this->input->post('nama'),
			'sks' => $this->input->post('sks')
			];
		
		$this->load->view('view_data_matkul', $data);
	}
}
