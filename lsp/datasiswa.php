<?php
	require "layout/header.php";
	include("config.php");
?>

<style type="text/css">           
            .content {
	            width: 100%;
	            padding: 10px;
	            box-sizing: border-box;
            }
            .box{
	            background-color: #fff;
	            border: 1px solid #ddd;
	            padding: 5px;
	            box-sizing: border-box;
	            margin: 5px 0 25px;
            }           
            .table {
	            width:100%;
	            border-collapse: collapse;
	            border: 1px solid #dddd;
            }
        </style>

<div class="container mt-3">
	
<section class="content">
	<div class="jumbotron mt-3">
	<header>
	<h3> DATA PENDAFTARAN SISWA</h3>
	</header>
	<table class="table" border="1">
	<thead class="thead-dark">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Email</th>
			<th>wa</th>
			<th>foto</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
			<?php
			// buat query untuk ambil data dari database
				$no = 1;
				$sql = mysqli_query($db, "SELECT * FROM calon_siswa");
				while ($row = mysqli_fetch_array($sql)) {
			?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $row['nama']?></td>
				<td><?php echo $row['email']?></td>
				<td><?php echo $row['wa']?></td>
				<td>
				<img src="potosiswa/<?= $row['foto']; ?>" width="70">
				</td>
				
				<td>
					<a href="biodata.php?id=<?php echo $row['id'] ?>" class="btn btn-primary"><i class="fas fa-book"></i>Detail&nbsp;&nbsp;</a>
					<a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-warning"><i class="fas fa-edit"></i>ubah&nbsp;&nbsp;</a>
					<a href="hapus.php?id=<?php echo $row['id'] ?>" class="btn btn-danger" onclick="return confirm('YAKIN INGIN DIHAPUS??')"><i class="fas fa-trash-alt"></i> hapus</a>
				</td>
			</tr>

			<?php } ?>
		
	</tbody>
	</table>
		<a href="pendafatran.php" class="btn btn-md btn-primary">TAMBAH DATA SISWA</a>
	</div>
</section>
	<p>Total Data Siswa : <?php echo mysqli_num_rows($sql) ?></p>
</div>	
</body>
</html>
