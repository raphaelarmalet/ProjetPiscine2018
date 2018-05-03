<?php
	echo "ca marche pas";
	if(isset($_POST['Inscription']))
	{
		$serveur ="localhost";
		$login = "root";
		$pw = "";
		$bdd = "projetweb";
		
		$co= mysqli_connect($serveur,$login,$pw,$bdd);
		echo ("ca marche pas");
		
		if($co)
		{
			$qr= "INSERT INTO `user` (`IDuser`, `Nom`, `Prenom`, `Mdp`, `Sexe`, `Statut`, `Photo`, `Langue`, `Diplome`, `Telephone`, `Age`, `Statut2`) 
			VALUES ('gfhjk', 'dfghjkl', 'tdxgcfjm', 'xtcfynjm', 'xtecrgv', 'srwxdtcfinjo', 'tdcfgubhinj', 'cfygvubhnk', 'tcryvi', 'azeq', '1', 'AZER')";
			
			$result = mysqli_query($co, $qr);
		}
	}
?>

<!DOCTYPE html>
<html>
 <title> Inscription </title>
 <meta charset = "UTF-8"/>
<form method = "post">
	<p>
		<input type="submit" name="Inscription" value="Inscription" /> </br>
		
	</p>
</form>
</html>