
<?php

include("connectiondb.php");

  ?>

<?php

 $idfournisseur= $_POST["idfournisseur"] ;
 $NomFournisseur= $_POST["NomFournisseur"] ;
  $prenom= $_POST["prenom"] ;
 $Tel = $_POST["Tel"] ;

$sql1 = "SELECT * FROM fournisseur WHERE IDFOURNISSEUR=$idfournisseur";
 
//exécution de notre requête SQL:
$reque = mysql_query( $sql1) or die( "ERREUR MYSQL numéro: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
//récupération avec mysql_fetch_object(), et affichage de nos résultats :
if( $resu = mysql_fetch_object( $reque) )
{
echo'<script language="Javascript">
			alert ("Fournisseur  est deja dans la liste document.location.href = "Fournisseur.php";
		</script>';
			
}
else{
$req ="insert into fournisseur (IDFOURNISSEUR,NOM,PRENOM,TEL)values('$idfournisseur','$NomFournisseur','$prenom','$Tel')";
	$resultat=mysql_query($req) or die("Connexion impossible");
	if($resultat){
echo'<script language="Javascript">
			alert ("profil est ajouter avec succes");
		document.location.href="index1.php";
		</script>';
			
			}
}
mysql_close();
			


?>