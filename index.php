<?php
	//koneksi Database
	$server = "localhost";
	$user = "root";
	$pass = "";
	$database = "dbl_latihan";

?>




<!DOCTYPE html>
<html>
<head>
	<title>CRUD 2021 PHP & MySQL + Bootstrap 4</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">

	<h1 class="text-center">CRUD PHP & MySQL + Bootstrap 4</h1>
	

<!-- Awal Card Tabel -->
	<div class="card mt-3">
	  <div class="card-header bg-primary text-white">
	    Form Input Data Mahasiswa
	  </div>
	  <div class="card-body">
	  		<form method="post" action="">
	  			<div class="form-grup">
	  				<label>Nim</label>
	  				<input type="text" name="tnim" class="form-control" placeholder="Input Nim anda disini!" required="">
	  			</div>
	  			<div class="form-grup-group">
	  				<label>Nama</label>
	  				<input type="text" name="tnama" class="form-control" placeholder="Input Nama anda disini!" required="">
	  			</div>
	  			<div class="form-grup-group">
	  				<label>Alamat</label>
	  				<textarea class="form-control" name="talamat" placeholder="Input Alamat anda disini!"></textarea>
	  			</div>
	  			<div class="form-grup">
	  				<label>Program Studi</label>
	  				<select class="form-control" name="tprodi">
	  					<option></option>
	  					<option value="D3-MI">D3-MI</option>
	  					<option value="S1-SI">S1-SI</option>
	  					<option value="S1-TI">S1-TI</option>
	  				</select>
	  			</div>

	  			<button type="submit" class="btn btn-success" name="bsimpan">Simpan</button>
	  			<button type="reset" class="btn btn-danger" name="breset">Kosongkan</button>

	  		</form>
	  	</div>
	  </div>
<!--Akhir Card Form-->

<!-- Awal Card Tabel -->
	<div class="card mt-3">
	  <div class="card-header bg-success text-white">
	    Daftar Mahasiswa
	  </div>
	  <div class="card-body">
	  		
	  	<table class="table table-boordered table-striped">
	  		<tr>
	  			<th>Nomor</th>
	  			<th>Nim</th>
	  			<th>Nama</th>
	  			<th>Alamat</th>
	  			<th>Program Studi</th>
	  			<th>Aksi</th>

	  		</tr>
	  		
	  		<tr>
	  			<td>1</td>
	  			<td>19510015</td>
	  			<td>Nahdatul Umma</td>
	  			<td>Jl. Joyo Pranoto</td>
	  			<td>S1-SI</td>
	  			<td>
	  				<a href="#" class="btn btn-warning"> Edit </a>
	  				<a href="#" class="btn btn-danger"> Hapus </a>
	  			</td>

	  		</tr>
	  		<tr>
	  			<td>2</td>
	  			<td>19510040</td>
	  			<td>Yuyun Febrianti</td>
	  			<td>Mertojoyo Blok L</td>
	  			<td>S1-SI</td>
	  			<td>
	  				<a href="#" class="btn btn-warning"> Edit </a>
	  				<a href="#"class="btn btn-danger"> Hapus </a>
	  			</td>
	  		</tr>
	  		<tr>
	  			<td>3</td>
	  			<td>19510019</td>
	  			<td>Ima Arisma</td>
	  			<td>Blimbing</td>
	  			<td>S1-SI</td>
	  			<td>
	  				<a href="#"class="btn btn-warning"> Edit </a>
	  				<a href="#"class="btn btn-danger"> Hapus </a>
	  			</td>
	  		</tr>
	  	</table>
	  	</div>
	  </div>
<!--Akhir Card Tabel-->
</div>


<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>