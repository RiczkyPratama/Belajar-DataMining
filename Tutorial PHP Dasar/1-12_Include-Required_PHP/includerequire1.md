# Tutorial PHP : Include dan Require

Fungsi include() dan require() adalah suatu perintah atau fungsi di dalam pemprograman PHP untuk menyisipkan sebuah file PHP ke dalam file PHP yang lainnya.

Dengan menggunakan teknik penyisipan file php menggunakan fungsi include(), require() dan require_once() akan sangat membantu kita dalam membuat program karena kita tidak perlu menuliskan kode program secara berulang-ulang.

Kita hanya tinggal menyisipkan file php tersebut ke dalam file php lainnya sesuai kebutuhan.

dukung kreator di https://saweria.co/sikelinciperak

## Cara penulisan dan penggunaan Include dan Require

Cara penulisan dan penggunaan fungsi include() dan require, misalnya kita memiliki file index.php dan ingin menyisipkan file header.php pada bagian atas index.php , maka caranya :
```php
include('header.php');
```

Contoh di atas adalah cara penulisan include file header.php ke file index.php dan jika menggunakan require()
```php
require('header.php');
```

Pada parameter include atau require isikan dengan nama file php yang ingin di sisiplkan.

Contoh di atas digunakan jika file yang ingin di sisiplan terletak pada satu folder atau satu direktori.

Jika file yang ingin disisipkan terletak di luar folder, maka bisa menambahkan "../". Contohnya :
```php
include('../header.php');
```

atau
```php
require('../header.php');
```

Dan jika file yang ingin disisipkan terletak pada folder lain, bisa menambahkan nama folder tersebut.
```php
include('namafolder/header.php');
```

dukung kreator di https://saweria.co/sikelinciperak

## Contoh Penggunaan Fungsi Include dan Require PHP

Siapkan dua buah file PHP. Untuk contoh di sini file yang pertama saya buat adalah file includerequire1.php. Kemudian file yang kedua tes1.php

isi file includerequire1.php
```php
// menyisipkan file tes1.php di sini
include('tes.php');

// syntax di bawah adalah isi dari file includerequire1.php
echo "Belajar Include() dan Require() bersama Riczky Pratama<br>";
echo "Ini adalah syntax dari file includerequire1.php";
```

isi file tes1.php
```php
echo "<h1> ISI FILE TES1.php </h1>";
```

Bisa diperhatikan pada contoh di atas bahwa isi dari file tes1.php juga ditampilkan pada saat file includerequire1.php di jalankan.

Contoh di atas adalah contoh penggunaan dari fungsi include pada php.

Perbedaan dari fungsi include() dan require() adalah jika file yang di sisipkan dengan menggunakan fungsi include tidak tersedia atau salah dalam peletakan lokasi maka file akan tetap di jalankan dengan mengabaikan error.

Tetapi jika menggunakaan require() dan file yang disisipkan tidak tersedia atau salah dalam peletakan lokasi maka isi dari file tidak akan dilanjutkan dan akan dihentikan penyisipannya pada letak error.

dukung kreator di https://saweria.co/sikelinciperak

## Perbedaan Include, Require dan Include_once, Require_once

Perbedaaan dari fungsi include(), require() tanpa menggunakan "once". Dengan penggunaan include_once() atau require_once() maka berarti penyisipan hanya di panggil sekali saja.

Walaupun di sisipkan beberapa kali di dalam sebuah file maka dengan menggunakan fungsi include_once() atau require_once() penyisipan tetap di panggil sekali saja.

Beda dengan include() dan require() yang jika di sisipkan beberapa kali pada sebuah file maka akan menyebabkan error atau redeclare (deklarasi ganda).

Cara penulisan include_once() dan require_once() juga sama :

(lihat includeonece1.php)
```php
include_once('tes1.php');
```

atau

(lihat requireonce1.php)
```php
require_once('tes1.php');
```

dan

(lihat include1.php)
```php
include('tes1.php');
```

atau

(lihat require1.php)
```php
require('tes1.php');
```

dukung kreator di https://saweria.co/sikelinciperak