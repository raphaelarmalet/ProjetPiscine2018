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
        <div class="textJaune">Bienvenue dans la ruche
        </div>
        <div class="col-lg-12">
          <form method ="post" action="RegisterFct.php">
            <div class="form-row">
              <div class="form-group col-lg-6">
                <label for="inputName"></label>
                <input type="texte" class="form-control" id="Prenom" name="Prenom" placeholder="Prenom">
              </div>
              <div class="form-group col-lg-6">
                <label for="inputName"></label>
                <input type="texte" class="form-control" id="Nom" name="Nom" placeholder="Nom">
              </div>
            </div>
            <div class="form-group">
              <label for="inputEmail"></label>
              <input type="texte" class="form-control" id="IDuser" name="IDuser" placeholder="Email ECE">
            </div>
            <div class="form-group">
              <label for="inputPassword"></label>
              <input type="texte" class="form-control" id="MDP" name="MDP" placeholder="mot de passe">
            </div>
            <div class="form-group">
              <label for="inputPassword2"></label>
              <input type="texte" class="form-control" id="MDPconfirmation" name="MDPconfirmation" placeholder="confirmer mot de passe">
            </div>
            <div class="form-group">
              <label for="inputAddress2"></label>
              <input type="texte" class="form-control" id="Langue" name="Langue" placeholder="Langues parlees">
            </div>
            <div class="form-row">
              <div class="form-group col-lg-6">
                <label for="inputEmail4"></label>
                <input type="texte" class="form-control" id="Age" name="Age" placeholder="Age">
              </div>
              <div class="form-group col-lg-6">
                <label for="inputPassword4"></label>
                <input type="texte" class="form-control" id="Tel" name="Tel" placeholder="Telephone">
              </div>
              <div class="form-row">
                <div class="form-group col-lg-4">
                  <label for="selectSexe"></label>
              <select class="form-control" id="Sexe" name="Sexe">
              <option>Homme</option>
              <option>Femme</option>
              </select>
                </div>
                <div class="form-group col-lg-4">
                  <label for="selectStatut"></label>
                  <select class="form-control" id="Statut" name="Statut">
                  <option>Etudiant</option>
                  <option>Employeur</option>
              </select>
                </div>
                <div class="form-group col-lg-4">
                  <label for="inputPassword4"></label>
                  <input type="texte" class="form-control" id="Diplome" name="Diplome" placeholder="Diplome">
                </div>
              </div>
            </div> 
            <input type="submit" class="form-control" name="Inscription" value="Inscription"/></br>


          </form>
        </div>
      </div>
</body>

</html>