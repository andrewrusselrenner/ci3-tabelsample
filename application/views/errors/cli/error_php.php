<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

Sebuah galat PHP terjadi

Kerentanan:    <?php echo $severity, "\n"; ?>
Pesan:     <?php echo $message, "\n"; ?>
Nama Berkas:    <?php echo $filepath, "\n"; ?>
Baris Ke: <?php echo $line; ?>

<?php if (defined('SHOW_DEBUG_BACKTRACE') && SHOW_DEBUG_BACKTRACE === TRUE): ?>

Backtrace:
<?php	foreach (debug_backtrace() as $error): ?>
<?php		if (isset($error['file']) && strpos($error['file'], realpath(BASEPATH)) !== 0): ?>
	Berkas: <?php echo $error['file'], "\n"; ?>
	Baris: <?php echo $error['line'], "\n"; ?>
	Fungsi: <?php echo $error['function'], "\n\n"; ?>
<?php		endif ?>
<?php	endforeach ?>

<?php endif ?>
