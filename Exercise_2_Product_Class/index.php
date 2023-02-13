<?php


class Product
{
    public $name;
    public $description;
    public $price;
}
$product=new Product();
$product->name="Mercedes Bens";
echo $product->name."\n";

$product2=new Product();
$product2->name="BMW";
echo $product2->name;