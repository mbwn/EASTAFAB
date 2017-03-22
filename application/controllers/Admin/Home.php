<?php
class Home extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }
    
    
    public function index()
    {
        $this->load->view('back/includes/header_inc');
        $this->load->view('back/index');
        $this->load->view('back/includes/footer_inc');
    }
}