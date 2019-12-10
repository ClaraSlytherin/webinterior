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
<<<<<<< HEAD
        $data['judul'] = 'Desainer';
        $data['designer'] = $this->Designer_model->getJoinItem();
=======
        $data['judul'] = 'Designer';
>>>>>>> 95278fcac882b63162dc0aa8159cd65be77ab2f3
        $this->load->view('public/templates/header', $data);
        $this->load->view('public/designer/index');
        $this->load->view('public/templates/footer');
    }
}
