<?php 
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['level'])){
}else{
	echo ("<script type='text/javascript'>alert('Anda harus login');document.location='index.php';</script>");
}
?>
<?php if($_SESSION['level']=='admin'){
echo "<center><b>Welcome Admin</b></center><br>";
?>
<center><a href="tampilmember.php">Menu User</a></center>
<center><a href="tampilbarang.php">Menu admin</a></center>
<center><a href="tampilkategori.php">Menu kategori</a></center>
<center><a href="tampiltransaksi1.php">Menu Transaksi</a></center>
<center><a href="index.php">log out</a></center>
<?php }else{
echo "<center><b>Welcome User</b></center><br>";
?>
<center><a href="tampil_transaksi1.php">Menu Transaksi</a></center>
<center><a href="index.php">log out</a></center>
<?php } ?>