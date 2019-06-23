<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

Pengecualian (Exception) tak tertangkap terjadi

Tipe:        <?php echo get_class($exception), "\n"; ?>
Pesan:     <?php echo $message, "\n"; ?>
Nama Berkas:    <?php echo $exception->getFile(), "\n"; ?>
Nomor Baris: <?php echo $exception->getLine(); ?>

<?php if (defined('SHOW_DEBUG_BACKTRACE') && SHOW_DEBUG_BACKTRACE === TRUE): ?>

Backtrace:
<?php	foreach ($exception->getTrace() as $error): ?>
<?php		if (isset($error['file']) && strpos($error['file'], realpath(BASEPATH)) !== 0): ?>
	Berkas: <?php echo $error['file'], "\n"; ?>
	Baris: <?php echo $error['line'], "\n"; ?>
	Fungsi: <?php echo $error['function'], "\n\n"; ?>
<?php		endif ?>
<?php	endforeach ?>

<?php endif ?>
