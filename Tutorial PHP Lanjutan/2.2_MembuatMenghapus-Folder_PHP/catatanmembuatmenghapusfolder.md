# Tutorial PHP Lanjutan : Membuat dan Menghapus Folder

## Cara Membuat dan Menghapus Folder dengan PHP

Untuk membuat folder baru atau menghapus sebuah folder di php kita bisa menggunakan fungsi berikut :
1. mkdir() : untuk membuat sebuah folder atau directory.
2. rmdir() : untuk menghapus folder atau directory.

https://saweria.co/sikelinciperak

## Kegunaan mkdri() untuk membuat folder atau directory baru

Untuk cara penggunaan fungsi mkdir() sebagai berikut :
```php
// cara penggunaan function mkdir()
mkdir('nama folder baru', 'aksi setelah membuat folder');
```

Untuk membuat folder atau directory baru dengan php, kita menggunakan fungsi mkdir().

Lalu isikan nama folder/directory yang ingin kita buat dan pada parameter keduanya merupakan opsional, bisa diisi atau tidak.

Pada parameter kedua berfungsi untuk kelakuan atau behavior saat folder berhasil dibuat.
```php
mkdir("riczky pratama folder");
```

atau
```php
function hai(){
	echo "berhasil membuat folder bernama riczky pratama";
}

mkdir("riczky pratama", hai());
```

mkdir1.php
```php
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cara Membuat dan Menghapus Folder dengan PHP | RICZKY PRATAMA</title>
</head>
<body>
	<h1>Cara Membuat dan Menghapus Folder dengan PHP | RICZKY PRATAMA</h1>
	<?php

	// membuat folder menggunakan mkdir()
	function hai(){
		echo "berhasil membuat folder bernama riczky pratama";
	};

	mkdir("riczky pratama", hai());

	?>

</body>
</html>
```

Saya membuat function dengan nama pesanbuat dan berisi perintah untuk menampilkan kata "berhasil membuat folder bernama riczky pratama".

Fungsi ini kita letakkan pada parameter kedua untuk menampilkan pesan bahwa "berhasil membuat folder bernama riczky pratama".

(Peringatan : Jika kalian menjalankan file mkdir1.php secara berulang maka akan muncul pesan warning: jika folder telah dibuat. Dan itu adalah hal wajar, jadi kamu dapat mengabaikan warning tersebut.)

https://saweria.co/sikelinciperak

## Kegunaan rmdir() untuk menghapus folder atau directory

Untuk menghapus folder dengan php kita bisa menggunakan fungsi rmdir().

rmdir1.php
```php
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cara Menghapus Folder dengan PHP | RICZKY PRATAMA</title>
</head>
<body>
	<h1>Cara Menghapus Folder dengan PHP | RICZKY PRATAMA</h1>
	<?php
	function pesanhapus(){
		echo "berhasil menghapus folder bernama riczky pratama";
	};

	rmdir("riczky pratama",pesanhapus());
	?>
</body>
</html>
```

Sebaliknya dengan rmdir().

(Peringatan : Jika kalian menjalankan file rmdir1.php secara berulang maka akan muncul pesan warning: jika folder yang ingin dihapus tidak ada. Dan itu adalah hal wajar, jadi kamu dapat mengabaikan warning tersebut.)

https://saweria.co/sikelinciperak