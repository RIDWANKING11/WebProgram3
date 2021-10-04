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
        $this->load->view('v-header', $data);
        $this->load->view('v-index', $data);
        $this->load->view('v-footer', $data);
    }
    public function about()
    {
        echo "hi";
        #   $data['judul'] = "halaman about";
        #$this->load->view('v-header', $data);
        # $this->load->view('v-index', $data);
        # $this->load->view('v-footer', $data);
    }
}
