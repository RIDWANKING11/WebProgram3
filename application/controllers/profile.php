<?php
defined('BASEPATH') or exit('No direct script access allowed');

class profile extends CI_Controller
{
    public function index()
    {
        $this->load->view('profile');
    }
    public function about()
    {
        $this->load->view('about');
    }
}
