# Tutorial PHP : Kondisi IF ELSE

Kondisi __If Else__ adalah struktur kontrol dalam banyak bahasa pemrograman yang memungkinkan Anda menangani beberapa kondisi atau cabang dalam aliran program.

Fungsi __If Else__ sangat dibutuhkan jika anda ingin memeriksa sebuah kondisi.

Dalam sebuah logika, pengecekan nilai terkadang diperlukan. Ketika kondisi __if__ tidak terpenuhi, maka akan lanjut ke kondisi kedua yaitu __else__.

Penggunaan __if else__ ini dapat dibayangkan seperti ketika anda memiliki seorang istri bernama vira. 
Jika nama istri anda adalah vira maka dia adalah istri anda. 
Jika bukan maka dia bukan istri anda.

## Mengenai Kondisi If-Else pada PHP

Kondisi If Else di perlukan untuk memeriksa suatu nilai untuk melakukan suatu aksi.
Pada kode 1.5.1 adalah format cara penulisan if else pada php.

(Lihat ifelsephp1.php || Bagian 1.5.1)

Dan pada bagian 1.5.2 adalah contoh sederhana dari penggunaan kondisi if else pada php.

(Lihat ifelsephp1.php || Bagian 1.5.2)

Perhatikan pada bagian 1.5.2, terdapat variable "istri" yang memiliki nilai "Vira Febriyana".

Lalu terdapat kondisi if-else, yang dimana:

1. Jika nilai dari variable "istri" adalah "Vira Febriyana" maka akan muncul hasil kode yang bertuliskan "Dia adalah istri saya".
2. Jika nilainya bukan itu/berbeda, maka akan muncul hasil kode yang bertuliskan "Dia bukan istri saya".

Dikarenakan nilai pada variable "istri" yang saya masukan adalah "Vira Febriyana" maka akan muncul hasil kode "Dia adalah istri saya".

(Lihat ifelsephp1.php || Bagian 1.5.3)

Dan pada bagian 1.5.3, saya ubah variable "istri" jadi "Syahira Alfiana" dengan kondisi yang sama. Maka akan muncul hasil kode yang kedua/else yaitu yang beruliskan "Dia bukan istri saya".

## Mengenal Kondisi If-Elseif-Else pada PHP

Elseif digunakan untuk memeriksa kondisi jika kondisi pertama(if) tidak terpenuhi. Contohnya :

(Lihat ifelsephp1.php || Bagian 1.5.4)

Pada bagian 1.5.4, saya membuat variable "istri" yang berisi nilai "Aisyah Galuh Puspitasari".

Lalu pada kondisi else, nilai variable "istri" adalah "Vira Febriyana". Dan berisi perintah kode untuk menampilkan "Dia adalah istri saya", jika kondisinya benar.

Lalu pada kondisi elseif, nilai variable "istri" adalah "Syahira Alfiana". Dan berisi perintah kode untuk menampilkan "Dia bukan istri saya", jika kondisinya benar.

Sedangkan pada kondisi else, ketika nilai dari variable beda atau tidak diisi maka akan muncul perintah kode "Aku tidak punya istri".

Jadi di sini kondisi “elseif” di gunakan jika anda membutuhkan pengecekan kondisi kedua atau seterusnya jika kondisi pertama tidak terpenuhi.
