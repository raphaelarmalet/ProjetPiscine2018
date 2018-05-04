
<?php 
session_start();
$SID= $_SESSION['IDuser'];

$serveur ="localhost";
$login = "root";
$pw = "";
$bdd = "ProjetWEB";
		
$co= mysqli_connect($serveur,$login,$pw,$bdd);
		
			if ($co->connect_error) {
    die("Connection failed: " . $co->connect_error);
} 

$sql = "SELECT Nom, Prenom,Age,Diplome,Sexe,Telephone FROM user WHERE IDuser='$SID' ";
$result = $co->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Nom: " . $row["Nom"]. " - Prenom: " . $row["Prenom"]. "-Age " . $row["Age"]."-Diplome" . $row["Diplome"]."-Sexe " . $row["Sexe"]."-Telephone " . $row["Telephone"]. "<br>";
    }
} else {
    echo "0 results";
}
$co->close();
?> 
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
</head>

<body>
	<form method ="post" action="Accueil.php">
	 <input type="submit" name="Connexion" value="Connexion"/></br>
	  <input type="submit" name="Inscription" value="Inscription"/></br>
	</form>
</body>
</html>
