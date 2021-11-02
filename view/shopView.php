<?php ob_start(); ?>

<h1>All products</h1>

<div class="row row-cols-3 g-3">
<?php
foreach($products as $product) {
?>
	<div class="card">
		<div class="card-header">
		<?= $product['brand'] ?>
		</div>
		<div class="card-body">
			<h5 class="card-title"><?= $product['name'] ?></h5>
			<p class="card-text">Price - $<?= $product['price'] ?></p>
			<a href="./index.php?action=detail&id=<?= $product['productid'] ?>" class="btn btn-primary">View product</a>
		</div>
	</div>
<?php
}
?>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>