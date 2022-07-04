<!DOCTYPE html>
<html>
<head>
	<title>PENDAFTARAN SISWA BARU SMA YUPPENTEK 1 TANGERANG</title>
	
	<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
	
</head>

<body>

<nav class="navbar navbar-dark bg-danger">
	<div class="container">
	  <a class="navbar-brand" href="beranda.php">PENDAFTARAN SISWA BARU SMA YUPPENTEK 1 TANGERANG </a>
  	</div>
</nav>

<div class="container">

<?php if(isset($_GET['status'])): ?>
	<p>
		<?php
			if($_GET['status'] == 'sukses'){
				echo "<div class='alert alert-success' role='alert'>
						  Pendaftaran Siswa Berhasil!
						</div>";
			} else {
				echo "<div class='alert alert-danger' role='alert'>
						  Pendaftaran Siswa Gagal!
						</div>";
			}
		?>
	</p>
<?php endif; ?>

	<div class="jumbotron mt-3">
	  <h1 class="display-4 mx-auto">PENDAFTARAN SISWA BARU</h1>
	  <hr class="my-3">
	  <p>SMA YUPPENTEK 1 TANGERANG </p>
	  <a class="btn btn-primary btn-md" href="pendafatran.php" role="button">Pendaftaran</a>
	</div>
	
</div>	
</body>
</html>
