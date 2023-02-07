<?php
    include __DIR__.'/database/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./css/style.css">

    <title>PHP OOP 2</title>
</head>
<body>

    <div class="container m-5">

        <div class="row p-3">

            <h1>Boolshop</h1>

        </div>

        <div class="row row-cols-1 row-cols-md-3 g-4 p-3">

        <?php foreach($prodotti as $prodotto) { ?>

            <div class="col">

                <div class="card h-100 shopcard">

                <img src="<?php echo $prodotto -> image; ?>" class="card-img-top" alt="<?php echo $prodotto -> nome; ?>">

                <div class="card-body">
                    <h5 class="card-title"><?php echo $prodotto -> nome; ?></h5>
                    <p class="card-text">
                        <?php echo $prodotto -> category -> icona." ".$prodotto -> category -> nome; ?>
                    </p>
                </div>

                <ul class="list-group list-group-flush">
                    <li class="list-group-item">€<?php echo $prodotto -> price; ?></li>
                    <li class="list-group-item">
                    <?php 
                        
                        if(isset($prodotto -> weight)){
                            echo $prodotto -> weight;
                        }
                        if(isset($prodotto -> details)){
                            echo $prodotto -> details;
                        }
                        if(isset($prodotto -> material)){
                            echo $prodotto -> material;
                        }

                    ?>
                    </li>
                    <li class="list-group-item">
                    <?php 
                        
                        if(isset($prodotto -> ingredients)){
                            foreach($prodotto -> ingredients as $ingredienti){
                                echo $ingredienti." - ";
                            };
                        }
                        if(isset($prodotto -> size)){
                            echo $prodotto -> size;
                        }

                    ?>
                    </li>
                </ul>

                </div>

            </div>

        <?php } ?>

        </div>

    </div>

    <script src="./js/script.js"></script>
    
</body>
</html>