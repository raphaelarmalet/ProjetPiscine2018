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
      
        <div class="col-lg-12">
          <form method ="post" action="ModifEmp.php">
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
              <label for="inputPassword"></label>
              <input type="texte" class="form-control" id="MDP" name="MDP" placeholder="Nouveau mot de passe">
            </div>
            <div class="form-group">
              <label for="inputPassword2"></label>
              <input type="texte" class="form-control" id="MDPconfirmation" name="MDPconfirmation" placeholder="Confirmer nouveau mot de passe">
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
              <div class="form-group col-lg-6">
                <label for="inputName"></label>
                <input type="texte" class="form-control" id="Poste" name="Poste" placeholder="Poste">
              </div>
              <div class="form-group col-lg-6">
                <label for="inputName"></label>
                <input type="texte" class="form-control" id="Entreprise" name="Entreprise" placeholder="Entreprise">
              </div>
            </div> 
            <input type="submit" class="form-control" name="Modification" value="Modification"/></br>
          </form>
        </div>
      </div>
</body>

</html>