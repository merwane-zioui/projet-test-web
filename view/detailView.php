<?php ob_start(); ?>

<h1>Product</h1>

<p><?= $product['brand'].' '.$product['name'] ?></p>
<p>Price - $<?= $product['price'] ?></p>
<p>Description - <?= $product['description'] ?></p>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>