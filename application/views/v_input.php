<!DOCTYPE html>
<html>
<head>
<style>
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
    height: 15px;
    width: 100%;
}

.judul h1,h2,h3,h4{
	height: 15px;
}

</style>
</head>

<head>
	<title>Vollyball Haikyuu! Members Database</title>
</head>
<body>
	<center>
		<h1>Creating Webhosting with CI Codeigniter</h1>
		<h2>Displays Data From Database</h2>
		<h3>Mei, 2021 - RnD Second Meeting</h3>
		<h4>Faza Salsabilawahyu - A020022</h4>
	</center>
	<form action="<?php echo base_url(). 'index.php/crud/tambah_aksi'; ?>" method="post">
		<table style="margin:20px auto;">
			<tr>
				<td>Name</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Team</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>Position</td>
				<td><input type="text" name="pekerjaan"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Add"></td>
			</tr>
		</table>
	</form>	
</body>
</html>