<?php
$mahasiswa = [
    ["Heri Cahyono", "088888888852", "Teknik Informatika", "hericahyononew@gmail.com"],
    ["Ahmad Habib", "088888888853", "Teknik Industri", "ahmadhabib@gmail.com"],
    ["Al Ibrahim", "088888888854", "Teknik Sipil", "alibrahim@gmail.com"]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<!-- <ul>
<?php foreach($mahasiswa as $mhs) : ?>
<li><?= $mhs; ?></li>
<?php endforeach; ?>
</ul> -->

<?php foreach( $mahasiswa as $mhs) : ?>
<ul>
<li>Nama : <?= $mhs[0]; ?></li>
<li>NIM : <?= $mhs[1]; ?></li>
<li>Jurusan : <?= $mhs[2]; ?></li>
<li>Email : <?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>
    
</body>
</html>