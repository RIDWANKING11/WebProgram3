<?php
defined('BASEPATH') or exit('no direct script access allowed');

class web extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index()
    {
        $data['judul'] = "halaman depan";
        $this->load->view('template/header', $data);
        $this->load->view('index', $data);
        $this->load->view('template/footer', $data);
    }
    public function about()
    {
        $data['judul'] = "halaman about";
        $this->load->view('template/header', $data);
        $this->load->view('index', $data);
        $this->load->view('template/footer', $data);
    }
}
