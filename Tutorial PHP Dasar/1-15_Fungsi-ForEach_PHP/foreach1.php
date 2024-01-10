<?php

// menampilkan data array menggunakan for
echo "<h1>RICZKY PRATAMA - for</h1>";

$data = array("vira", "febriyana", "syahira");

for ($x=0; $x < count($data); $x++) { 
	echo $data[$x]."<br/>";
}

echo "<br/>";
echo "<br/>";

// menampilkan data array menggunakan foreach
echo "<h1>RICZKY PRATAMA - foreach</h1>";

$data = array("vira", "febriyana", "syahira", "alfiana");

foreach ($data as $d) {
	echo $d."<br/>";
}

?>