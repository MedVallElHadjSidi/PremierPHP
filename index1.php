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
      <a class="navbar-brand" href="index1.php">GestionCommande</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Gestion  <span class="caret"></span></a>
        <ul class="dropdown-menu">
                <li><a href="AjouterCommande.php">Ajputer Commande</a></li>
          <li><a href="ajouterClient.php">Ajouter Client </a></li>
          <li><a href="ajouterCat.php">Ajouter Categorie</a></li>
          <li><a href="Fournisseur.php">Ajouter Fournisseur</a></li>
            <li><a href="AjouterProfile.php">Ajputer PROFIL</a></li>
            <li><a href="Utilisateur.php">Ajputer Utilisateur</a></li>
        </ul>
      </li>



<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Gestion  <span class="caret"></span></a>
        <ul class="dropdown-menu">
                <li><a href="affichageCommande.php">Affichage Commande</a></li>
          <li><a href="afiichageClient.php">Affichage Client </a></li>
          <li><a href="AffichageCategorie.php">Affichage Categorie</a></li>
          <li><a href="affichageFournisseur.php">Affichage Fournisseur</a></li>
            <li><a href="affichageProfil.php">Affichage PROFIL</a></li>
            <li><a href="UtilisateurAffichage.php">Affichage Utilisateur</a></li>
        </ul>
      </li>
       <li ><a href="index.php">Logout</a></li>

  
    </ul>
  </div>
</nav>
  


</body>
</html>
