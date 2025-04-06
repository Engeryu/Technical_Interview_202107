<?php
/**
 * @Author: Engeryu
 * @Date:   2021-07-01 14:19:24
 * @Last Modified by:   Engeryu
 * @Last Modified time: 2025-04-06 23:14:37
 */

 ob_start();
$titre = "Catalogue de produits";
?>

<?php
$dsn = 'mysql:dbname=catalogue;host=localhost';
$user = 'root';
$password = '';

try{
	$pdo = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
echo 'connexion échouée : ' . $e->getMessage();}

$req = "SELECT * FROM product";
$stmt = $pdo->prepare($req);
$stmt->execute();
$product = $stmt->fetchALL(PDO::FETCH_ASSOC);
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>catalogue</title>

    <link href="style.css" rel="stylesheet">
  </head>

  <body>

    <header>
      <h1>Catalogue des produits</h1>
    </header>
<main role="main">
<ul class="card-wrap">
<?php foreach($product as $p) : ?>
        <li>
          <img src="image/<?= $p['imageProduct'] ?>" alt=''>
          <h3><?= $p['idProduct'] ?></h3>
          <p><?= $p['refProduct'] ?></p>
          <p class="price"><?= $p['priceProduct'] ?>€</p>
          <p><button>Add to Cart</button></p>
        </li>
<?php endforeach; ?>
</ul>
</main>
<footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#"><img src="image/bouton-scroll-top.jpg" alt="Back to top"/></a>
        </p>
      </div>
    </footer>
  </body>
</html
