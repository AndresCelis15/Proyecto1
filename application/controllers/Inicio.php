<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller{

    public function home(){
        $this->load->view('menu/view_header');
        $this->load->view('administra/view_home');
        $this->load->view('menu/view_footer');
    }
}