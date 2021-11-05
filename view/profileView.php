<?php ob_start(); ?>

<h2 class="pb-2 border-bottom">Your account</h2>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>