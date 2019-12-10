<?php
class Designer extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Designer_model');
    }

    public function index($id = '')
    {
        $data['judul'] = 'Desainer';
        $data['designer'] = $this->Designer_model->getJoinItem();
        $this->load->view('public/templates/header', $data);
        $this->load->view('public/designer/index');
        $this->load->view('public/templates/footer');
    }
}
