<?php
    include __DIR__.'/../models/categorie.php';
    include __DIR__.'/../models/prodotti.php';
    include __DIR__.'/../models/cibo.php';
    include __DIR__.'/../models/giochi.php';
    include __DIR__.'/../models/cucce.php';

    $categorie = [
        'cani' => new categorie('Cani', '<i class="fa-solid fa-dog"></i>'),
        'gatti' => new categorie('Gatti', '<i class="fa-solid fa-cat"></i>'),
        'uccelli' => new categorie('Uccelli', '<i class="fa-solid fa-dove"></i>'),
        'pesci' => new categorie('Pesci', '<i class="fa-solid fa-fish"></i>'),
    ];

    $prodotti = [
        new cibo('https://arcaplanet.vtexassets.com/arquivos/ids/243826/royal-canin-size-cane-mini-adult--8.jpg?v=1762132197', 'Royal Canin Mini Adult', $categorie['cani'], 43.99, '545g', ['Prosciutto', 'Riso']),
        new cibo('https://arcaplanet.vtexassets.com/arquivos/ids/245358/almo-daily-menu-cat-400-gr-manzo.jpg?v=1762182480', 'Almo Nature Cat Daily Lattina', $categorie['gatti'], 34.99, '400g', ['Tonno', 'Pollo', 'Prosciutto']),
        new cibo('https://www.aquasabi.com/media/image/product/31629/lg/tetra-guppy.jpg', 'Mangime per Pesci Guppy in Fiocchi', $categorie['pesci'], 2.95, '30g', ['Pesci e sottoprodotti dei pesci', 'Cereali', 'Lieviti', 'Alghe']),
        new cucce('https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg?v=1760290610', 'Voliera Wilma in legno', $categorie['uccelli'], 184.99, 'Legno', 'M: L 83 x P 67 x H 153 cm'),
        new giochi('https://shop-cdn-m.mediazs.com/bilder/topini/di/peluche/trixie/8/800/42535_trixie_plueschmaus_grau_und_weiss_ret_02_8.jpg', 'Topini di peluche Trixie', $categorie['gatti'], 4.99, 'Morbido con codina in corda', '8,5 cm x 10 cm'),
    ]
?>