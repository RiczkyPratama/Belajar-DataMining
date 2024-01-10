<?php

// contoh jika file tersedia
if (file_exists("wrench.jpg")) {
	echo "File Tersedia";
} else {
	echo "File tidak Tersedia";
}

echo "<br/>";


// contoh jika file tidak tersedia
if (file_exists("wronch.jpg")) {
	echo "File Tersedia";
} else {
	echo "File tidak Tersedia";
}

?>