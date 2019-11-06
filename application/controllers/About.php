<?php
class About extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index($id = '')
    {
        $this->load->view('public/templates/header');
        $this->load->view('public/about/index');
        $this->load->view('public/templates/footer');
    }
}