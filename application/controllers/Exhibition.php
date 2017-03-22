<?php

class Exhibition extends CI_Controller{
    
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
            $this->load->view('front/exhibition');
            $this->load->view('front/includes/footer',$this->data);
            
        }
    
     public function exhibition2011()
        {
            $this->load->view('front/includes/header',$this->data);
            $this->load->view('front/exhibition/exhibition-2011');
            $this->load->view('front/includes/footer',$this->data);
            
        }
        public function exhibition2013()
        {
            $this->load->view('front/includes/header',$this->data);
            $this->load->view('front/exhibition/exhibition-2013');
            $this->load->view('front/includes/footer',$this->data);
            
        }
        public function exhibition2015()
        {
            $this->load->view('front/includes/header',$this->data);
            $this->load->view('front/exhibition/exhibition-2015');
            $this->load->view('front/includes/footer',$this->data);
            
        }
    
        public function exhibition2017()
        {
            $this->load->view('front/includes/header',$this->data);
            $this->load->view('front/exhibition/exhibition-2017');
            $this->load->view('front/includes/footer',$this->data);
            
        }
    
        public function exhibition2017SW()
        {
            $this->load->view('front/includes/header',$this->data);
            $this->load->view('front/exhibition/exhibition-2017-Swahili');
            $this->load->view('front/includes/footer',$this->data);
            
        }
        public function exhibition2017EN()
        {
            $this->load->view('front/includes/header',$this->data);
            $this->load->view('front/exhibition/exhibition-2017-English');
            $this->load->view('front/includes/footer',$this->data);
            
        }
    
    
      
}
