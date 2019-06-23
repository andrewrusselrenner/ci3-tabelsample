<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

<h4>Sebuah galat PHP terjadi. Hayuu..</h4>

<p>Kerentanan: <?php echo $severity; ?></p>
<p>Pesan:  <?php echo $message; ?></p>
<p>Nama Berkas: <?php echo $filepath; ?></p>
<p>Nomor Baris: <?php echo $line; ?></p>

<?php if (defined('SHOW_DEBUG_BACKTRACE') && SHOW_DEBUG_BACKTRACE === TRUE): ?>

	<p>Backtrace:</p>
	<?php foreach (debug_backtrace() as $error): ?>

		<?php if (isset($error['file']) && strpos($error['file'], realpath(BASEPATH)) !== 0): ?>

			<p style="margin-left:10px">
			Berkas: <?php echo $error['file'] ?><br />
			Baris: <?php echo $error['line'] ?><br />
			Fungsi: <?php echo $error['function'] ?>
			</p>

		<?php endif ?>

	<?php endforeach ?>

<?php endif ?>

</div>