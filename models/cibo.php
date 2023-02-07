<?php
    class cibo extends prodotti{
        public $age;
        public $type;

        public function __CONSTRUCT($image, $name, categorie $category, $price, $age, $type){
            parent::__CONSTRUCT($image, $name, $category, $price);
            $this -> age = $age;
            $this -> type = $type;
        }
    }
?>