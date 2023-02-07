<?php
    class cibo extends prodotti{
        public $weight;
        public $ingredients;

        public function __CONSTRUCT($image, $nome, categorie $category, $price, $weight, $ingredients){
            parent::__CONSTRUCT($image, $nome, $category, $price);
            $this -> weight = $weight;
            $this -> ingredients = $ingredients;
        }
    }
?>