<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contoh1 extends CI_Controller
{
    public function index()
    {
        $this->load->view('index');
    }
}
