<?php include 'index1.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GESTION</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min" />

			<body>
				<p></p>
				<p></p>
<div class="container">
	<div class="col-sm-8 ">

<div class="panel panel-primary">
 <div class="panel-heading">Ajouter</div>
  <div class="panel-body">
<form action="AjouterCategorie.php" method="post">
	 	<div class="form-group row">
    <label for="colFormLabel" class="col-sm-2 col-form-label">NumeroCategorie</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="numerocat" placeholder="NumeroCategorie">
    </div>
</div>

	<div class="form-group row">
    <label for="colFormLabel" class="col-sm-2 col-form-label">Nom</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nomCat" placeholder="NumeroCategorie">
    </div>

  </div>


  <div class="form-group row">
    <label for="colFormLabel" class="col-sm-2 col-form-label" >Description</label>
    <div class="col-sm-10">
<div class="form-group green-border-focus">

  <textarea class="form-control"   rows="3"  name="Description"></textarea>
</div>
    </div>

  </div>

<div class="form-group row">

    <div class="col-sm-10">
<button class="btn btn-primary" type="submit">Ajouter</button>
    </div>

  </div>

</form>
 
  </div>
  </div>

</div>
					

				</div>

			</body>

          

</html>
