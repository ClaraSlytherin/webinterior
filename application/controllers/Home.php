<?php
class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index($id = '')
    {
        $this->load->view('public/templates/header');
        $this->load->view('public/templates/dashboard');
        $this->load->view('public/templates/footer');
    }
}
