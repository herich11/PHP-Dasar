<?php
// Pertemuan Dasar PHP
// Sintaks PHP

// Standar Output
// echo, print
// print_r
// var_dump

// Penulisan Sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP

// Variabel dan Tipe Data
// Variabel
// tidak boleh diawali dengan angka, tapi boleh mengandung angka
$nama = "Heri Cahyono";
// echo "Halo, nama saya $nama";

// Operator
// aritmatika
// + - * / %
// $x = 10;
// $y = 20;
// echo $x * $y;

// penggabung string / concatenatiom /concat
// $nama_depan = "Heri";
// $nama_belakang = "Cahyono"
// echo $nama_depan . ' ' . $nama_belakang;

// Assignment
// =, +=, -=, *=, /=, %=, .=
// $x =1;
// $x -=5;
// echo $x;
// $nama = "Heri";
// $nama .= " ";
// $nama .= "Cahyono";
// echo $nama;

//  Perbandingan
// <, >, <=, >=, ==
// var_dump(1=="1");

// identitas
// ===, !==
// var_dump(1==="1");

// logika
// &&, ||, !
// $x = 10;
// var_dump($x < 20 || $x % 2 == 0 );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Halo, Selamat Datang <?php echo $nama;?></h1>
</body>
</html>