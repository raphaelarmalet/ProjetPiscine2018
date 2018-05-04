<?php
	require('index.php');
 if (isset($_POST['Inscription']))
 {
 	$i=0;
	if(!empty ($_POST['IDuser']) &&! empty ($_POST['MDP']) && !empty ($_POST['MDPconfirmation'])&&!empty ($_POST['Nom']) &&! empty ($_POST['Prenom'])&& !empty ($_POST['Age'])&& !empty ($_POST['Langue'])&& !empty ($_POST['Diplome'])&& !empty ($_POST['Tel']) && !empty ($_POST['Statut'])&& !empty ($_POST['Sexe']))
		{
     		
     		$errors= [];
 			extract($_POST);

 			if($Sexe=='Homme')
 			{
 				$Sexe= '0';
 			}
 			else if($Sexe=='Femme')
 			{
 				$Sexe= '1';
 			}
 			else if($Sexe!='Femme' && $Sexe!='Homme')
 			{
 				echo "Veuillez rentrer bien rentrer votre sexe";
 			}

 			if($Statut=='Etudiant')
 			{
 				$Statut= '0';
 			}
 			else if($Statut=='Employeur')
 			{
 				$Statut= '1';
 			}
 			else if($Statut!='Etudiant' && $Statut!='Employeur')
 			{
 				echo "Les deux statuts sont Employeur ou Etudiant";
 			}
	
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
								VALUES ('$IDUser','$Nom', '$Prenom', '$MDP', '$Sexe', '$Statut', 'e', '$Langue', '$Diplome', '$Tel', '$Age', '1')";
			
						$result = mysqli_query($co, $qr);
						echo "ca marche salt";
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