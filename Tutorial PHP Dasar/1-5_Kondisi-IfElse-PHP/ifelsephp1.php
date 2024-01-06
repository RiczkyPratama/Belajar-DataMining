<?php

// 1.5.1 Format Penulisan if-else
     // if(kondisi){
	       // Jika Kondisi Terpenuhi
     // }else{
	       // Jika Kondisi Tidak Terpenuhi
     // }


// 1.5.2 Penggunaan Kondisi if-else jika variable sama
$istri = "Vira Febriyana";
if ($istri == "Vira Febriyana") {
	echo "Dia adalah istri saya";
}else{
	echo "Dia bukan istri saya";
}

echo "<br>";


// 1.5.3 Penggunaan Kondisi if-else jika variable beda
$istri = "Syahira Alfiana";
if ($istri == "Vira Febriyana") {
	echo "Dia adalah istri saya";
}else{
	echo "Dia bukan istri saya";
}

echo "<br>";

// 1.5.4 Mengenal Kondisi if-else-if
$istri = "Aisyah Galuh Puspitasari";
if ($istri == "Vira Febriyana") {
	echo "Vira Febriyana adalah istriku";
}elseif ($istri == "Syahira Alfiana") {
	echo "Syahira Alfiana adalah istri keduaku";
} else {
	echo "Aku tidak punya istri";
}



?>