<?php
    class prodotti{
        public $image;
        public $name;
        public $category;
        public $price;

        public function __construct($image, $name, categorie $category, $price){
            $this -> image = $image;
            $this -> name = $name;
            $this -> category = $category;
            $this -> price = $price;
        }
    }
?>