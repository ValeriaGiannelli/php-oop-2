<?php 
require_once __DIR__.'/Model/Product.php';
require_once __DIR__.'/Model/Category.php';
require_once __DIR__.'/Model/ProductType.php';



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Negozio animali Oop-2</title>
</head>
<body>

    <!-- stampo in pagina le informazioni dei prodotti -->
    <div class="d-flex">
      
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="immagine del prodotto">
                <div class="card-body">
                    <!-- nome -->
                    <h5 class="card-title">
                        Nome prodotto
                    </h5>

                    <!-- prezzo -->
                    <p class="card-text">
                        prezzo del prodotto
                    </p>

                    <!-- tipologia -->
                    <p class="card-text">
                        tipologia di prodotto
                    </p>

                    <!-- categoria -->
                    <p class="card-text">
                        categoria animale
                    </p>
                    
                    <a href="#" class="btn btn-primary">Aggiungi al carrello</a>
                </div>
            </div>

    </div>
    
</body>
</html>