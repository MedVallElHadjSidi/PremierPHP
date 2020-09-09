

<?php
 
	//connexion au serveur:
$cnx = mysqli_connect( "localhost", "root", "" );
 
//sélection de la base de données:
$db= mysqli_select_db($cnx,"esp");


    $login=$_POST['nom'];
	$passe=$_POST['pass'];
	if ( empty($login)||empty($passe))
	{ 
			echo'<script language="Javascript">
			alert ("Vous n\'avez pas rempli tout le champ");
			document.location.href = "index.php";
			</script>';
		}
		else {
		$sql= 'SELECT MDP,LOGIN,IDPROFIL FROM utilisateur where LOGIN  ="'.$login.'"';
		$requete = mysqli_query($cnx,$sql) or die("ERREUR MYSQL numéro: ".mysql_errno()."<br>Type de cette erreur: ".mysql_error()."<br>\n" );
		 while( $result = mysqli_fetch_object($requete) )
    {
		 $id = $result->IDPROFIL;
		 $log = $result->LOGIN;
		 $passw = $result->MDP;
		
		 if($log==$login && $passw==$passe && $id==1){
		
		 header('location:index1.php');
		
		 }
		// alert ("Bien venu a l\'application LAZOUFORMATION vous ete le super administrateur ");
			
 else if($log==$login && $passw==$passe && $id==2){

  echo'<script language="Javascript">
		document.location.href = "index2.php";
			</script>';
		 }	
//	alert ("Bien venu a l\'application LAZOUFORMATION vous ete un administrateur ");
					 }

//	alert ("Bien venu a l\'application LAZOUFORMATION vous ete un administrateur ");
					 }
	