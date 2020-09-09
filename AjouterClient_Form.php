<?php

include("connectiondb.php");

  ?>
<?php
//connexion au serveur:

 $numeroclient= $_POST["numeroClient"] ;
 $nomClient = $_POST["NomClient"] ;
 $raisonSocial = $_POST["RaisonSocial"] ;
  $fonction= $_POST["fonction"] ;
 $tel = $_POST["Tel"] ;
 $fax = $_POST["fax"] ;
  $adresse = $_POST["adresse"] ;

$sql1 = "SELECT * FROM client WHERE NUM_CLIENT=$numeroclient";
 
//exécution de notre requête SQL:
$reque = mysql_query( $sql1) or die( "ERREUR MYSQL numéro: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
//récupération avec mysql_fetch_object(), et affichage de nos résultats :
if( $resu = mysql_fetch_object( $reque) )
{
echo'<script language="Javascript">
			alert ("le client  est deja dans la liste document.location.href = "ajouterClient.php";
		</script>';
			
}
else{
$req ="insert into client (NUM_CLIENT,NOMCLIENT	,RAISONSOCIAL,	FONCTION,TEL,FAX,ADRESS)values('$numeroclient','$nomClient','$raisonSocial','$fonction','$tel','$fax','$adresse')";
	$resultat=mysql_query($req) or die("Connexion impossible");
	if($resultat){
echo'<script language="Javascript">
			alert ("client est ajouter avec succes");
		document.location.href = "index1.php";
		</script>';
			
			}
}

			


?>