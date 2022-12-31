<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Homepage extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
  }

  public function index()
  {
    $this->load->view('layout/header');
    $this->load->view('layout/navbar');
    $this->load->view('layout/sidebar');
    $this->load->view('homepage');
    $this->load->view('layout/footer');
  }
}


/* End of file Main.php */
/* Location: ./application/controllers/Main.php */