<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="Shortcut Icon" href="/favicon.ico" type="image/x-icon" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="stylesheet" type="text/css" href="assets/w3.css">
	<script type="text/javascript">
		
	</script>
	<style type="text/css">
		
	</style>
</head>
<body>
<?php
if (isset($_POST['masuk'])) {
	if ($_POST['pin']=='6969') {
		?>
		<script type="text/javascript">
			document.location='jawabanenglishku.php';
		</script>
		<?php
	}else{
		?>
		<script type="text/javascript">
			alert('PIN Salah :p !');
			document.location='index.php';
		</script>
		<?php
	}
}
?>
<br />
<center>
<div class="w3-card-4" style="width: 90%">

<div class="w3-container w3-blue">
  <h2>Masukan Pin</h2>
</div>

<form class="w3-container" action="" method="POST">
<br />
<input class="w3-input" type="number" name="pin" maxlength="4">
<br />
<input type="submit" name="masuk" class="w3-btn w3-blue" value="Lihat Jawaban Khazim">
<br />
<br />

</form>

</div>
</center>
</body>
</html>