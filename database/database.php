<?php
    include __DIR__.'../models/categorie.php';
    include __DIR__.'../models/prodotti.php';
    include __DIR__.'../models/cibo.php';
    include __DIR__.'../models/giochi.php';
    include __DIR__.'../models/cucce.php';

    $categorie = [
        'cani' => new categorie('cani', '<i class="fa-solid fa-dog"></i>'),
        'gatti' => new categorie('gatti', '<i class="fa-solid fa-cat"></i>'),
        'uccelli' => new categorie('uccelli', '<i class="fa-solid fa-bird"></i>'),
        'pesci' => new categorie('pesci', '<i class="fa-solid fa-fish"></i>'),
    ];
?>