
<!DOCTYPE HTML>
<html>

<head>
  <meta charset="utf-8">
  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <link href="assets/css/tuto.css" rel="stylesheet">
</head>

<body>
  <header>
    <div class="container">
     <div class="row">
      <div class = "col-lg-9">
              <label for="inputRechercher"></label>
              <input type="texte" class="form-control" id="inputRechercher" name="inputRechercher">
      </div>
      <div class = "col-lg-3">
              <label for="buttonRechercher"></label>
               <input type="submit" class="form-control" name="Rechercher" value="Rechercher"/></br>
               <?php
              if(isset($_POST['Rechercher']))
              {
                  header('Location : rechercher.php');
              }
              ?>
      </div>
      </form>
    <div class="row">
        <img class="col-lg-4" src="images/TheHiveLogoPetit.png" alt="TheHiveLogoGrand" id="logoPetit">
        <a href=" journal.php " class="col-lg-1 headerTextMenu ">JOURNAL</a>
        <a href=" reseau.php" class="col-lg-1 headerTextMenu">RESEAU</a>
        <a href=" profil.php" class="col-lg-1 headerTextMenu ">PROFIL</a>
        <a href=" emplois.php" class="col-lg-1 headerTextMenu">EMPLOIS</a>
        <a href=" Notification.php" class="col-lg-1 headerTextMenu">NEWS</a>
        <a href=" Messagerie.php" class="col-lg-2 headerTextMenu">MESSAGERIE</a>
        <a href=" Connexion.php" class="col-lg-1 headerTextMenu">DECONNEXION</a>
  </header>


    <div class="row">
      <div class="col-lg-4 blockFeedUserInfo"> T1exte
        <div class="row">
        </div>
      </div>

      <div class="col-lg-7 offset-col-1 blockTexteFeed"> Texte


      </div>
</body>

</html>

<?php
  echo "Pas encore codé"
?>