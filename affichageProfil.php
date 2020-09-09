<?php include 'index1.php';

?>

<?php

include("connectiondb.php");

  ?>
<!DOCTYPE html>
<html lang="en">
<head>
<head>
  <title>Affichage Profil</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>
<?php 


$req= "SELECT * FROM profil";
$result=mysql_query($req) or die(mysql_error());

 ?>
<div class="container">
            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID Profil</th>
        <th>Libelle</th>
       

      </tr>
    </thead>

    
    <?php 

    while($rw=mysql_fetch_row($result))
    {

echo "<tbody>";
echo "<tr>";

echo "<td>$rw[0]</td>";
echo "<td>$rw[1]</td>";




echo "<tbody>";
    }



     ?>
    
    
    
  </table>
</div>

</body>
</html>