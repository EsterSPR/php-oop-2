<?php
    class giochi extends prodotti{
        public $details;
        public $size;

        public function __CONSTRUCT($image, $nome, categorie $category, $price, $details, $size){
            parent::__CONSTRUCT($image, $nome, $category, $price);
            $this -> details = $details;
            $this -> size = $size;
        }
    }
?>