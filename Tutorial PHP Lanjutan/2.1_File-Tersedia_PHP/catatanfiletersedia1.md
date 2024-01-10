# Tutorial PHP Lanjutan : Memeriksa Ketersediaan File

Dengan PHP memungkinkan kita untuk memeriksa ketersediaan sebuah file. Misalnya kita ingin mengecek file yang bernama gambar.png di directory yang telah kita tentukan atau adalah file yang bernama tes.txt disebuah folder yang sudah kita tentukan.

## Memeriksa Ketersediaan File dengan PHP

Buatlah sebuah folder baru di localhost, jadi file yang akan kita cek nantinya adalah file yang di dalam folder ini.

Disini saya menaruh file bernama wrench.jpg di folder yang sama dengan indeksfileexist.php

Jadi file gambar ini yang akan kita cek dengan menggunakan fungsi yang telah disediakan php yaitu fungsi file_exist().
```php
if (file_exists("wrench.jpg")) {
	echo "File Tersedia";
} else {
	echo "File tidak Tersedia";
}
```

Jika file ada maka akan menampilkan file tersedia.

Tetapi jika file tidak ada akan menampilkan "file tidak terseida". Seperti contoh berikut :
```php
// contoh jika file tidak tersedia
if (file_exists("wronch.jpg")) {
	echo "File Tersedia";
} else {
	echo "File tidak Tersedia";
}
```