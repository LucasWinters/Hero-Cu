<?php
   session_start();
$_SESSION["original"] = 0;
$_SESSION["derivative"] = 0;
$_SESSION["edge"] = 0;
?>

<!DOCTYPE html>
<html>
<head>
      <link href="shopStyle.css" type="text/css" rel="stylesheet">
      <title>ANEA SHOP</title>
       <meta charset="utf-8">
</head>
<body>
  <?php
    include 'header.php';
    ?>
    <h1 style="text-align: center";><strong>THE STORE</strong></h1>
 <div class="row">
 <form action="shopadd.php" method="post">
  <div class="column">
     <img class="products" src="nanoalpha.jpg" alt="alpha" style='height: 100%; width: 100%; object-fit: contain; padding-bottom: 20px'>
     <br>
     <input type="submit" name="add1" value="ADD TO CART" style="font-size: 17px">
  </div>
  <div class="column">
    <img class="products" src="nanobeta.jpg" alt="beta" style='height: 100%; width: 100%; object-fit: contain; padding-bottom: 20px'>
    <br>
     <input type="submit" name="add2" value="ADD TO CART" style="font-size: 17px">

  </div>
  <div class="column">
    <img class="products" src="nanosuit1.jpg" alt="nano1" style='height: 100%; width: 100%; object-fit: contain; padding-bottom: 20px'>
    <br>
    <input type="submit" name="add3" value="ADD TO CART" style="font-size: 17px">
  </div>
     </form>
</div>

  </body>
<script type="text/javascript" src="total.js"></script>
</html> 