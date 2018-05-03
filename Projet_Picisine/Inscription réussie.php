
<!DOCTYPE html>

<html>
 <title> Inscription </title>
 <meta charset = "UTF-8"/>
 <body>
 <form method = "post"> 


<?php
if (isset($_POST['InscriptionEtudiant']))
 {
	if(!empty ($_POST['ING']) &&! empty ($_POST['Master']) && !empty ($_POST['Stage'])&&!empty ($_POST['Associatif']))
		{
     		$i=0;
     		$errors= [];
 			extract($_POST);

	
			if (mb_strlen ($ING)>1)
			{
				$errors[]="Veuillez saisir un nombre compris entre 1 et 5";
				$i=$i+1;

			}

			if (mb_strlen ($Master)<3)
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
					
					/*$q= $co->prepare("SELECT IDUser FROM user WHERE IDUser='$IDUser'");
					$q-> execute();
					$count=$q->rowcount();
					$q->closeCursor();

					if($count=0)
					{*/
						$qr= "INSERT INTO `etudiant` (`ING`, `Majeur`, `Stage`, `Associatif`) 
								VALUES ('ING','$Majeur', '$Stage', '$Associatif')";
			
						$result = mysqli_query($co, $qr);


					/*}
					else
					{
						echo "Un compte utilisant cette addresse mail existe deja";
					}*/

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
         
      <label for = "ING"> ING : </label>
        <input type="text" name="ING" id="ING" required="required"/> </br>
		
		<label for = "Master"> Master: </label>
        <input type="text" name="Master" id="Master" required="required"/> </br>
		
		<label for = "Stage">Stage : </label>
        <input type="text" name="Stage" id="Stage" required="required"/> </br>
		
		<label for = "Associatif"> Associatif: </label>
        <input type="text" name="Associatif" id="Associatif" required="required"/> </br>

        <input type="submit" name="Inscription" value="Inscription"/></br>
		
		 <?php echo $IDuser ;?>
      


     
       
    </div>    
</nav>


   <ul>
            <li><a href="page1.html">Suivant</a></li>
           

        </ul>
        <p>bonjour <?php echo $_GET['IDuser'];?>!</p>

 </html>