<!DOCTYPE html>
<html>
<head>
<style>
th{
    color: #FF7D90;
    font-weight: bold;
    text-align: center;
	width: 1%;
	background: #3A3B3C;
	height: 20px
}

td{
    height: 30px;
    width: 1%;
    background-color: #FFF9EA;
	text-align: center;
	color: black;
}
body{
    margin:0;
    background-color: #B6D8F2 ;
    background-size:100%;
	font-family: 'roboto';
	color: #121212;
}
 
.judul{
	background: #B6D8F2;
	padding: 10px;
	text-align: center;
 
}

h1{
    height: 50px;
    width: 100%;
}

.judul h1,h2,h3,h4{
	height: 15px;
}

center{
    font-weight:bold;
    font-family:'roboto';
    font-size: medium;
    color:#121212;
}

table, td, th {
  border: 1px solid #3A3B3C;
}

table {
  width: 60%;
  border-collapse: collapse;
}

</style>
</head>
<head>
	<title>Vollyball Haikyuu! Members Database</title>
</head>
<body>
	<div class="judul">
	<center>
		<h1>Creating Webhosting with CI Codeigniter</h1>
		<h2>Displays Data From Database</h2>
		<h3>Mei, 2021 - RnD Second Meeting</h3>
		<h4>Faza Salsabilawahyu - A020022</h4>
	</center>

	</div>
	<center><?php echo anchor('crud/tambah','Input a New Data'); ?></center>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>Name</th>
			<th>Team</th>
			<th>Position</th>
			<th>Option</th>
		</tr>
		<?php 
		$no = 1;
		foreach($user as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->nama ?></td>
			<td><?php echo $u->alamat ?></td>
			<td><?php echo $u->pekerjaan ?></td>
			<td>
				<?php echo anchor('crud/edit/'.$u->id,'Edit'); ?>
				<?php echo anchor('crud/hapus/'.$u->id,'Delete'); ?>		
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>