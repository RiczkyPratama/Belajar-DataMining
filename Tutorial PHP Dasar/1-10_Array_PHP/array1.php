<?php

// 1.10.1 Contoh Penggunaan Array secara Default
   // membuat array yang berisi nama buah-buahan
$buah = array('semangka','jeruk','appel','anggur');
   // menampilkan data array dengan nomor urut 2
echo $buah[2];


echo "<br>";
echo "<br>";


// 1.10.2 Contoh Penggunaan Array dengan Penamaan

// penamaan isi array
$buah['semangka'] = "isinya merah";
$buah['jeruk'] = "rasanya manis";
$buah['apel'] = "warnanya merah";
$buah['anggur'] = "harganya mahal";

// menampilkan isi array yang bernama jeruk
echo $buah['jeruk'];


echo "<br>";
echo "<br>";


// 1.10.3 Contoh Penggunaan Array dengan Penamaan versi kedua

// penamaan isi array variabel buah
$buah = array(
	'semangka' => "isinya merah",
	'jeruk' => "rasanya manis",
	'apel' => "warnanya merah",
	'anggur' => "harganya mahal",
);

// menampilkan isi array yang bernama jeruk
echo $buah['jeruk'];


echo "<br>";
echo "<br>";


// 1.11.4 Contoh Menerapkan Array dengan For

// membuat array yang berisi nama buah-buahan
$buah = array('semangka','jeruk','appel','anggur');
// count( untuk menghitung isi array)
for ($x=0; $x <count($buah) ; $x++) { 
	echo $buah[$x]."<br/>";
}

?>