<?php
session_start();
$SID= $_SESSION['IDuser'];

$serveur ="localhost";
$login = "root";
$pw = "";
$bdd = "ProjetWEB";
		
$co= mysqli_connect($serveur,$login,$pw,$bdd);
$sql = "SELECT Statut FROM user WHERE IDuser='$SID' ";
$result = $co->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) 
    {
        if($row['Statut']=="Etudiant")
        {
            header('Location : ModifEtu.php');
        }
        else if($row['Statut']=="Employeur")
        {
            header('Location : ModifEmp.php');
        }
    }
	}
$co->close();
?>
 
        