<?php include 'index1.php';


?>


<?php

include("connectiondb.php");

  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Affichage client</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>
<?php 


$req= "SELECT * FROM client";
$result=mysql_query($req) or die(mysql_error());

 ?>
<div class="container">
            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>NumeroClient</th>
        <th>NomClient</th>
        <th>RaisonSocial</th>
         <th>fonction</th>
        <th>Tel</th>
        <th>faxe</th>
        <th>adresse</th>

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
echo "<td>$rw[6]</td>";



echo "<tbody>";
    }



     ?>
    
    
    
  </table>
</div>

</body>
</html>