
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
        <img class="col-lg-4" src="images/TheHiveLogoPetit.png" alt="TheHiveLogoGrand" id="logoPetit">
        <a href=" journal.html " class="col-lg-1 headerTextMenu ">JOURNAL</a>
        <a href=" reseau.html" class="col-lg-1 headerTextMenu">RESEAU</a>
        <a href=" profil.html" class="col-lg-1 headerTextMenu ">PROFIL</a>
        <a href=" emplois.html" class="col-lg-1 headerTextMenu">EMPLOIS</a>
        <a href=" notifications.html" class="col-lg-2 headerTextMenu">NOTIFICATIONS</a>
        <a href=" messagerie.html" class="col-lg-2 headerTextMenu">MESSAGERIE</a>
  </header>
  </div>
  <div class="row">
    <div class="row">
      <img class="PhotoProfil" src="images/PhotoProfil.png" alt="photoProfil">
      <div class="form-row align-items-center">
      	<div  class ="col center">
        <h1 class="col-lg-12">
<?php 
session_start();
$SID= $_SESSION['IDuser'];

$serveur ="localhost";
$login = "root";
$pw = "";
$bdd = "ProjetWEB";
		
$co= mysqli_connect($serveur,$login,$pw,$bdd);
$sql = "SELECT Nom,Prenom FROM user WHERE IDuser='$SID' ";
$result = $co->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo $row['Nom']." ".$row['Prenom'];
    }
	}
$co->close();
?>  
        </h1>
    </div>
        <div class="col center">
        <h2 class="col-lg-12">
<?php 
$SID= $_SESSION['IDuser'];

$serveur ="localhost";
$login = "root";
$pw = "";
$bdd = "ProjetWEB";
		
$co= mysqli_connect($serveur,$login,$pw,$bdd);
$sql = "SELECT ING FROM etudiant WHERE IDuser='$SID' ";
$result = $co->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ING".$row['ING'];
    }
	}
$sql = "SELECT Poste,Entreprise FROM employeur WHERE IDuser='$SID' ";
$result = $co->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo $row['Poste']." à ".$row['Entreprise'];
    }
	}
$co->close();
?>  
		</h2>
	</div>
      </div>
    </div>
  </div>
  <div class="row center">

    <div class="col-lg-6">
      <table class="table ">

        <tbody>
          <tr>
            <td>Age</td>
            <td>
<?php 
$SID= $_SESSION['IDuser'];

$serveur ="localhost";
$login = "root";
$pw = "";
$bdd = "ProjetWEB";
		
$co= mysqli_connect($serveur,$login,$pw,$bdd);
$sql = "SELECT Age FROM user WHERE IDuser='$SID' ";
$result = $co->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo $row['Age'];
    }
	}
$co->close();
?>
            </td>
          </tr>
          <tr>
            <td>Langues</td>
            <td>
<?php 
$SID= $_SESSION['IDuser'];

$serveur ="localhost";
$login = "root";
$pw = "";
$bdd = "ProjetWEB";
		
$co= mysqli_connect($serveur,$login,$pw,$bdd);
$sql = "SELECT Langue FROM user WHERE IDuser='$SID' ";
$result = $co->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo $row['Langue'];
    }
	}
$co->close();
?>
            </td>
          </tr>
          <tr>
            <td>Téléphone</td>
            <td>
<?php 
$SID= $_SESSION['IDuser'];

$serveur ="localhost";
$login = "root";
$pw = "";
$bdd = "ProjetWEB";
		
$co= mysqli_connect($serveur,$login,$pw,$bdd);
$sql = "SELECT Telephone FROM user WHERE IDuser='$SID' ";
$result = $co->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo $row['Telephone'];
    }
	}
$co->close();
?></td>
          </tr>
          <tr>
            <td>Diplome</td>
            <td>
<?php 
$SID= $_SESSION['IDuser'];

$serveur ="localhost";
$login = "root";
$pw = "";
$bdd = "ProjetWEB";
		
$co= mysqli_connect($serveur,$login,$pw,$bdd);
$sql = "SELECT Diplome FROM user WHERE IDuser='$SID' ";
$result = $co->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo $row['Diplome'];
    }
	}
$co->close();
?>
            </td>
          </tr>
          <tr>
            <td>Statut</td>
            <td>
<?php 
$SID= $_SESSION['IDuser'];

$serveur ="localhost";
$login = "root";
$pw = "";
$bdd = "ProjetWEB";
		
$co= mysqli_connect($serveur,$login,$pw,$bdd);
$sql = "SELECT Statut FROM user WHERE IDuser='$SID' ";
$result = $co->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo $row['Statut'];
    }
	}
$co->close();
?>
</td>
          </tr>

        </tbody>
      </table>
    </div>
  </div>

  </div>
</body>

</html>