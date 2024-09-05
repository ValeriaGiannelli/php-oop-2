<?php 
require_once __DIR__.'/Model/Product.php';
require_once __DIR__.'/Model/Category.php';
require_once __DIR__.'/Model/ProductType.php';
require_once __DIR__.'/data/db.php';




try{
    $toy = new Game('Tiragraffi Prova errore', 133.95, 'https://www.fenixshop24.com/1578-large_default/tiragraffi-angolare-per-gatti-alto-112-cm-con-corda-in-sisal-e-peluche-grigio.jpg', '<i class="fa-solid fa-cat"></i>', 'giochi', 'arrr');

    echo $toy->setGame('ar');
} catch (Exception $e){
    echo "<h3> Errore: " . $e->getMessage() . " </h3>";
}

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
    <div class="row">
        <div class="col-12 text-center">
            <h1>Negozio per animali</h1>
        </div>
    </div>

    <!-- stampo in pagina le informazioni dei prodotti -->
    <div class="d-flex flex-wrap grid gap-3">
      

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

                    <!-- descrizione cibo -->
                    <?php if(isset($product->foodType)):?>
                        <p class="card-text">
                            <?php $product->printDescription() ?>
                        </p>
                    <?php endif; ?>

                    <!-- dimensioni accessori -->
                    <?php if($product instanceof PetBed && null !== $product->getDimensionWidth()):?>
                        <p class="card-text">
                            <?php 
                                try{
                                    echo $product->printDimension();
                                } catch (Exception $e){
                                    echo $e->getMessage();
                                }
                            ?>


                            <!-- <?php echo $product->printDimension() ?> -->
                        </p>
                    <?php endif; ?>

                    <!-- tipologia di gioco -->
                    <?php if($product instanceof Game && null !== $product->getGame()):?>
                        <p class="card-text">
                            <!-- try e catch in getGame -->
                            <?php 
                                try{
                                    echo $product->getGame();
                                } catch (Exception $e){
                                    echo "<h1> Errore: ". $e->getMessage() ."</h1>";
                                }
                            ?>
                            
                        </p>
                    <?php endif; ?>

                    <a href="#" class="btn btn-primary">Aggiungi al carrello</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    
    
</body>
</html>