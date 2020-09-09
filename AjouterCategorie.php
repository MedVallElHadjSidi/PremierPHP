<?php

include("connectiondb.php");

  ?>

<?php
  
 $numero= $_POST["numerocat"] ;
 $nomCat = $_POST["nomCat"] ;
 $description = $_POST["Description"] ;

$sql1 = "SELECT * FROM categorie WHERE CODECAT=$numero";
 
//exécution de notre requête SQL:
$reque = mysql_query( $sql1 ) or die( "ERREUR MYSQL numéro: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
//récupération avec mysql_fetch_object(), et affichage de nos résultats :
if( $resu = mysql_fetch_object( $reque) )
{
echo'<script language="Javascript">
			alert ("l\'categorie est deja dans la liste document.location.href = "AjouterCategorie.php";
		</script>';
			
}
else{
$req ="insert into categorie (CODECAT,NOMCAT,DESCRIPTION)values('$numero','$nomCat','$description')";
	$resultat=mysql_query($req) or die("Connexion impossible");
	if($resultat){
echo'<script language="Javascript">
			alert ("categorie est ajouter avec succes");
			document.location.href="index1.php"
		
		</script>';
			
			}
}
mysql_close();
			


?>