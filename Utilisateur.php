
<?php include 'index1.php';?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GESTION Utilisateur</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min" />

      <body>
        <p></p>
        <p></p>
<div class="container">
  <div class="col-sm-8 ">

<div class="panel panel-primary">
 <div class="panel-heading">Ajouter Utilisateur</div>
  <div class="panel-body">
<form action="Utilisateur_Form.php" method="post">
    <div class="form-group row">
    <label for="colFormLabel" class="col-sm-2 col-form-label">IDUser</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="iduser" placeholder="ID User" required="required">
    </div>
</div>

  <div class="form-group row">
    <label for="colFormLabel" class="col-sm-2 col-form-label">Nom</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="NomUser" placeholder="NomUser" required="required">
    </div>

  </div>
<div class="form-group row">
    <label for="colFormLabel" class="col-sm-2 col-form-label">Prenom</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="prenom" placeholder="Prenom" required="required">
    </div>

  </div>


  <div class="form-group row">
    <label for="colFormLabel" class="col-sm-2 col-form-label">Login</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="Login" placeholder="Login" required="required">
    </div>

  </div>
  <div class="form-group row">
    <label for="colFormLabel" class="col-sm-2 col-form-label">PWD</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="pwd" placeholder="Password" required="required">
    </div>

  </div>



  <div class="form-group row">
    <label for="colFormLabel" class="col-sm-2 col-form-label">ID Profile</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="idprf" placeholder="IDprofile" required="required">
    </div>

  </div>
 

  

  

<div class="form-group row">

    <div class="col-sm-10">
<button class="btn btn-primary" type="submit">Ajouter Utilisateur </button>
    </div>

  </div>

</form>
 
  </div>
  </div>

</div>
          

        </div>

      </body>

          

</html>