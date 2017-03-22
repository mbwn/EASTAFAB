<?php

class About extends CI_Controller{
        function __construct()
        {
            parent::__construct();
            $this->load->helper('url'); //include relevant libraries in the contructor of your controller


            $this->data['title'] = 'EASTAFAB &dash; The East Africa Art Biennale Association';
            $this->data['credit'] = '&copy; '.date('Y').' EASTAFAB. All Rights Reserved.';

        }
        public function index()
        {

            $this->load->view('front/includes/header',$this->data);
            $this->load->view('front/about');
            $this->load->view('front/includes/footer',$this->data);

        }
        
        public function profile_jengo()
        {
            $this->load->view('front/includes/header',$this->data);
            $this->load->view('front/profile_jengo');
            $this->load->view('front/includes/footer',$this->data);
        } 
        public function profile_yves()
        {
            $this->load->view('front/includes/header',$this->data);
            $this->load->view('front/profile_yves');
            $this->load->view('front/includes/footer',$this->data);
        } 
        public function profile_stephen()
        {
            $this->load->view('front/includes/header',$this->data);
            $this->load->view('front/profile_stephen');
            $this->load->view('front/includes/footer',$this->data);
        }
        public function profile_kilonzo()
        {
            $this->load->view('front/includes/header',$this->data);
            $this->load->view('front/profile_kilonzo');
            $this->load->view('front/includes/footer',$this->data);
        }
      
    
}

?>