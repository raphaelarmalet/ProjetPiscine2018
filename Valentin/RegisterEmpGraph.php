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
        <div class="textJaune">Inscription employeur
        </div>
        <div class="col-lg-12">
          <form method ="post" action="RegisterEmpFct.php">
            <div class="form-row">
              <div class="form-group col-lg-6">
                <label for="inputID"></label>
                <input type="texte" class="form-control" id="IDEmployeur" name="IDEmployeur" placeholder="Numéro d'ID employeur">
              </div>
              <div class="form-group col-lg-6">
                <label for="inputPoste"></label>
                <input type="texte" class="form-control" id="Poste" name="Poste" placeholder="Poste">
              </div>
              <div class="col-lg-12">
                <label for="inputPoste"></label>
                <input type="texte" class="form-control" id="Entreprise" name="Entreprise" placeholder="Entreprise">
            </div>
              <div class="col-lg-12">
                <label for="inputPoste"></label>
                <label for="inputPoste"></label>
            <input type="submit" class="form-control" name="Inscription" value="Inscription"/></br>
          </div>
          </form>
        </div>
      </div>
</body>

</html>