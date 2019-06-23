<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------
| Pengaturan Koneksi Database
| -------------------------------------------------------------------
| Berkas ini berisi pengaturan yang dibutuhkan untuk kamu bisa akses
| akses ke database mu.
|
| Untuk instruksi lengkapnya, lihat di Petunjuk Penggunaan di halaman
| 'Koneksi Database'.
|
| -------------------------------------------------------------------
| Penjelasan Variabel
| -------------------------------------------------------------------
|
|	['dsn']      string full DSN yang menjabarkan sebuah koneksi ke db
|	['hostname'] Nama host(hostname) server database mu.
|	['username'] Username yang dipake untuk konek ke database
|	['password'] Password yang dipake untuk konek ke database
|	['database'] Nama database yang mau di konek kan
|	['dbdriver'] Driver database. Contoh: mysqli.
|			Saat ini mendukung:
|				 cubrid, ibase, mssql, mysql, mysqli, oci8,
|				 odbc, pdo, postgre, sqlite, sqlite3, sqlsrv
|	['dbprefix'] Kamu bisa nambah prefix tambahan, yang mana akan
|				 ditambahkan ke nama tabel ketika menggunakan
|				 kelas Query Builder (Pembuat Kueri)
|	['pconnect'] TRUE/FALSE - Nentuin apakah menggunakan sebuah koneksi
|				 persistent atau gak.
|	['db_debug'] TRUE/FALSE - Mau pas ada error database ditampilkan atau gak.
|	['cache_on'] TRUE/FALSE - Aktifkan/matikan caching kueri
|	['cachedir'] Path folder dimana berkas cache ditaruh
|	['char_set'] Karakter yang digunakan saat komunikasi dengan database
|	['dbcollat'] Kolasi karakter yang digunakan saat komunikasi dengan database
|				 CATATAN: Untuk database MySQL dan MySQLi, pengaturan ini hanya
|				 digunakan sebagai backupan jika server berjalan di
|				 PHP versi < 5.2.3 atau MySQL versi 5.0.7 (dan di dalam kueri 
|				 pembuatan tabel dibuat oleh DB Forge).
| 				 Terdapat masalah kompabilitas di PHP dengan mysql_real_escape_string()
| 				 yang mana bisa buat situs kamu rawan bahaya injeksi SQL jika kamu
| 				 menggunakan karakter multi-byte dan berjalan di versi lebih rendah
| 				 daripada ini
| 				 Situs yang menggunakan karakter database Latin-1 atau UTF-8 tidak berpengaruh.
|	['swap_pre'] A default table prefix that should be swapped with the dbprefix
|	['encrypt']  Whether or not to use an encrypted connection.
|
|			'mysql' (deprecated), 'sqlsrv' and 'pdo/sqlsrv' drivers accept TRUE/FALSE
|			'mysqli' and 'pdo/mysql' drivers accept an array with the following options:
|
|				'ssl_key'    - Path to the private key file
|				'ssl_cert'   - Path to the public key certificate file
|				'ssl_ca'     - Path to the certificate authority file
|				'ssl_capath' - Path to a directory containing trusted CA certificates in PEM format
|				'ssl_cipher' - List of *allowed* ciphers to be used for the encryption, separated by colons (':')
|				'ssl_verify' - TRUE/FALSE; Whether verify the server certificate or not
|
|	['compress'] Mau pake kompresi klien apa gak (hanya untuk MySQL)
|	['stricton'] TRUE/FALSE - paksa koneksi ke 'Mode Ketat'
|							- bagus untuk ngetatin SQL saat pengembangan
|	['ssl_options']	Used to set various SSL options that can be used when making SSL connections.
|	['failover'] array - A array with 0 or more data for connections if the main should fail.
|	['save_queries'] TRUE/FALSE - Mau gak "simpan" semua kueri yang dieksekusi.
| 				CATATAN: Mematikan fitur ini akan berpengaruh kedua
| 				$this->db->last_query() dan profiling dari kueri DB.
| 				Ketika kamu menjalankan sebuah kueri, dengan pengaturan ini,
| 				diatur menjadi TRUE (bawaan), CodeIgniter akan menyimpan 
| 				statement SQL untuk alasan debugging. Namun, ini akan berdampak
| 				pada penggunaan memori yang tinggi, terutama jika kamu menjalankan
| 				banyak kueri SQL ... mematikan fitur ini dapat mencegah masalah tsb.
|
| Variabel $active_group membolehkan kamu pilih grup koneksi mana yang
| aktif. Secara bawaan hanya ada satu grup (grup 'bawaan').
|
| Variabel $query_builder gunanya nentuin apakah kamu mau gak memuat kelas
| pembangun kueri. Cari di internet kalo bingung.
*/
$active_group = 'bawaan';
$query_builder = TRUE;

$db['bawaan'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	'username' => 'root',
	'password' => '',
	'database' => 'kampus',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);
