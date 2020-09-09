
<?php

include("connectiondb.php");

  ?>

<?php

 $iduser= $_POST["iduser"] ;
 $NomUser= $_POST["NomUser"] ;
  $prenom= $_POST["prenom"] ;
 $Login = $_POST["Login"] ;
  $pwd= $_POST["pwd"] ;
   $idprf = $_POST["idprf"] ;


$sql1 = "SELECT * FROM utilisateur WHERE 	IDUSER=$iduser";
 
//exécution de notre requête SQL:
$reque = mysql_query( $sql1) or die( "ERREUR MYSQL numéro: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
//récupération avec mysql_fetch_object(), et affichage de nos résultats :
if( $resu = mysql_fetch_object( $reque) )
{
echo'<script language="Javascript">
			alert ("User  est deja dans la liste document.location.href = "Fournisseur.php";
		</script>';
			
}
else{



$req2 = "SELECT * FROM profil WHERE 	IDPROFIL=$idprf";
	$resul=mysql_query($req2) or die("cnx or id in existe ");

if($rs=mysql_fetch_object($resul)){

$req ="insert into utilisateur (IDUSER,NOM,PRENOM,LOGIN,MDP,IDPROFIL)values('$iduser','$NomUser','$prenom','$Login','$pwd','$idprf')";
	$resultat=mysql_query($req) or die("Connexion impossible");
	if($resultat){
echo'<script language="Javascript">
			alert ("User est ajouter avec succes");
		document.location.href="index1.php";
		</script>';
			
			}
}

}

mysql_close();
			


?>