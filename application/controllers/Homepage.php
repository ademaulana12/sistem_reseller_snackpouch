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
    $this->load->view('homepage');
  }
}


/* End of file Main.php */
/* Location: ./application/controllers/Main.php */