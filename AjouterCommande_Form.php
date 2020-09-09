
<?php

include("connectiondb.php");

  ?>

<?php

 $numcom= $_POST["numcom"] ;
 $DateCMD= $_POST["DateCMD"] ;
  $NumClient= $_POST["NumClient"] ;



$sql1 = "SELECT * FROM commande WHERE 	NUMCOM=$numcom";
 
//exécution de notre requête SQL:
$reque = mysql_query( $sql1) or die( "ERREUR MYSQL numéro: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
//récupération avec mysql_fetch_object(), et affichage de nos résultats :
if( $resu = mysql_fetch_object( $reque) )
{
echo'<script language="Javascript">
			alert ("Commande  est deja dans la liste document.location.href = "Fournisseur.php";
		</script>';
			
}
else{



$req2 = "SELECT * FROM client WHERE 	NUM_CLIENT=$NumClient";
	$resul=mysql_query($req2) or die("cnx or id in existe ");

if($rs=mysql_fetch_object($resul)){

$req ="insert into commande (NUMCOM,NUM_CLIENT	,DATECOM)values('$numcom','$NumClient','$DATECOM')";
	$resultat=mysql_query($req) or die("Connexion impossible");
	if($resultat){
echo'<script language="Javascript">
			alert ("Commande est ajouter avec succes");
		document.location.href="index1.php";
		</script>';
			
			}
}

}

mysql_close();
			


?>