<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Welcome extends CI_Controller {
        public function index()
        {
            // $this->load->view('admin/login/index');
            $this->load->view('index.html');
            // redirect('admin/login');
        }
    }