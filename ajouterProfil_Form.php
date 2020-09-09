
<?php

include("connectiondb.php");

  ?>

<?php

 $idprofil= $_POST["idprofil"] ;
 $libelle = $_POST["libelle"] ;

$sql1 = "SELECT * FROM profil WHERE IDPROFIL=$idprofil";
 
//exécution de notre requête SQL:
$reque = mysql_query( $sql1) or die( "ERREUR MYSQL numéro: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
//récupération avec mysql_fetch_object(), et affichage de nos résultats :
if( $resu = mysql_fetch_object( $reque) )
{
echo'<script language="Javascript">
			alert ("le profil  est deja dans la liste document.location.href = "ajouterClient.php";
		</script>';
			
}
else{
$req ="insert into profil (IDPROFIL,LIBELEPROFIL)values('$idprofil','$libelle')";
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