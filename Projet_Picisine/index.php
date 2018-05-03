<!DOCTYPE HTML>
<html>

<head>
  <meta charset="utf-8">
  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <link href="assets/css/tuto.css" rel="stylesheet">
  <?php include('Test2.php'); ?>
</head>

<body>
  <div class="container">
    <div class="row">
      <img src="images/TheHiveLogoGrand.png" alt="TheHiveLogoGrand" id="logoGrand">
    </div>
    <div class="row blockTexteLog">
      <div class="col-lg-12 ">
        <div class="textJaune">Bienvenue dans la ruche
        </div>
        <div class="col-lg-12">
          <form method ="post">
            <div class="form-row">
              <div class="form-group col-lg-6">
                <label for="inputEmail4"></label>
                <input type="texte" class="form-control" id="Prenom" name="Prenom" placeholder="Prénom">
              </div>
              <div class="form-group col-lg-6">
                <label for="inputPassword4"></label>
                <input type="texte" class="form-control" id="Nom" name="Nom" placeholder="Nom">
              </div>
            </div>
            <div class="form-group">
              <label for="inputAddress"></label>
              <input type="texte" class="form-control" id="IDuser" name="IDuser" placeholder="Email ECE">
            </div>
            <div class="form-group">
              <label for="inputAddress2"></label>
              <input type="texte" class="form-control" id="MDP" name="MDP" placeholder="mot de passe">
            </div>
            <div class="form-group">
              <label for="inputAddress2"></label>
              <input type="texte" class="form-control" id="MDPConfirmation" name="MDPConfirmation" placeholder="confirmer mot de passe">
            </div>
            <div class="form-group">
              <label for="inputAddress2"></label>
              <input type="texte" class="form-control" id="Langue" name="Prenom" placeholder="Langues parlées">
            </div>
            <div class="form-row">
              <div class="form-group col-lg-6">
                <label for="inputEmail4"></label>
                <input type="texte" class="form-control" id="Age" name="Prenom" placeholder="Age">
              </div>
              <div class="form-group col-lg-6">
                <label for="inputPassword4"></label>
                <input type="texte" class="form-control" id="Tel" name="Prenom" placeholder="Téléphone">
              </div>
              <div class="form-row">
                <div class="form-group col-lg-4">
                  <label for="inputEmail4"></label>
                  <input type="texte" class="form-control" id="Sexe" name="Prenom" placeholder="Sexe">
                </div>
                <div class="form-group col-lg-4">
                  <label for="inputPassword4"></label>
                  <input type="texte" class="form-control" id="Statut" name="Prenom" placeholder="Statut">
                </div>
                <div class="form-group col-lg-4">
                  <label for="inputPassword4"></label>
                  <input type="texte" class="form-control" id="Diplome" name="Prenom" placeholder="Diplome">
                </div>
              </div>
            </div> 
            <input type="submit" class="btn btn-lg btn-warning" id="Inscription" name="Prenom" value = "Inscription">


          </form>
        </div>
      </div>
</body>

</html>