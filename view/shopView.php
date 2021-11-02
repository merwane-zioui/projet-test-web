<?php ob_start(); ?>

<p>Page shop</p>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>