<?php
include 'base/koneksi.php';
if (empty($_GET['bs']) && empty($_GET['no'])) {
	?>
	<script type="text/javascript">
		alert('Ada yang salah ?');
		document.location='jawabanenglishku.php';
	</script>
	<?php
}else{
if ($_GET['no']==25) {
	$stat=mysqli_query($l, "UPDATE jawaban SET bs=".$_GET['bs']." WHERE id=".$_GET['no']."");
	if ($stat) {
		?>
	<script type="text/javascript">
		alert('SELESAI ! :)');
		document.location='nilai.php';
	</script>
	<?php
	}
}else{
	$stat=mysqli_query($l, "UPDATE jawaban SET bs=".$_GET['bs']." WHERE id=".$_GET['no']."");
	if ($stat) {
	$next=$_GET['no']+1;
		?>
	<script type="text/javascript">
		document.location='jawabanenglishku.php?page=jawaban&no=<?php echo $next ?>';
	</script>
	<?php
	}
}
}
?>