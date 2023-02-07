<?php
    class prodotti{
        public $image;
        public $nome;
        public $category;
        public $price;

        public function __construct($image, $nome, categorie $category, $price){
            $this -> image = $image;
            $this -> nome = $nome;
            $this -> category = $category;
            $this -> price = $price;
        }
    }
?>