


<!DOCTYPE html>

<html>
 <title> Inscription </title>
 <meta charset = "UTF-8"/>
 <body>
 <form method = "post"> 


<?php 
session_start();
 if (isset($_POST['Inscription']))
 {
	if(!empty ($_POST['IDuser']) &&! empty ($_POST['MDP']) && !empty ($_POST['MDPconfirmation'])&&!empty ($_POST['Nom']) &&! empty ($_POST['Prenom'])&& !empty ($_POST['Age'])&& !empty ($_POST['Langue'])&& !empty ($_POST['Diplome'])&& !empty ($_POST['Tel']))
		{
     		$i=0;
     		$errors= [];
 			extract($_POST);

	
			if (mb_strlen ($Nom)<3)
			{
				$errors[]="Veuillez saisir un nom surperieur à 3 caractère";
				$i=$i+1;

			}

			if (mb_strlen ($Prenom)<3)
			{
				$errors[]="Veuillez saisir un prenom surperieur à 3 caractère";
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
				$pw = "root";
				$bdd = "ProjetWEB";
		
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
					
					

					/*$q= $co->prepare("SELECT IDUser FROM user WHERE IDUser='$IDUser'");
					$q-> execute();
					$count=$q->rowcount();
					$q->closeCursor();

					if($count=0)
					{*/
						$qr= "INSERT INTO `user` (`IDuser`, `Nom`, `Prenom`, `Mdp`, `Sexe`, `Statut`, `Photo`, `Langue`, `Diplome`, `Telephone`, `Age`, `Statut2`) 
								VALUES ('$IDUser','$Nom', '$Prenom', '$MDP', '1', '1', 'e', '$Langue', '$Diplome', '$Tel', '$Age', '1')";
			
						$result = mysqli_query($co, $qr);

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

$_SESSION['IDuser'] = $IDuser;
$_SESSION['Nom'] = $Nom;
$_SESSION['Prenom'] = $Prenom;
$_SESSION['Age'] = $Age;
$_SESSION['Diplome'] = $Diplome;
$_SESSION['Tel'] = $Tel;
$_SESSION['Langue'] = $Langue;


?> 


	<p>
	
		<label for = "IDuser"> Mail : </label>
        <input type="text" name="IDuser" id="IDuser" required="required"/> </br>
       

		<label for = "MDP"> MDP : </label>
        <input type="text" name="MDP" id="MDP" required="required"/> </br>

        <label for = "MDPconfirmation"> MDPC : </label>
        <input type="text" name="MDPconfirmation" id="MDPconfirmation" required="required"/> </br>
		
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
		
		<input type="submit" name="Inscription" value="Inscription"/></br>
       


        <button> <a href="Inscriptionreussie.php?variable" > suivant </a> </button>
       </br>
        

       
	

		</p>
		</form>
		</body>
</html>