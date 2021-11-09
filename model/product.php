<?php

class Product {
	public int $productid;
	public string $brand;
	public string $name;
	public string $description;
	public float $price;

	public function __construct(int $pid, string $pb, string $pn, string $pd, float $pp) {
		$this->productid = $pid;
		$this->brand = $pb;
		$this->name = $pn;
		$this->description = $pd;
		$this->price = $pp;
	}
}

?>