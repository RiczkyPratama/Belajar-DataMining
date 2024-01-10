# Tutorial PHP : Fungsi Explode dan Implode

Explode dan implode adalah fungsi yang di sediakan oleh php untuk memisahkan atau menggabungkan string.

String yang di pisahkan akan menjadi bentuk array yang memiliki penomorannya masing-masing.

1. Explode, fungsi explode adalah fungsi php yang memiliki fungsi sebagai pemisah string.

Jadi sebuah string akan di pecahkan menurut tanda pisah yang sudah di tentukan sendiri.

Jadi string yang telah di pecah, akan menjadi array. Cara penulisannya :
```php
explode();
```

2. Implode, fungsi implode adalah fungsi php yang memiliki kegunaan untuk menggabungkan kembali string yang telah di pecahkan tadi menggunakan fungsi explode. Cara penulisannya :
```php
implode();
```

## Memecahkan String dengan Fungsi Explode()

Explode berguna untuk memecahkan string menjadi array. Berikut contohnya :
```php

echo "<h2>Riczky Pratama Coding</h2>";
echo "<br/>";

$kalimat = "belajar pemprograman bareng riczky pratama";

// memisahkan string menjadi array
$data = explode(" ", $kalimat);

// string menjadi array
print_r($data); // print_r berguna untuk menampilkan isi array

echo "<br/>";
echo "<br/>";

echo " Data 1 = " . $data[0];
echo "<br/>";
echo " Data 2 = " . $data[1];
echo "<br/>";
echo " Data 3 = " . $data[2];
echo "<br/>";
echo " Data 4 = " . $data[3];
echo "<br/>";
echo " Data 5 = " . $data[4];
echo "<br/>";
```

Disini kita memiliki sebuah string di dalam variabel kalimat.
```php
$kalimat = "belajar pemprograman bareng riczky pratama";
```

Kemudian kita pecahkan string ini menjadi array dengan menggunakan fungsi explode().
```php
// memisahkan string menjadi array
$data = explode(" ", $kalimat);
```

Pada fungsi explode saya mengisikan pemisah dengan spasi. Jadi hasilnya string akan di pisahkan menurut/setiap tanda spasi.

Dan sampai disini, variabel daria sudah berisi data string yang sudah menjadi array. Lalu untuk melihat isi arraynya seperti ini :
```php
// string menjadi array
print_r($data); // print_r berguna untuk menampilkan isi array
```

Dan untuk menampilkannya satu persatu :
```php
echo " Data 1 = " . $data[0];
echo "<br/>";
echo " Data 2 = " . $data[1];
echo "<br/>";
echo " Data 3 = " . $data[2];
echo "<br/>";
echo " Data 4 = " . $data[3];
echo "<br/>";
echo " Data 5 = " . $data[4];
echo "<br/>";
```

## Menggabungkan String dengan Implode()

Jika explode adalah pemecah string, maka implode adalah penggabung kembali string yang telah di pecahkan oleh explode.
```php
echo "<h2>Riczky Pratama Coding</h2>";
echo "<br/>";

$kalimat = "belajar pemprograman bareng riczky pratama";

// memisahkan string menjadi array
$data = explode(" ", $kalimat);

// string menjadi array
print_r($data); // print_r berguna untuk menampilkan isi array

echo "<br/>";
echo "<br/>";

echo " Data 1 = " . $data[0];
echo "<br/>";
echo " Data 2 = " . $data[1];
echo "<br/>";
echo " Data 3 = " . $data[2];
echo "<br/>";
echo " Data 4 = " . $data[3];
echo "<br/>";
echo " Data 5 = " . $data[4];

echo "<br/>";
echo "<br/>";
echo "<h3>Menggabungkan string dengan implode</h3>";
echo "<br/>";

// menggabungkan string kembali dengan fungsi implode()
echo implode(" ", $data);
```

Variabel data berisi data yang sudah di explode atau dipisahkan. Untuk menggabungkannya kembali kita bisa menggunakan fungsi implode() :
```php
// menggabungkan string kembali dengan fungsi implode()
echo implode(" ", $data);
```