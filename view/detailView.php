<?php ob_start(); ?>

<h2 class="pb-2 border-bottom">Product</h2>

<p><?= $product['brand'].' '.$product['name'] ?></p>
<p>Price - $<?= $product['price'] ?></p>
<p>Description - <?= $product['description'] ?></p>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>