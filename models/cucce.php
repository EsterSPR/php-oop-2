<?php
    class cucce extends prodotti{
        public $size;
        public $material;

        public function __CONSTRUCT($image, $name, categorie $category, $price, $size, $material){
            parent::__CONSTRUCT($image, $name, $category, $price);
            $this -> size = $size;
            $this -> material = $material;
        }
    }
?>