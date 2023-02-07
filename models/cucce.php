<?php
    class cucce extends prodotti{
        public $material;
        public $size;

        public function __CONSTRUCT($image, $nome, categorie $category, $price, $material, $size){
            parent::__CONSTRUCT($image, $nome, $category, $price);
            $this -> material = $material;
            $this -> size = $size;
        }
    }
?>