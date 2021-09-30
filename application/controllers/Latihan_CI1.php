<?php
class Latihan_CI1 extends CI_Controller
{
    public function index()
    {
        echo "Selamat Datang di Mata Kulih Web Programming dengan Codeigniter <br>";
        echo "Selamat Belajar. Semoga Menyenangkan <br>";
    }
    
    public function penjumlahan($nilai1, $nilai2)
    {
        $this->load->model('Model_Latihan_CI1');

        $data['nilai1'] = $nilai1;
        $data['nilai2'] = $nilai2;
        $data['hasil'] = $this->Model_Latihan_CI1->jumlah($nilai1, $nilai2);

        $this->load->view('View_Latihan_CI1', $data);
    }
}

