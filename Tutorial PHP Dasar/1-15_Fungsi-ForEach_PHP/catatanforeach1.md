# Tutorial PHP : Pengertian dan Pengenalan Fungsi Foreach

Foreach di gunakan untuk perulangan yang datanya dalam bentuk array. Terkadang kita memiliki data dalam bentuk array yang harus kita tampilkan dengan menggunakan perulangan for, dengan membuat variabel counter.

Tetapi dengan menggunakan foreach, kita tidak perlu lagi menampilkan data dari array dengan variabel counter seperti di perulangan for.

https://saweria.co/sikelinciperak

## Cara Penggunaan Foreach di PHP

Contoh cara menampilkan data array dengan menggunakan for :
```php
echo "<h1>RICZKY PRATAMA - for</h1>";

$data = array("vira", "febriyana", "syahira");

for ($x=0; $x < count($data); $x++) { 
	echo $data[$x]."<br/>";
}
```

Contoh cara menampilkan data array menggunakan foreach :
```php
echo "<h1>RICZKY PRATAMA - foreach</h1>";

$data = array("vira", "febriyana", "syahira", "alfiana");

foreach ($data as $d) {
	echo $d."<br/>";
}
```

Jika menggunakan perulangan for untuk menampilkan data array, maka kita membutuhkan variabel counter untuk menampilkan datanya berurutan dengan angka yang dihasilkan oleh perulangan for.

Dan jika menggunakan foreach, kita tidak perlu lagi menggunakan variabel counter untuk menampilkan data yang berbentuk array.

https://saweria.co/sikelinciperak