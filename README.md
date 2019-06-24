# SimpleTable Menggunakan CodeIgniter 3 (Modified)
Contoh penggunaan CodeIgniter dengan tabel sederhana dengan menampilkan data singkat dan menggunakan dependensi seperti Bootstrap 4, JQuery, dan SweetAlert2.
## Instalasi
1. Pastikan punya git di mesin kamu. Belum punya? download di [disini](https://git-scm.com/download/win) atau kamu bisa download langsung [disini](https://github.com/andrewrusselrenner/ci3-tabelsample/archive/master.zip).
2. Buat folder dulu di htdocs(Xampp) atau di www (WampServer).
3. Jika menggunakan WampServer, disarankan membuat virtual host untuk menghindari jikalau ada error untuk pengembangan selanjutnya.
4. Jikalau kamu langsung download, buka file zip nya lalu tarik kedalam folder yang kamu buat di folder htdocs(Xampp) atau di www (WampServer) kamu.
5. Konfigurasi url sesuaikan dengan host mu di:

	> application/config/config.php

lalu atur bagian ini dan sesuaikan dengan url mu:

    $config['base_url']  =  'https://form.fusslp.com';
   Kalau localhost saja, berarti:
   
    $config['base_url']  =  'https://localhost/folderkamu';
6. Atur informasi database di:
	> application/config/database.php

	lalu isi:
	- hostname = url server. contoh: localhost,
	- username = username databasemu, bawaannya root,
	- password = password databasemu, bawaannya kosong,
	- database = nama database yang kamu buat di phpmyadmin atau client lainnya,
7. Setelah itu, impor berkas sql nya dari:
	> aset\vendor
	
	ke database mu. caranya:
	1. Klik database **yang sudah kamu buat**.
	2. Ke tab import, lalu klik tombol ***choose file***.
	3. di dalam **aset\vendor** itu, ada berkas namanya ***mahasiswa.sql***, pilih itu.
	4. Lalu klik **Go** atau **Kirim**
8. Selesai. Silahkan lihat keterangan/instruksi di dalamnya.

## Routing
Secara bawaan, halaman akan ditampilkan dengan pesan selamat datang di CodeIgniter. Ini karena default route untuk index yaitu controller Welcome.php. Untuk mengakses tabelnya, pergi ke **http://namadomainmu.com/mahasiswa/tabel**, karena tabelnya berada di controller Mahasiswa.php, sedangkan untuk tampilan tabelnya ada di **views/mahasiswa/tabel.php**. Jikalau mau akses tabel tanpa perlu substring mahasiswa/tabel, buka ***routes.php*** di folder **application/config**, lalu pada array:
> $route['default_controller'] = 'welcome';

ganti dari
> 'welcome'

menjadi
> 'mahasiswa/tabel'

kemudian akses **http://namadomainmu.com** tanpa perlu ~~mahasiswa/tabel~~ lagi.