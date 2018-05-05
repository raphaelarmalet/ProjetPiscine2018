<?php
	if(isset($_POST['Inscription']))
	{
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
			VALUES ('gfhjk', 'dfghjkl', 'tdxgcfjm', 'xtcfynjm', 'xtecrgv', 'srwxdtcfinjo', 'tdcfgubhinj', 'cfygvubhnk', 'tcryvi', 'azeq', '1', 'AZER')";
			
			$result = mysqli_query($co, $qr);
		}
	}
?>