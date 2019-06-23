<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------
| AUTO-LOADER (Pemuat Otomatis)
| -------------------------------------------------------------------
| Berkas ini menspesifikasi sistem mana yang harus di muat secara
| otomatis oleh bawaan.
|
| Dalam rangka membuat framework se ringan mungkin, hanya beberapa
| sumber (resources) yang dimuat secara otomatis oleh bawaan. Contoh,
| database gak konek secara otomatis karena gak ada asumsi yang dibuat
| entah kamu niat mau make atau gak. Berkas ini secara global mengatur
| sistem mana yang mau kamu muat secara otomatis setiap permintaan
| dibuat.
|
| -------------------------------------------------------------------
| Instruksi
| -------------------------------------------------------------------
|
| Ada beberapa yang bisa kamu muat secara otomatis:
|
| 1. Paket - (Baris ke 43)
| 2. Libraries (Pustaka) - (Baris ke 63)
| 3. Drivers - (Baris ke 84)
| 4. Helper files (Berkas pembantu) - (Baris ke 94)
| 5. Berkas konfigurasi kustom - (Baris ke 109)
| 6. Berkas bahasa - (Baris ke 125)
| 7. Model - (Baris ke 141)
|
*/

/*
| -------------------------------------------------------------------
|  Pemuatan otomatis paket
| -------------------------------------------------------------------
| Prototype:
|
|  $autoload['packages'] = array(APPPATH.'third_party', '/usr/local/shared');
|
*/
$autoload['packages'] = array();

/*
| -------------------------------------------------------------------
|  Pemuatan otomatis Libraries (Pustaka)
| -------------------------------------------------------------------
| Kelas ini berada di dalam folder system/libraries/ atau direktori
| aplication/libaries/ kamu, dengan tambahan library 'database',
| yang mana ternyata penggunaannya spesial, kaya kamu spesial buatku,
| ahhh wkwk.
|
| Prototype:
|
|	$autoload['libraries'] = array('database', 'email', 'session');
|
| Kamu juga bisa memberikan nama library alternatif untuk ditugaskan
| kedalam controller:
|
|	$autoload['libraries'] = array('session' => 'sesi');
*/
$autoload['libraries'] = array('session','form_validation');

/*
| -------------------------------------------------------------------
|  Auto-load Drivers
| -------------------------------------------------------------------
| These classes are located in system/libraries/ or in your
| application/libraries/ directory, but are also placed inside their
| own subdirectory and they extend the CI_Driver_Library class. They
| offer multiple interchangeable driver options.
|
| Prototype:
|
|	$autoload['drivers'] = array('cache');
|
| You can also supply an alternative property name to be assigned in
| the controller:
|
|	$autoload['drivers'] = array('cache' => 'cch');
|
*/
$autoload['drivers'] = array();

/*
| -------------------------------------------------------------------
|  Pemuat otomatis berkas helper (pembantu)
| -------------------------------------------------------------------
| Prototype:
|
|	$autoload['helper'] = array('url', 'file');
*/
$autoload['helper'] = array('url','text','form','utility');

/*
| -------------------------------------------------------------------
|  Pemuat otomatis berkas konfigurasi
| -------------------------------------------------------------------
| Prototype:
|
|	$autoload['config'] = array('config1', 'config2');
|
| CATATAN: Item ini dimaksudkan untuk digunakan JIKA kamu buat berkas
| konfigurasi kostum (maksudnya kamu bikin sendiri berkas konfigurasinya).
| selain itu, biarkan kosong.
|
*/
$autoload['config'] = array();

/*
| -------------------------------------------------------------------
|  Pemuatan otomatis berkas bahasa
| -------------------------------------------------------------------
| Prototype:
|
|	$autoload['language'] = array('lang1', 'lang2');
|
| CATATAN: Jangan masukkin bagian "_lang" dari berkasmu. Contoh:
| NOTE: Do not include the "_lang" part of your file.  For example
| "jawa_lang.php" akan direferensikan sebagai array('jawa');
| Jadi jawa aja _lang nya gak usah.
|
*/
$autoload['language'] = array();

/*
| -------------------------------------------------------------------
|  Pemuat otomatis Model
| -------------------------------------------------------------------
| Prototype:
|
|	$autoload['model'] = array('pertama_model', 'kedua_model');
|
| Kamu bisa juga beri nama model alternatif untuk dipake di controller:
|
|	$autoload['model'] = array('sultan_model' => 'sultan');
|
| Jadi nanti pas di controller tinggal panggil aja $this->sultan->get_uang();
*/
$autoload['model'] = array();
