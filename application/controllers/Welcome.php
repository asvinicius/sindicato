<?php 
defined('BASEPATH') OR exit('No direct');

    class Welcome extends CI_Controller{
        public function index(){
            $this->load->view('template/header');
            $this->load->view('welcome');
            $this->load->view('template/footer');
        }
    }
?>