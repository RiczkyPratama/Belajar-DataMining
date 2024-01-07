## Tutorial PHP : Menampilkan Tanggal

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

# Cara Menampilkan Tanggal di PHP

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