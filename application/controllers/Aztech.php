<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aztech extends CI_Controller {
   public function __construct() {
        parent::__construct();
        $this->load->helper('text');
    }
   public function index(){
        
       $this->load->view('header');
       $this->load->view('test');
       $this->load->view('footer');
    }
   
   public function ach(){
       $this->load->view('header');
       $this->load->view('iachi');
        $this->load->view('footer');
   }
   
   public function services(){
       $this->load->view('header');
       $this->load->view('allservices');
       $this->load->view('footer');
   }
}