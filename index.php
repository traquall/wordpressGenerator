<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>form wORDPRESS</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<meta charset="UTF-8">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
</head>
<body>
<div class="container">
  <div class="row">
<form class="form-horizontal" enctype="multipart/form-data" id="form1" name="Verif" action="processus.php" method="get">
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
  <input type="text" name="url" id="url" placeholder="url" maxlength="15" class="form-control input-md">
    
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
  <label class="col-md-4 control-label" for="textinput">Dossier</label>  
  <div class="col-md-4">
  <input id="textinput" name="dossier" type="file" placeholder="Dossier" class="form-control input-md">
    
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

<script type="text/javascript">
/*var dd = document.Verif.url.value;
alert(dd);

function checkIP(IP) {
  v = eval("/\b((25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(25[0-5]2[0-4][0-9]|[01]?[0-9][0-9]?)\b/g.exec(IP) == null");
  if (v) 
    alert("IP '" + IP + "' non valide");
  else 
    alert("IP valide :)");
}

checkIP(dd);*/  
 </script>

</body>
</html>