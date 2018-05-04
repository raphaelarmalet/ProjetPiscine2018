<?php 
 session_start();
 require('RegisterEmpGraph.php');  
if (isset($_POST['Inscription']))
 {
	if(!empty ($_POST['IDEmployeur']) && !empty ($_POST['Poste']))
		{
     		$i=0;
     		$errors= [];
 			extract($_POST);

			if (mb_strlen ($Poste)<2)
			{
				$errors[]="Veuillez saisir un mot supérieur à 2 caractère";
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
					$IDEmployeur = $_POST['IDEmployeur'];
					$Poste = $_POST['Poste'];
					$Entreprise = $_POST['Entreprise'];
					$IDUser=$_SESSION['IDuser'];
					$q= $dbh->prepare("SELECT IDEmployeur FROM employeur WHERE IDEmployeur='$IDEmployeur'");
					$q-> execute();
					$count=$q->rowcount();
					$q->closeCursor();

					if($count!=NULL)
					{
						echo "Un compte avec cet ID employeur existe déjà";
					}
					else
					{
						echo $q1= "INSERT INTO `employeur` (`IDEmployeur`, `IDUser`, `Poste`, `Entreprise`) VALUES ('$IDEmployeur', '$IDUser', '$Poste', '$Entreprise')";
						$result = mysqli_query($co, $q1);
						$q= $dbh->prepare("SELECT IDEmployeur FROM employeur WHERE IDEmployeur='$IDEmployeur'");
						$q-> execute();
						$count=$q->rowcount();
						$q->closeCursor();
						if($count!=NULL)
						{
							header('Location: Profil.php');
						}
						else
						{
							echo "Mettez des nombres pour le champ IDEmployeur";
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
  	}
?>