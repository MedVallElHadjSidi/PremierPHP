<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index2.php">GestionCommande</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
    

<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Gestion  <span class="caret"></span></a>
        <ul class="dropdown-menu">
                <li><a href="affichageCommandeVend.php">Affichage Commande</a></li>
         
          <li><a href="affichageFournisseurVend.php">Affichage Fournisseur</a></li>
   
        </ul>
      </li>

   <li ><a href="index.php">Logout</a></li>
    </ul>
  </div>
</nav>
  


</body>
</html>
