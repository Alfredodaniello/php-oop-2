<?php

require_once __DIR__ . "/Product.php";
require_once __DIR__ . "/Food.php";
require_once __DIR__ . "/Games.php";
require_once __DIR__ . "/Kennel.php";
require_once __DIR__ . "/Category.php";

$dog = new Category("Cani");
$cat = new Category("Gatti");

$product = new Product("Gioco", 10, $cat);


$cibo = new Food("Crocchette", 5, $dog);


$ball = new Game("Palla", 5, $cat);


$kennel = new Kennel("Monge", 100, $dog);

$products = [
  $product,
  $cibo,
  $ball,
  $kennel
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container">
  <div class="row">
    <?php foreach($products as  $product) { ?>
        <div class="col d-flex gap-4">
          <div class="card" style="width: 18rem;">
            <img src="https://picsum.photos/id/237/200/300" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?php echo $product->name?></h5>
              <div><?php echo $product->price?></div>
              <div><?php echo $product->category->name?></div>
            </div>
        </div>
        <?php  } ?>

  </div>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>