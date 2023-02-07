<?php
    class giochi extends prodotti{
        public $material;
        public $type;

        public function __CONSTRUCT($image, $name, categorie $category, $price, $material, $type){
            parent::__CONSTRUCT($image, $name, $category, $price);
            $this -> material = $material;
            $this -> type = $type;
        }
    }
?>