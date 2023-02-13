<?php

    class Product
    {
        //definition des variables
        public String $name;
        public string $description;

        public float $price;
        //Ajout de la methode d'initialisation
        public function __construct($name, $description, $price)
        {
            $this->name = $name;
            $this->description = $description;
            $this->price = $price;
        }
    }



    //instanciation de la classe
    $product1 = new Product('iphone 12', 'this is a great iphone ', 799.99);
    echo $product1->name;
    echo $product1->description;
    echo $product1->price;
    echo "  ";
    $product2 = new Product('iphone 14 Pro ', 'this is a best iphone ', 999.99);
    echo $product2->name;
    echo $product2->description;
    echo $product2->price;