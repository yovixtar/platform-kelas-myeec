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
include 'base/koneksi.php';

$sw_default = isset($_GET['page']) ? $_GET['page'] : null;
switch ($sw_default) {
  case 'jawaban':
    include 'app/page/jawaban.php';
    break;

  default:
    include 'app/petunjuk.php';
    break;
}
?>
</body>
</html>