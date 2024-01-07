# Tutorial PHP : Menampilkan Tanggal

Untuk menampilkan tanggal pada PHP bisa menggunakan fungsi date().

Dan format tanggal bisa di atur di dalam tanda kurung pada fungsi date().

Data tanggal yang diambil adalah tanggal dari server.

Biasanya pada saat membuat website atau sistem informasi.

Fungsi date ini digunakan untuk menampilkan tanggal, mengambil dan menyimpan data tanggal.

Misalnya kita membuat sebuah aplikasi yang juga dapat menyimpan tanggal pendaftaran, tanggal penginputan data, tanggal jadwal dan lainnya.

Semua aplikasi atau website besar juga pasti menggunakan fungsi date() untuk mendapatkan data tanggal.

Termasuk juga CMS Wordpress yang menggunakan fungsi date ini untuk menyimpan data tanggal sebuah postingan.

Bentuk format penggunaan dan penulisan fungsi date di php:
```php
date(format, timestamp);
```

Pada parameter format di atas di isi dengan format penulisan tanggal yang ingin di tampilkan.

Parameter ini harus di isi untuk membuat format tanggal.

Dan parameter timestamp merupakan parameter optional artinya boleh di isi boleh juga di kosongkan.

dukung kreator di https://saweria.co/sikelinciperak

## Cara Menampilkan Tanggal di PHP

Format karakter yang dapat digunakan sesuai keinginkan dan masing masing format karakter ini memiliki kegunaannya masing-masing:

| Format  | Keterangan |
|-------|------|
| I  | karakter L (huruf kecil) di gunakan untuk menampilkan nama hari dalam bentuk huruf.   |
| D  | karakter D (huruf kapital) digunakan untuk menampilkan nama hari hari ini dalam bentuk huruf tetapi dalam bentuk tiga digit.   |
| d   | karakter d digunakan untuk menampilkan tanggal dalam bentuk angka yaitu dari 1 sampai dengan 31.   |
| M   | karakter M (huruf kapital) digunakan untuk format menampilkan bulan sekarang dalam bentuk angka yaitu misal dari  angka bulan 1 sampai angka bulan 12.   |
| m   | karakter m (huruf kecil) digunakan untuk menampilkan nama bulan sekarang. nama bulan di tampilkan dalam bentuk huruf.   |
| Y   | karakter Y (huruf kapital) digunakan untuk menampilkan tahun dalam bentuk angka empat digit.   |
| y   | karakter y (huruf kecil) digunakan untuk menampilkan angka tahun dalam bentuk dua digit. angka yang di tampilkan adalah dua angka terakhir dari tahun.   |

Kemudian terdapat beberapa karakter tambahan yang bisa anda tambahkan untuk membuat format tanggal sesuai dengan keinginan seperti: 
1. Menambahkan karakter "/" (garis miring)
2. Menambahkan karakter "." (titik)
3. Menambahkan karakter "-" (strip)
4. Menambahkan karakter "," (koma)
5. Karakter lainnya

(lihat menampilkantanggal1.php || pada bagian 1.11.1)
```php
echo date('l, d-m-Y');

echo "<br/>";

echo date('d / M / y');

echo "<br/>";

echo date('D - M / Y');
```

dukung kreator di https://saweria.co/sikelinciperak

## Menampilkan Waktu di PHP

Dalam penggunaan fungsi date() kita juga dapat menampilkan waktu seperti jam, menit, detik serta am dan pm.

Untuk format karakter untuk menampilkan waktu jam bisa menggunakan :

| Format | Keterangan                                              |
|--------|---------------------------------------------------------|
| s      | Untuk menampilkan detik saat ini (angka 0 sampai 59).  |
| i      | Untuk menampilkan menit sekarang (angka 0 sampai 59).   |
| h      | Untuk menampilkan jam sekarang dalam format 1 sampai 12. |
| H      | Untuk menampilkan jam sekarang dalam format 0 sampai 23. |
| a      | Untuk menampilkan waktu AM atau PM sekarang.             |

Sama seperti format penulisan tanggal, anda dapat menambahkan karakter-karakter sesuai dengan keinginan.

Untuk contoh menampilkan waktu jam sebagai berikut:

(lihat menampilkantanggal1.php || pada bagian 1.11.2)
```php
// menampilkan jam sekarang
echo date('H:i:s a');

echo "<br/>";

// kombinasi format tanggal dan jam
echo date('l, d-m-Y h:i:s a');
```

Untuk menampilkan data waktu kita bisa menggunakan fungsi date(), dengan mengisi format 'H:i:s a' di dalamnya.

Sehingga hasilnya akan menjadi jam:menit:detik pm.

dukung kreator di https://saweria.co/sikelinciperak