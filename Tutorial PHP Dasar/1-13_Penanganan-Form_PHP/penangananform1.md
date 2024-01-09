# Tutorial PHP : Penanganan Form

Ada dua metode yang digunakan untuk mengolah form inputan, yaitu GET dan POST.

Untuk melakukan penanganan form/form handling, kita harus menentukan terlebih dahulu form yang kita buat menggunakan metode apa? Metode get atau post.

Untuk contoh penggunaan GET dan POST, pertama sediakan dua buah file php, misal penangananform1.php dan tampil1.php.

Jadi pada contoh ini kita akan membuat sebuah form penginputan nama dan apabila form tersebut di submit maka akan muncul nama yang di inputkan pada form.

Pada file penangananform1.php , kita jadikan sebagai form dan pada file tampil1.php akan dijadikan sebagai file php yang bertugas untuk menangkap data inputan kemudian menampilkannya.

## Membuat Penanganan Form dengan Method GET

(lihat penangananform1.php)
```php
<!-- penanganan form dengan method GET -->
<form method="get" action="tampil1.php">
	<label>Masukan Nama</label><br/>
	<input type="text" name="nama"><br/>
	<label>Masukan Usia</label><br/>
	<input type="text" name="usia"><br/>
	<input type="submit" value="oke">
</form>
```

(lihat tampil1.php)
```php
// menangkap data nama dengan method get
$nama = $_GET['nama'];

// menangkap data usia dengan method get
$usia = $_GET['usia'];


// menampilkan data nama
echo "Nama anda adalah " . $nama;
echo "<br/>";

// menampilkan data usia
echo "Usia anda adalah " . $usia;
```

Untuk menggunakan method get pada form, tuliskan get pada atribut method pada tag form pembuka dan pada atribut action tuliskan nama file php yang bertugas untuk mengelola atau menangkap data dari form tersebut.
```php
<form method="get" action="tampil1.php">
```

Dan pada hasil output dapat di lihat bahwa data yang di kirimkan oleh form get melalui url.

Untuk penangkapan data pada file tampil1.php karena form menggunakan method "get" maka pada saat penangkapan data get gunakan $\_GET seperti pada file tampil1.php
```php
// menangkap data nama dengan method get
$nama = $_GET['nama'];

// menangkap data usia dengan method get
$usia = $_GET['usia'];


// menampilkan data nama
echo "Nama anda adalah " . $nama;
echo "<br/>";

// menampilkan data usia
echo "Usia anda adalah " . $usia;
```

Pada contoh di atas kita memasukkan data yang di tangkap menggunakan get kedalam variabel nama.

Begitu juga dengan data usia, data yang di tangkap sesuai dengan nama form.

Misalnya pada form input nama tadi form kita beri nama dengan "nama" dan form usia kita beri nama dengan "usia".
```php
<input type="text" name="nama"><br/>

<input type="text" name="usia"><br/>
```

```php
// menangkap data nama dengan method get
$nama = $_GET['nama'];

// menangkap data usia dengan method get
$usia = $_GET['usia'];
```

atau

```php
$_GET['nama form'];
```

## Membuat Penanganan Form dengan Method POST

Membuat penanganan form dengan method post sama aja dengan get. Hanya saja oada method form gunakan post bukan get.

Dan untuk cara menangkap data yang di kirim dari form yang bermethod post gunakan $\_POST.

Berikut contoh penggunaan method post:

(lihat penangananform2.php)
```php
<!-- penanganan form dengan method POST -->
<form method="post" action="tampil2.php">
	<label>Masukkan Nama</label><br/>
	<input type="text" name="nama"><br/>
	<label>Masukkan Usia</label><br/>
	<input type="text" name="usia"><br/>
	<input type="submit" value="oke"><br/>

</form>
```

(lihat tampil2.php)
```php
<?php

// menangkap data nama dengan method post
$nama = $_POST['nama'];

// menangkap data usia dengan method post
$usia = $_POST['usia'];

// menampilkan data nama
echo "Nama anda adalah " . $nama;
echo "<br/>";

// menampilkan data usia
echo "Usia anda adalah " . $usia;
echo "<br/>";

echo "Ini penanganan form menggunakan method post";
?>
```

## Membuat Penanganan Form dengan $\_REQUEST

$\_GET digunakan untuk menangkap data dari form get.

$\_POST digunakan untuk menangkap data dari form post.

Dan $\_REQUEST bisa digunakan untuk menangkap data dari method get dan method post.

## Kelebihan dan Kekurangan GET dan POST

1. Method get sangat tidak di sarankan jika digunakan untuk membuat login karena akan sangat tidak lucu jika username dan password yang di inputkan akan terlihat pada url browser.
2. Method get lebih mudah digunakan untuk pengambilan atau penyimpanan data sementara yang di butuhkan dalam logika pemprograman. Karena lebih praktis dalam menyimpan data yang bersifat sementara.
3. Method post digunakan untuk membuat login karena membuat data yang di inputkan tidak terlihat.