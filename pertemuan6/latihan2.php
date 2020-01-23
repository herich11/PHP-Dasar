<?php
// $mahasiswa = [
//     ["Heri Cahyono", "180710830101052", "hericahyononew@gmail.com", "Teknik Informatika"],
//     ["Verrel Bramasta", "180710830101053", "bramastaverrel@gmail.com", "Teknik Informatika"]
// ];

// Array Assosiative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri

$mahasiswa = [
    [
        "nama" => "Heri Cahyono",
        "nim" => "180710830101052",
        "email" => "hericahyononew@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "heri.jpg"
    ],
    [
        "nama" => "Verrel Bramasta",
        "nim" => "180710830101053",
        "email" => "bramastaverrel@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "verrel.jpg"
    ],
    [
        "nama" => "Boy William",
        "nim" => "180710830101054",
        "email" => "boywilliaml@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "boy.jpg"
    ],
    [
        "nama" => "Billy Davidson",
        "nim" => "180710830101055",
        "email" => "billydavidson@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "billy.jpg"
    ],
    [
        "nama" => "Mark Zuckerberg",
        "nim" => "180710830101056",
        "email" => "mark_zuckerberg@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "zuck.jpg"
    ],
    [
        "nama" => "Robby Nurdianto",
        "nim" => "180710830101057",
        "email" => "robbynurdianto@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "robby.jpg"
    ],
    [
        "nama" => "Ridho Ilahi",
        "nim" => "180710830101058",
        "email" => "ridhoilahi@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "ridho.jpg"
    ],
    [
        "nama" => "Sumardiani",
        "nim" => "180710830101059",
        "email" => "sumardiani@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "sumar.jpg"
    ],
    [
        "nama" => "Pietro Boselli",
        "nim" => "180710830101060",
        "email" => "pietroboselli@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "boselli.jpg"
    ],
    [
        "nama" => "Hammy",
        "nim" => "180710830101061",
        "email" => "hammy@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "hammy.jpg"
    ],

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
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
            <li>Nama : <?= $mhs["nama"]; ?></li>
            <li>NIM : <?= $mhs["nim"]; ?></li>
            <li>Email : <?= $mhs["email"]; ?></li>
            <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>