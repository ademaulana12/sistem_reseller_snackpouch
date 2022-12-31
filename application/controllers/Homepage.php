<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Homepage extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Database_model', 'dbm');
    $email = $this->session->userdata('email');
    if (empty($email)) {
      redirect('registrasi');
    }
  }

  public function index()
  {
    $email = $this->session->userdata('email');
    $data['email'] = $this->session->userdata('email');
    $data['get_data'] = $this->dbm->get_data('users')->result_array();
    $data['get_data_where'] = $this->dbm->get_data_where('users', 'email', $email)->result_array();
    $this->load->view('layout/header', $data);
    $this->load->view('layout/navbar', $data);
    $this->load->view('layout/sidebar', $data);
    $this->load->view('homepage', $data);
    $this->load->view('layout/footer', $data);
  }
}


/* End of file Main.php */
/* Location: ./application/controllers/Main.php */