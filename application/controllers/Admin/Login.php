<?php
class Login extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
    }
    
    
    public function index()
    {
        $this->load->view('back/includes/header_inc');
        $this->load->view('back/login_view');
        $this->load->view('back/includes/footer_inc');
    }
    
    function user_login(){
        
        
        
    }
}