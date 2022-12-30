<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>snackpouch.id</title>

	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/fontawesome-free/css/all.min.css">
	<!-- icheck bootstrap -->
	<link rel="stylesheet" href="<?= base_url('assets/') ?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?= base_url('assets/') ?>dist/css/adminlte.min.css">
</head>

<body>
	<nav class="navbar navbar-expand-md navbar-light bg-white shadow">
		<div class="container-fluid">
			<a class="navbar-brand" href="<?= base_url('homepage') ?>">
				<img src="<?= base_url('assets/image/logo.png') ?>" width="40" height="50" alt="">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link text-bold" href="#">Snack Pouch</a>
					</li>
				</ul>
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="#">Daftar Harga Reseller</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#" target="_blank">Bantuan</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="register-page">
		<div class="register-box">

			<div class="card">
				<div class="card-body register-card-body">

					<h4 class="login-box-msg text-bold">Yuk Registrasi Sekarang</h4>

					<form action="#" method="post">
						<div class="input-group mb-3">
							<input type="text" class="form-control" placeholder="Nama Lengkap">
							<div class="input-group-append">
								<div class="input-group-text">
									<span class="fas fa-user"></span>
								</div>
							</div>
						</div>
						<div class="input-group mb-3">
							<input type="email" class="form-control" placeholder="Email">
							<div class="input-group-append">
								<div class="input-group-text">
									<span class="fas fa-envelope"></span>
								</div>
							</div>
						</div>
						<div class="input-group mb-3">
							<input type="email" class="form-control" placeholder="Nomor Telepon">
							<div class="input-group-append">
								<div class="input-group-text">
									<span class="fas fa-phone"></span>
								</div>
							</div>
						</div>
						<div class="input-group mb-3">
							<input type="password" class="form-control" placeholder="Password">
							<div class="input-group-append">
								<div class="input-group-text">
									<span class="fas fa-lock"></span>
								</div>
							</div>
						</div>
						<div class="input-group mb-3">
							<input type="password" class="form-control" placeholder="Retype password">
							<div class="input-group-append">
								<div class="input-group-text">
									<span class="fas fa-lock"></span>
								</div>
							</div>
						</div>
						<button type="submit" class="btn btn-primary btn-block">Registrasi</button>
					</form>

					<div class="pt-2">
						<p>Sudah punya akun ? <a href="#" class="text-center" data-toggle="modal" data-target="#modal_login">Klik disini</a></p>
					</div>
				</div>
				<!-- /.form-box -->
			</div><!-- /.card -->
		</div>
	</div>

	<div class="modal fade" id="modal_login" tabindex="-1">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Yuk Login....</h5>
				</div>
				<div class="modal-body">
					<form action="#" method="post">
						<div class="input-group mb-3">
							<input type="email" class="form-control" placeholder="Email">
							<div class="input-group-append">
								<div class="input-group-text">
									<span class="fas fa-envelope"></span>
								</div>
							</div>
						</div>
						<div class="input-group mb-3">
							<input type="password" class="form-control" placeholder="Password">
							<div class="input-group-append">
								<div class="input-group-text">
									<span class="fas fa-lock"></span>
								</div>
							</div>
						</div>
						<p>Lupa Password ? <a href="#">Klik Disini</a></p>
						<button type="submit" class="btn btn-primary btn-block">Register</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- /.register-box -->

	<!-- jQuery -->
	<script src="<?= base_url('assets/') ?>plugins/jquery/jquery.min.js"></script>
	<!-- Bootstrap 4 -->
	<script src="<?= base_url('assets/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
	<!-- AdminLTE App -->
	<script src="<?= base_url('assets/') ?>dist/js/adminlte.min.js"></script>
</body>

</html>