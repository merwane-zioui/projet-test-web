<?php ob_start(); ?>

<h2 class="pb-2 border-bottom">All products</h2>

<div class="row row-cols-4 align-items-stretch g-4">
<?php
foreach($products as $product) {
?>
	<div class="col">
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
	</div>
<?php
}
?>
</div>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>