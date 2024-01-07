## Tutorial PHP : Mengenal Array

Array adalah suatu tipe data variabel yang mempu menyimpan banyak data atau nilai.

Karena array memiliki banyak data, maka isi dari array di tandai dengan angka pada tiap-tiap isi dari array.

Angka pada masing masing isi array dimulai dari 0,1,2,3 dan seterusnya.

Ada dua cara penamaan atau pemanggilan isi array. Yaitu dengan cara memanggil menggunakan angka default array dan bisa juga dengan memberikan penamaan pada masing-masing isi array.

# Membuat dan Memanggil Data pada Array secara Biasa

Secara default, tiap-tiap isi dari pada variabel array di beri nomor urut, yaitu mulai dari 0.

(Lihat array1.php || pada bagian 1.10.1)

Kita memiliki sebuah variabel array dengan nama variabel buah.

Dan di dalamnya terdapat nama buah semangka, jeruk, apel, dan anggur. Berarti penomoran dari isi array ini yaitu :
1. Semangka memiliki nomor urut (indeks) 0
2. Jeruk memiliki nomor urut (indeks) 1
3. Apel memiliki nomor urut (indeks) 2
4. Anggur memiliki nomor urut (indeks) 3

Jadi untuk memanggil atau menampilkan buah apel kita menggunakan syntax :

```php
echo $buah[2];
```

Karena buah apel memiliki nomor urut 2 maka hasil jika browser dijalankan adalah menampilkan kata "apel".

# Membuat dan Memberi Penamaan pada Isi Array

(Lihat array1.php || pada bagian 1.10.2)
```php
// penamaan isi array
$buah['semangka'] = "isinya merah";
$buah['jeruk'] = "rasanya manis";
$buah['apel'] = "warnanya merah";
$buah['anggur'] = "harganya mahal";

// menampilkan isi array yang bernama jeruk
echo $buah['jeruk'];
```

Pada contoh bagian 1.10.2 , kita membuat variabel array dengan nama buah dan semuanya memiliki isi.

Atau bisa juga dengan menggunakaan syntax seperti berikut :

(Lihat array1.php || pada bagian 1.10.3)
```php
// penamaan isi array variabel buah
$buah = array(
	'semangka' => "isinya merah",
	'jeruk' => "rasanya manis",
	'apel' => "warnanya merah",
	'anggur' => "harganya mahal",
	 );

// menampilkan isi array yang bernama jeruk
echo $buah['jeruk'];
```

Seperti contoh 1.10.3 , kita secara langsung memberikan nama pada isi dari variabel array.

1. Variabel array semangka berisi "isinya merah"
2. Variabel array jeruk berisi "rasanya manis"
3. Variabel array apel berisi "warnanya merah"
4. Variabel array anggur berisi "harganya mahal"

Karena disini, kita memanggil variabel array jeruk maka yang muncul "rasanya manis".