<?php
// $mahasiswa = [
//     ["Heri Cahyono", "180710830101052", "hericahyononew@gmail.com", "Teknik Informatika"],
//     ["Verrel Bramasta", "180710830101053", "bramastaverrel@gmail.com", "Teknik Informatika"]
// ];

// Array Assosiative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri

$artist = [
    [
        "nama" => "Heri Cahyono",
        "jekel" => "Pria",
        "email" => "hericahyononew@gmail.com",
        "kota" => "Kediri",
        "gambar" => "heri.jpg"
    ],
    [
        "nama" => "Verrel Bramasta",
        "jekel" => "Pria",
        "email" => "bramastaverrel@gmail.com",
        "kota" => "Jakarta",
        "gambar" => "verrel.jpg"
    ],
    [
        "nama" => "Boy William",
        "jekel" => "Pria",
        "email" => "boywilliaml@gmail.com",
        "kota" => "Bandung",
        "gambar" => "boy.jpg"
    ],
    [
        "nama" => "Billy Davidson",
        "jekel" => "Pria",
        "email" => "billydavidson@gmail.com",
        "kota" => "Jakarta",
        "gambar" => "billy.jpg"
    ],
    [
        "nama" => "Mark Zuckerberg",
        "jekel" => "Pria",
        "email" => "mark_zuckerberg@gmail.com",
        "kota" => "Inggris",
        "gambar" => "zuck.jpg"
    ],
    [
        "nama" => "Robby Nurdianto",
        "jekel" => "Pria",
        "email" => "robbynurdianto@gmail.com",
        "kota" => "Tangerang",
        "gambar" => "robby.jpg"
    ],
    [
        "nama" => "Ridho Ilahi",
        "jekel" => "Pria",
        "email" => "ridhoilahi@gmail.com",
        "kota" => "Samarinda",
        "gambar" => "ridho.jpg"
    ],
    [
        "nama" => "Sumardiani",
        "jekel" => "Pria",
        "email" => "sumardiani@gmail.com",
        "kota" => "Boyolali",
        "gambar" => "sumar.jpg"
    ],
    [
        "nama" => "Pietro Boselli",
        "jekel" => "Pria",
        "email" => "pietroboselli@gmail.com",
        "kota" => "Kanada",
        "gambar" => "boselli.jpg"
    ],
    [
        "nama" => "Hammy",
        "jekel" => "Pria",
        "email" => "hammy@gmail.com",
        "kota" => "New York",
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
    <title>Daftar Artist</title>
</head>

<body>
    <h1>Daftar Artist</h1>
    <?php foreach ($artist as $art) : ?>
        <ul>
            <li>
                <img src="img/<?= $art["gambar"]; ?>">
            </li>
            <li>Nama : <?= $art["nama"]; ?></li>
            <li>Jenis Kelamin : <?= $art["jekel"]; ?></li>
            <li>Email : <?= $art["email"]; ?></li>
            <li>Kota : <?= $art["kota"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>