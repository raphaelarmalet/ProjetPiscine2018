

<!DOCTYPE html>

<html>
 <title> Inscription </title>
 <meta charset = "UTF-8"/>
 <body>
 
 <?php 
 session_start();
		 
		 echo $_SESSION['IDuser'];
  	
  
if (isset($_POST['Inscription2']))
 {
	if(!empty ($_POST['ING']) &&! empty ($_POST['Majeur']) && !empty ($_POST['Stage'])&&!empty ($_POST['Associatif']))
		{
     		$i=0;
     		$errors= [];
 			extract($_POST);

	
			if (mb_strlen ($ING)>1)
			{
				$errors[]="Veuillez saisir un nombre compris entre 1 et 5";
				$i=$i+1;

			}

			if (mb_strlen ($Majeur)<3)
			{
				$errors[]="Veuillez saisir un mot surperieur à 3 caractère";
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
					$ING = $_POST['ING'];
					$Majeur = $_POST['Majeur'];
					$Stage = $_POST['Stage'];
					$Associatif = $_POST['Associatif'];
					$IDEtudiant= $_POST['IDEtudiant'];
					$IDUser=$_SESSION['IDuser'];
					/*$q= $co->prepare("SELECT IDUser FROM user WHERE IDUser='$IDUser'");
					$q-> execute();
					$count=$q->rowcount();
					$q->closeCursor();

					if($count=0)
					{*/
						echo $q1= "INSERT INTO `etudiant` (`IDEtudiant`, `IDUser`, `ING`, `Majeur`, `Stage`, `Associatif`) VALUES ('$IDEtudiant', '$IDUser', '$ING', '$Majeur', '$Stage', '$Associatif')";
			          

						$result = mysqli_query($co, $q1);
						

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






  

 <nav id=" info Etudiant">        
 <div class="element_menu">
  
  <h3>Bienvenue Etudiant</h3>
        <form action="Inscriptionreussie.php" method="post">
        <label for = "IDEtudiant"> IDEtudiant : </label>
        <input type="text" name="IDEtudiant" id="IDEtudiant" required="required"/> </br>  

      <label for = "ING"> ING : </label>
        <input type="text" name="ING" id="ING" required="required"/> </br>
		
		<label for = "Majeur"> Majeur: </label>
        <input type="text" name="Majeur" id="Majeur" required="required"/> </br>
		
		<label for = "Stage">Stage : </label>
        <input type="text" name="Stage" id="Stage" required="required"/> </br>
		
		<label for = "Associatif"> Associatif: </label>
        <input type="text" name="Associatif" id="Associatif" required="required"/> </br>

        <input type="submit" name="Inscription2" value="Inscription2"/></br>
    </form>
		
		


     
       
    </div>    
</nav>


  <button> <a href="Profil.php" > suivant </a> </button>
       </br>
        
        

 </html>