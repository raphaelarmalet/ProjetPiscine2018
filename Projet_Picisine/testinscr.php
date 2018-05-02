<?php
	if(isset($_POST['Inscription']))
	{
		echo "ca marche pas";
		$serveur ="localhost";
		$login = "root";
		$pw = "";
		$bdd = "projetweb";
		
		$co= mysqli_connect($serveur,$login,$pw,$bdd);
		
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
			
			$qr= "INSERT INTO `user` (`IDuser`, `Nom`, `Prenom`, `Mdp`, `Sexe`, `Statut`, `Photo`, `Langue`, `Diplome`, `Telephone`, `Age`, `Statut2`) 
			VALUES ('$IDUser','$Nom', '$Prenom', '$MDP', '1', '1', 'e', '$Langue', '$Diplome', '$Tel', '$Age', '1')";
			
			$result = mysqli_query($co, $qr);
		}
	}
?>

<!DOCTYPE html>

<html>
 <title> Inscription </title>
 <meta charset = "UTF_8"/>
 <body>
<form method = "post">
	<p>
	
		<label for = "IDuser"> Mail : </label>
        <input type="text" name="IDuser" id="IDuser" required="required"/> </br>
		
		<label for = "MDP"> MDP : </label>
        <input type="text" name="MDP" id="MDP" required="required"/> </br>
		
		<label for = "Nom"> Nom : </label>
        <input type="text" name="Nom" id="Nom" required="required"/> </br>
		
		<label for = "Prenom"> Prenom : </label>
        <input type="text" name="Prenom" id="Prenom" required="required"/> </br>
		
		<label for = "Age"> Age : </label>
        <input type="text" name="Age" id="Age" required="required"/> </br>
		
		<label for = "Langue"> Langue : </label>
        <input type="text" name="Langue" id="Langue" required="required"/> </br>
		
		<label for = "Diplome"> Diplome : </label>
        <input type="text" name="Diplome" id="Diplome" required="required"/> </br>
		
		<label for = "Tel"> Tel : </label>
        <input type="text" name="Tel" id="Tel" required="required"/> </br>
		
		<label for = "Sexe"> Sexe : </label>
        <input type="checkbox" name="Homme" id="Sexe" /> </br>
		<input type="checkbox" name="Femme" id="Sexe" /> </br>
		
		<label for = "Statut"> Statut : </label>
        <input type="checkbox" name="Homme" id="Statut" /> </br>
		<input type="checkbox" name="Femme" id="Statut" /> </br>
		
		<input type="submit" name="Inscription" value="Inscription" /> </br>
		
		</p>
		</form>
		</body>
</html>