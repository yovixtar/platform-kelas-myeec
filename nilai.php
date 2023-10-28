<?php
include 'base/koneksi.php';

	if (1+1==2) {
		$stat1=mysqli_query($l,"SELECT *, COUNT(*) AS total FROM jawaban WHERE bs=2");
		while ($data1=mysqli_fetch_array($stat1)) {
			?>
		<h1>Jumlah Benar : <?php echo $data1['total'] ?></h1>
			<?php
	
	if (2+1==3) {
		$stat2=mysqli_query($l,"SELECT *, COUNT(*) AS total FROM jawaban WHERE bs=1");
		while ($data2=mysqli_fetch_array($stat2)) {
			?>
		<h1>Jumlah Salah : <?php echo $data2['total'] ?></h1>
			
			<?php
	
	?>
<h1>Nilai :</h1>
<?php $nilai=$data1['total']*4; ?>
<h1 style="font-family: arial;font-size: 100px;margin-bottom: 0px"><?php echo $nilai ?></h1>
<br />
<br />
<p>*Nilai = Benar x 4</p>
	<?php
}
}
}
}
?>

