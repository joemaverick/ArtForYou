<?php
//application/controllers/Index.php

class Index extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $this->config->set_item('title','Home Page!');
        $data['title'] = 'Main Home Page';
        $this->load->view('index/index', $data);
        
    }
    public function about()
    {
        $this->config->set_item('title','About<br>Us!');
        $data['title'] = 'About Us';
        $this->load->view('index/about', $data);
    }
    public function Tutorial()
    {
        $this->config->set_item('title','Tutorial!');
        $data['title'] = 'Tutorial';
        $this->load->view('index/Tutorial', $data);
    }
   
    
}
