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
<center><a href="tampilan_member.php">Menu User</a></center>
<center><a href="tampilan_barang.php">Menu admin</a></center>
<center><a href="tampilan_kategori.php">Menu kategori</a></center>
<center><a href="tampilan_transaksi.php">Menu Transaksi</a></center>
<center><a href="index.php">log out</a></center>
<?php }else{
echo "<center><b>Welcome User</b></center><br>";
?>
<center><a href="tampilan_member.php">Menu User</a></center>
<center><a href="tampilan_barang.php">Menu admin</a></center>
<center><a href="tampilan_kategori.php">Menu kategori</a></center>
<center><a href="tampilan_transaksi.php">Menu Transaksi</a></center>
<center><a href="index.php">log out</a></center>
<?php } ?>