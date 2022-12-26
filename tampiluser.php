<?php
	include 'koneksi.php';
	$no =1;
	if(isset($_POST['cari'])){
	//$data = mysqli_query($koneksi,"select * from login where username='".$_POST['nama']."'");
	$data = mysqli_query($koneksi,"select * from user where nama like '%".$_POST['nama']."%'");
	}else{
	$data = mysqli_query($koneksi,"select * from user");
	}
	?>
	<form method="POST">
	<table>
	<tr>
		<td><input type="text" name="nama"></td>
		<td><input type="submit" name="cari"></td>
		</tr>
	</table>
<html>
	<head>
	<title>Zodiac.com</title>
    <link rel="stylesheet" type="text/css" href="bg.css">
	</head>
	<body>
	<h2>Pemograman 3 2022</h2>
	<br/>
	<a href="user.php">+ TAMBAH USER</a>
	<br/>
	<table border="1">
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Password</th>
		<th>level</th>
		<th>status</th>
		<th>OPSI</th>
	</tr>
	<?php
	while($d= mysqli_fetch_array($data)){
		?>
		<form method="POST">
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $d['nama']; ?></td>
			<td><?php echo $d['password']; ?></td>
			<td><?php echo $d['level']; ?></td>
			<td><?php echo $d['status']; ?></td>
			<td>
				<a href="edit_user.php?id_user=<?php echo $d['id_user']; ?>">EDIT</a>
				<a href="hapus_user.php?id_user=<?php echo $d['id_user']; ?>">HAPUS</a>
			<td>
		</tr>
	<?php
	}
	?>
	</table>
	</body>
	</html>
	</form>