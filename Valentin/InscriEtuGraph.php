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
        <div class="textJaune">Inscription étudiant
        </div>
        <div class="col-lg-12">
          <form method ="post" action="Inscriptionreussie.php">
            <div class="form-row">
              <div class="form-group col-lg-6">
                <label for="inputID"></label>
                <input type="texte" class="form-control" id="IDEtudiant" name="IDEtudiant" placeholder="Numéro étudiant">
              </div>
              <div class="form-group col-lg-6">
                <label for="inputING"></label>
                <input type="texte" class="form-control" id="ING" name="ING" placeholder="Année d'ING">
              </div>
            </div>
            <div class="form-group">
              <label for="inputMajeur"></label>
              <input type="texte" class="form-control" id="Majeur" name="Majeur" placeholder="Majeur ou futur majeur">
            </div>
            <div class="form-group">
              <label for="inputStage"></label>
              <input type="texte" class="form-control" id="Stage" name="Stage" placeholder="Stages">
            </div>
            <div class="form-group">
              <label for="inputAsso"></label>
              <input type="texte" class="form-control" id="Associatif" name="Associatif" placeholder="Associations">
            </div>
            </div> 
            <input type="submit" class="form-control" name="Inscription" value="Inscription"/></br>
          </form>
        </div>
      </div>
</body>

</html>