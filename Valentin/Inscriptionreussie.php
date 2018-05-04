  <?php 
 session_start();
 require('InscriEtuGraph.php');  
if (isset($_POST['Inscription']))
 {
	if(!empty ($_POST['ING']) &&! empty ($_POST['Majeur']) && !empty ($_POST['Stage'])&&!empty ($_POST['Associatif']))
		{
     		$i=0;
     		$errors= [];
 			extract($_POST);

	
			if ($ING<1 || $ING>5)
			{
				$errors[]="Veuillez saisir un nombre compris entre 1 et 5";
				$i=$i+1;

			}

			if (mb_strlen ($Majeur)<2)
			{
				$errors[]="Veuillez saisir un mot supérieur à 3 caractère";
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
					$ING = $_POST['ING'];
					$Majeur = $_POST['Majeur'];
					$Stage = $_POST['Stage'];
					$Associatif = $_POST['Associatif'];
					$IDEtudiant= $_POST['IDEtudiant'];
					$IDUser=$_SESSION['IDuser'];
					$q= $dbh->prepare("SELECT IDEtudiant FROM etudiant WHERE IDEtudiant='$IDEtudiant'");
					$q-> execute();
					$count=$q->rowcount();
					$q->closeCursor();

					if($count!=NULL)
					{
						echo "Un compte avec cet ID étudiant existe déjà";
					}
					else
					{
						echo $q1= "INSERT INTO `etudiant` (`IDEtudiant`, `IDUser`, `ING`, `Majeur`, `Stage`, `Associatif`) VALUES ('$IDEtudiant', '$IDUser', '$ING', '$Majeur', '$Stage', '$Associatif')";
						$result = mysqli_query($co, $q1);
						$q= $dbh->prepare("SELECT IDEtudiant FROM etudiant WHERE IDEtudiant='$IDEtudiant'");
						$q-> execute();
						$count=$q->rowcount();
						$q->closeCursor();
						if($count!=NULL)
						{
							header('Location: Profil.php');
						}
						else
						{
							echo "Mettez des nombres pour les champs ING et IDEtudiant";
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