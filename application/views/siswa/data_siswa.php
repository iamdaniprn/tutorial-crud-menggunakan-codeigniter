<!DOCTYPE html>
<html>
<head>
	<title>Belajar CRUD</title>
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h2>Belajar CRUD</h2>
		<h3>Data Siswa</h3>
		<a href="<?php echo base_url() ?>index.php/siswa/tambah"><button type="button" class="btn btn-primary btn-sm">Tambah Siswa</button></a>
		<br><br>
		<table id="data-table" class="table table-striped table-bordered" style="width:100%">
		    <thead class="thead-dark">
		        <tr>
		            <th>No</th>
		            <th>Nama</th>
		            <th>Jenis Kelamin</th>
		            <th>Alamat</th>
		            <th>Opsi</th>
		        </tr>
		    </thead>
		    <tbody>
		    <?php $no=1; foreach ($data_siswa as $row) {
		    ?>
		        <tr>
		            <td><?php echo $no++; ?></td>
		            <td><?php echo $row->nama ?></td>
		            <td><?php echo $row->jenis_kelamin ?></td>
		            <td><?php echo $row->alamat ?></td>
		            <td>
		            	<a href="<?php echo base_url() ?>index.php/siswa/lihat/<?php echo $row->id_siswa ?>"><button type="button" class="btn btn-success btn-sm">Lihat</button></a>
		            	<a href="<?php echo base_url() ?>index.php/siswa/edit/<?php echo $row->id_siswa ?>"><button type="button" class="btn btn-primary btn-sm">Edit</button></a>
		            	<a href="<?php echo base_url() ?>index.php/siswa/hapus/<?php echo $row->id_siswa ?>"><button type="button" class="btn btn-danger btn-sm">Hapus</button></a>
		            </td>
		        </tr>
		    <?php } ?>
		    </tbody>
		</table>
	</div>

</body>
</html>