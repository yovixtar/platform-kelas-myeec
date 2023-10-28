<?php
$stat = mysqli_query($l, "SELECT * FROM jawaban WHERE id=".$_GET['no']." AND status=1 ");
while ($data=mysqli_fetch_array($stat)) {
?>
<div id="modalSoal" class="w3-modal">
  <div class="w3-modal-content w3-animate-top w3-card-8">
    <header class="w3-container w3-teal"> 
      <span onclick="document.getElementById('modalSoal').style.display='none'" 
      class="w3-closebtn" style="font-size: 30px">&times;</span>
      <h2>Soal Nomor <?php echo $_GET['no'] ?></h2>
    </header>
    <div class="w3-container">
      <img src="img/<?php echo $_GET['no'] ?>.PNG" style="width: 100%">
    </div>
  </div>
</div>

<center>
<div class="w3-card-4" style="width: 90%">

<div class="w3-container w3-blue">
  <h2>Nomor - <?php echo $_GET['no'] ?></h2>
</div>
<br />
<button class="w3-btn w3-teal" onclick="document.getElementById('modalSoal').style.display='block'">Lihat Soal</button>
<br />
<h1 style="font-family: arial;font-size: 100px;margin-bottom: 0px"><?php echo $data['jawaban'] ?></h1>
<a href="koreksi.php?bs=2&no=<?php echo $_GET['no'] ?>">
<button class="w3-btn w3-blue" style="font-size: 30px">Benar</button>
</a>
<br />
<br />
<a href="koreksi.php?bs=1&no=<?php echo $_GET['no'] ?>">
<button class="w3-btn w3-red" style="font-size: 30px">Salah</button>
</a>
<br />
<br />
</div>
<?php
}
?>