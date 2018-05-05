<?php 
 if (isset($_POST['Inscription']))
 {
  if(!empty ($_POST['IDuser']) &&! empty ($_POST['MDP']) && !empty ($_POST['MDPconfirmation'])&&!empty ($_POST['Nom']) &&! empty ($_POST['Prenom'])&& !empty ($_POST['Age'])&& !empty ($_POST['Langue'])&& !empty ($_POST['Diplome'])&& !empty ($_POST['Tel']))
    {
        $i=0;
        $errors= [];
      extract($_POST);

  
      if (mb_strlen ($Nom)<1)
      {
        $errors[]="Veuillez saisir un nom surperieur à 1 caractère";
        $i=$i+1;

      }

      if (mb_strlen ($Prenom)<1)
      {
        $errors[]="Veuillez saisir un prenom surperieur à 1 caractère";
        $i=$i+1;


      }

      if (mb_strlen ($MDP)<6)
      {
        $errors[]="Veuillez saisir un mot de passe surperieur à 6 caractères";
        $i=$i+1;
      }

      if ($MDP != $MDPconfirmation)
      {
        $errors[]="Mauvais mot de passe";
        $i=$i+1;
  
      }

      if(!filter_var($IDuser, FILTER_VALIDATE_EMAIL))
      {
        $errors[]="Veuillez saisir un email valide";
        $i=$i+1;
      }  

      if(count($errors)==0)
      {
        $serveur ="localhost";
        $login = "root";
        $pw = "";
        $bdd = "projetweb";
    
        $co= mysqli_connect($serveur,$login,$pw,$bdd);
        $dbh = new PDO('mysql:host=localhost;dbname=projetweb', $login, $pw);
    
        if($co)
        {
          $IDUser = $_POST['IDuser'];
          $MDP = $_POST['MDP'];
          $Prenom = $_POST['Prenom'];
          $Nom = $_POST['Nom'];
          $Age = $_POST['Age'];
          $Tel = $_POST['Tel'];
          $Langue = $_POST['Langue'];
          $Diplome = $_POST['Diplome'];

          $q= $dbh->prepare("SELECT IDUser FROM user WHERE IDUser='$IDUser'");
          $q-> execute();
          $count=$q->rowcount();
          $q->closeCursor();

          if($count!=NULL)
          {
            echo "Un compte avec ce mail existe deja";
          }
          else
          {
            $qr= "INSERT INTO `user` (`IDuser`, `Nom`, `Prenom`, `Mdp`, `Sexe`, `Statut`, `Photo`, `Langue`, `Diplome`, `Telephone`, `Age`, `Statut2`) 
                VALUES ('$IDUser','$Nom', '$Prenom', '$MDP', '1', '1', 'e', '$Langue', '$Diplome', '$Tel', '$Age', '1')";
      
            $result = mysqli_query($co, $qr);
          }
          
        }

        }

    }
        else
          {
            $errors[]="Veuillez remplir tous les champs !";
          }
          for ($j = 0; $j < $i; $j++)
          {
            echo $errors[$j];
          }
      }
?>


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
          <form method ="post">
            <div class="form-row">
              <div class="form-group col-lg-6">
                <label for="inputEmail4"></label>
                <input type="texte" class="form-control" id="Prenom" placeholder="Prénom">
              </div>
              <div class="form-group col-lg-6">
                <label for="inputPassword4"></label>
                <input type="texte" class="form-control" id="Nom" placeholder="Nom">
              </div>
            </div>
            <div class="form-group">
              <label for="inputAddress"></label>
              <input type="texte" class="form-control" id="ID" placeholder="Email ECE">
            </div>
            <div class="form-group">
              <label for="inputAddress2"></label>
              <input type="texte" class="form-control" id="MDP" placeholder="mot de passe">
            </div>
            <div class="form-group">
              <label for="inputAddress2"></label>
              <input type="texte" class="form-control" id="MDPconfirmation" placeholder="confirmer mot de passe">
            </div>
            <div class="form-group">
              <label for="inputAddress2"></label>
              <input type="texte" class="form-control" id="Langue" placeholder="Langues parlées">
            </div>
            <div class="form-row">
              <div class="form-group col-lg-6">
                <label for="inputEmail4"></label>
                <input type="texte" class="form-control" id="Age" placeholder="Age">
              </div>
              <div class="form-group col-lg-6">
                <label for="inputPassword4"></label>
                <input type="texte" class="form-control" id="Tel" placeholder="Téléphone">
              </div>
              <div class="form-row">
                <div class="form-group col-lg-4">
                  <label for="inputEmail4"></label>
                  <input type="texte" class="form-control" id="Sexe" placeholder="Sexe">
                </div>
                <div class="form-group col-lg-4">
                  <label for="inputPassword4"></label>
                  <input type="texte" class="form-control" id="Statut" placeholder="Statut">
                </div>
                <div class="form-group col-lg-4">
                  <label for="inputPassword4"></label>
                  <input type="texte" class="form-control" id="Diplome" placeholder="Diplome">
                </div>
              </div>
            </div>
            <input type="submit" class="btn btn-lg btn-warning" id="Inscription">Inscription</a>
          </form>
        </div>
      </div>
</body>

</html>