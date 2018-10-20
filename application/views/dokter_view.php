<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title> Daftar Dokter </title>
	<link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
</head>
<body>

	<div class="container">
		<h3><center> Daftar Dokter Spesialis dan Rumah Sakit </center></h3>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th scope="col"> No </th>
					<th scope="col"> Nama Dokter </th>
					<th scope="col"> Spesialis </th>
					<th scope="col"> Rumah Sakit </th>
				</tr>
				<?php 

					$count = 0;
					foreach ( $dokter -> result() as $row ) :
						$count++;

				 ?>
				 <tr>
				 	<th scope="row"> <?php echo $count; ?></th>
				 	<td> <?php echo $row -> nama_dokter; ?> </td>
				 	<td> <?php echo $row -> spesialis; ?> </td>
				 	<td> <?php echo $row -> tempat_tugas; ?> </td>
				 </tr>
				<?php endforeach; ?>
			</thead>
			
		</tbody>
		</table>
	</div>

	<script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>

</body>
</html>