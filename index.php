<!DOCTYPE html>
<html>
<head>
<title>form wordpress</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<meta charset="UTF-8">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
  <div class="row">
<form class="form-horizontal" action="processus.php" method="get">
<fieldset>

<!-- Form Name -->
<legend>Création de wordpress</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Nom de la base</label>  
  <div class="col-md-4">
  <input id="textinput" name="dbname" type="text" placeholder="Nom de la base" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Utilisateur</label>  
  <div class="col-md-4">
  <input id="textinput" name="dbuser" type="text" placeholder="Utilisateur" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Mot de passe de base de donnés</label>  
  <div class="col-md-4">
  <input id="textinput" name="dbpass" type="password" placeholder="Mot de passe de base de donnés" class="form-control input-md">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="year">Langue</label>
  <div class="col-md-4">
    <select id="year" name="dblang" class="form-control">
      <option value="fr-FR">Fançais</option>
      <option value="en-EN">English</option>
    </select>
  </div>
</div>

<br/>
<br/>
<br/>
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Url</label>  
  <div class="col-md-4">
  <input id="textinput" name="url" type="text" placeholder="url" class="form-control input-md">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Title</label>  
  <div class="col-md-4">
  <input id="textinput" name="title" type="text" placeholder="Title" class="form-control input-md">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Admin</label>  
  <div class="col-md-4">
  <input id="textinput" name="admin" type="text" placeholder="admin " class="form-control input-md">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Email</label>  
  <div class="col-md-4">
  <input id="textinput" name="email" type="text" placeholder="Email" class="form-control input-md">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Mot de passe</label>  
  <div class="col-md-4">
  <input id="textinput" name="pass" type="password" placeholder="Mot de passe" class="form-control input-md">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="button1id"></label>
  <div class="col-md-8">
    <button id="button1id" name="button1id" class="btn btn-success">Crée</button>
     
  </div>
</div>

</fieldset>
</form>

</div>
</div>


</body>
</html>