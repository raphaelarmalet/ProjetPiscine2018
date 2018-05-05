<?php
session_start();
	require('ModifEmpGraph.php');
 if (isset($_POST['Modification']))
 {
 	$i=0;
     		$errors= [];
 			extract($_POST);
			if (mb_strlen ($Nom)<2)
			{
				$errors[]="Veuillez saisir un nom supérieur à 1 caractère";
				$i=$i+1;
			}

			if (mb_strlen ($Prenom)<2)
			{
				$errors[]="Veuillez saisir un prénom supérieur à 1 caractère";
				$i=$i+1;
			}

			if (mb_strlen ($MDP)<6)
			{
				$errors[]="Veuillez saisir un mot de passe supérieur à 6 caractères";
				$i=$i+1;
			}

			if ($MDP != $MDPconfirmation)
			{
				$errors[]="Mauvais mot de passe";
				$i=$i+1;
	
			}

			if (mb_strlen ($Poste)<2)
			{
				$errors[]="Veuillez saisir un mot supérieur à 1 caractère";
				$i=$i+1;
			}
			if (mb_strlen ($Entreprise)<2)
			{
				$errors[]="Veuillez saisir un mot supérieur à 1 caractère";
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
					$IDUser = $_SESSION['IDuser'];
					$MDP = $_POST['MDP'];
					$Prenom = $_POST['Prenom'];
					$Nom = $_POST['Nom'];
					$Age = $_POST['Age'];
					$Tel = $_POST['Tel'];
					$Langue = $_POST['Langue'];
					$Diplome = $_POST['Diplome'];
					$Entreprise = $_POST['Entreprise'];
					$Poste = $_POST['Poste'];
					$qr= "UPDATE `user` SET `Mdp` = '$MDP', `Age` = '$Age', `Prenom` = '$Prenom', `Nom` = '$Nom', `Telephone` = '$Tel', `Langue` = '$Langue', `Diplome` = '$Diplome' WHERE `user`.`IDuser` = '$IDUser'";
					$result = mysqli_query($co, $qr);
					$qr= "UPDATE `etudiant` SET `Poste` = '$Poste', `Entreprise` = '$Entreprise' WHERE `etudiant`.`IDuser` = '$IDUser'";
					$result = mysqli_query($co, $qr);
					header('Location: Profil.php');
				}

 		}

  		for ($j = 0; $j < $i; $j++)
  		{
  					echo $errors[$j];
  		}
  		}
?>