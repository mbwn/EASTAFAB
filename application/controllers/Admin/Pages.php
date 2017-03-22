<?php
class Pages extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }
    
    
    public function contact()
    {   
        $this->load->view('back/contact');
    } 
    public function home()
    {   
        $this->load->view('back/home');
    } 
    public function about()
    {   
        $this->load->view('back/about');
    }
}