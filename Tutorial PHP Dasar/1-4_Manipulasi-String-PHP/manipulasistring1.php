<?php

// Menghitung Jumlah Karakter dengan strlen()
$kalimat1 = "Belajar Pemprograman bersama Riczky Pratama di https://github.com/RiczkyPratama";
echo strlen($kalimat1);

echo "<br>";

// Menghitung Jumlah Kata pada String dengan str_word_count()
$kalimat2 = "Belajar Pemprograman bersama Riczky Pratama di https://github.com/RiczkyPratama";
echo str_word_count($kalimat2);

echo "<br>";

// Membalik String dengan strrev()
$kalimat3 = "Why u don't have a feeling to me, vira febriyana?";
echo strrev($kalimat3);

echo "<br>";

// Memfilter dan Mengganti String dengan str_replace()
// Format Penulisan str_replace()
str_replace("yang ingin di ganti","pengganti","isi string");

$kalimat4 = "Aku Sayang Vira Febriyana";
echo str_replace("Vira Febriyana", "Syahira Alfiana", $kalimat4);


?>