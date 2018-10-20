<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title> Daftar Mahasiswa </title>
	<link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
</head>
<body>

	<div class="container">
		<h4><center> DAFTAR MAHASISWA INFORMATION SYSTEMS </center></h4>
		<table class="table table-striped">
			<thead>
				<tr>
					<th scope="col"> Nomor ID </th>
					<th scope="col"> Nama Mahasiswa </th>
					<th scope="col"> Majors </th>
				</tr>	
			</thead>

			<?php 

			$count = 0;
			foreach ($mahasiswa -> result() as $row) :
				$count++;

			 ?>
			 <tr>
			 	<th scope="row"> <?php echo $count; ?></th>
			 	<td><?php echo $row -> nama; ?> </td>
			 	<td><?php echo $row -> jurusan; ?> </td>
			 </tr>
			<?php endforeach; ?>
		</tbody>
		</table>

	</div>

	<script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap/min.js'); ?>"></script>

</body>
</html>