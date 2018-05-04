<?php 
session_start();
//require("ProfilGraph.php")
$SID= $_SESSION['IDuser'];

$serveur ="localhost";
$login = "root";
$pw = "";
$bdd = "ProjetWEB";
		
$co= mysqli_connect($serveur,$login,$pw,$bdd);
$sql = "SELECT Nom,Prenom FROM user WHERE IDuser='$SID' ";
$result = $co->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row['Nom']." ".$row['Prenom'];
    }
	}
$co->close();
?> 

