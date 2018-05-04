<!DOCTYPE HTML>
<html>

<head>
  <meta charset="utf-8">
  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <link href="assets/css/tuto.css" rel="stylesheet">
</head>

<body>
  <div class="container">
    <div class="row">
      <img src="images/TheHiveLogoGrand.png" alt="TheHiveLogoGrand" id="logoGrand">
    </div>
    <div class="row blockTexteLog">
      <div class="col-lg-12 ">
        <div class="textJaune">Connexion
        </div>
        <div class="col-lg-12">
          <form method ="post" action="Connexion.php">
            <div class="form-group">
              <label for="inputMajeur"></label>
              <input type="texte" class="form-control" id="IDuser" name="IDuser" placeholder="Adresse Mail">
              <label for="inputStage"></label>
              <input type="texte" class="form-control" id="MDP" name="MDP" placeholder="Mot de passe">
            </div> 
            <input type="submit" class="form-control" name="Connexion" value="Connexion"/></br>
          </form>
        </div>
      </div>
</body>

</html>