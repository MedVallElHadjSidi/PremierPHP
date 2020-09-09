<?php include 'index1.php';?>

<?php

include("connectiondb.php");

  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Afichage User</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>
<?php 


$req= "SELECT * FROM utilisateur ,profil WHERE Utilisateur.IDPROFIL=profil.IDPROFIL" ;
$result=mysql_query($req) or die(mysql_error());

 ?>
<div class="container">
            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID Utilisateur </th>
        <th>NomUSER</th>
        <th>PRENOM</th>
         <th>LOGIN</th>
        <th>MDP</th>
      
        <th>IDPRF</th>

      </tr>
    </thead>

    
    <?php 

    while($rw=mysql_fetch_row($result))
    {

echo "<tbody>";
echo "<tr>";

echo "<td>$rw[0]</td>";
echo "<td>$rw[1]</td>";
echo "<td>$rw[2]</td>";
echo "<td>$rw[3]</td>";
echo "<td>$rw[4]</td>";
echo "<td>$rw[5]</td>";




echo "<tbody>";
    }



     ?>
    
    
    
  </table>
</div>

</body>
</html>