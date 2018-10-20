<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title> Input Data Dokter </title>
	<link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">

</head>
<body>

	<div class="container">
		<h3><center> Input Data Dokter </center></h3>
		<form action="<?php echo site_url('dokter/save');?>" method="post">
			<div class="form-group">
				<label> Nama Dokter </label>
				<input type="text" class="form-control" name="nama_dokter" placeholder="Isi Nama Dokter">
			</div>
			<div class="form-group">
				<label> Spesialis </label>
				<input type="text" class="form-control" name="spesialis" placeholder="Spesialis">
			</div>
			<div class="form-group">
				<label> Rumah Sakit </label>
				<input type="text" class="form-control" name="tempat_tugas" placeholder="Rumah Sakit"> <br>
			<center><button type="submit" class="btn btn-primary"> Submit </button></center>
		</form>
	</div>

	<script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>

</body>
</html>