<?php

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jenisKelamin = $_POST['jenis_kelamin'];
$programstudi = $_POST['programstudi'];
$keahlian = $_POST['keahlian'];
$domisili = $_POST['domisili'];
$email = $_POST['email'];

?>

<h1>Terima Kasih Sudah Mendaftar di IT Club Data Science</h1>
<h5>Nama Lengkap : <?php echo $nama ?></h5>
<h5>NIM : <?php echo $nim ?></h5>
<h5>Jenis Kelamin : <?php echo $jenisKelamin ?></h5>
<h5>Program Studi : <?php echo $programstudi ?></h5>
<h5>Keahlian : <?php echo $keahlian ?></h5>
<h5>Domisili : <?php echo $domisili ?></h5>
<h5>Email : <?php echo $email ?></h5>