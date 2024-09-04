<?php 
require_once __DIR__.'/Model/Product.php';
require_once __DIR__.'/Model/Category.php';
require_once __DIR__.'/Model/ProductType.php';
require_once __DIR__.'/data/db.php';

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Negozio animali Oop-2</title>
</head>
<body>

    <!-- stampo in pagina le informazioni dei prodotti -->
    <div class="d-flex">
        <?php foreach($products as $product): ?>
            <div class="card" style="width: 18rem;">
                <img src="<?php echo $product->img ?>" class="card-img-top" alt="immagine del prodotto">
                <div class="card-body">
                    <!-- nome -->
                    <h5 class="card-title">
                        <?php echo $product->name ?>
                    </h5>

                    <!-- prezzo -->
                    <p class="card-text">
                        <?php echo $product->getPrice() ?> €
                    </p>

                    <!-- tipologia -->
                    <p class="card-text">
                        <?php echo $product->type ?>
                    </p>

                    <!-- categoria -->
                    <p class="card-text">
                        <?php echo $product->category ?>
                    </p>

                    <!-- descrizione -->
                    <p class="card-text">
                        <?php $product->printDescription() ?>
                    </p>
                    
                    <a href="#" class="btn btn-primary">Aggiungi al carrello</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    
</body>
</html>