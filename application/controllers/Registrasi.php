<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Registrasi extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Database_model', 'dbm');
	}
	public function index()
	{
		$this->load->view('registrasi');
	}

	// Registrasi Fungsi
	public function register()
	{
		$nama = htmlspecialchars($this->input->post('nama') ?? '');
		$email = htmlspecialchars($this->input->post('email') ?? '');
		$telepon = $this->input->post('telepon');
		$password = $this->input->post('password');

		$data = [
			'id_user' => rand(111111, 999999),
			'nama' => $nama,
			'email' => $email,
			'telepon' => $telepon,
			'password' => $password,
			'date_create' => date('d-m-Y'),
			'role' => 9
		];

		$insert = $this->dbm->insert_data('user', $data);

		if ($insert) {
			echo "<script>alert('Registrasi berhasil'); window.location.href = 'http://seller.snackpouch.id/'</script>";
		} else {
			echo "<script>alert('Registrasi Tidak Berhasil'); window.location.href = 'http://seller.snackpouch.id/'</script>";
		}
	}
}
