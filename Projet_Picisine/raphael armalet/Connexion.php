<?php 

session_start();

if (isset($_POST['Connection']))
{
	if(!empty ($_POST['IDuser']) &&! empty ($_POST['MDP']))
		{
     		$i=0;
     		$errors= [];
     		
 			extract($_POST);

			if (mb_strlen ($MDP)<6)
			{
				$errors[]="Veuillez saisir un mot de passe surperieur à 6 caractères";
				$i=$i+1;
			}

			if(!filter_var($IDuser, FILTER_VALIDATE_EMAIL))
			{
				$errors[]="Veuillez saisir un email valide";
				$i=$i+1;
			}  
	
            if(count($errors)==0)
		    {
		      $a= $_POST['IDuser'];
		   

              $serveur ="localhost";
              $login = "root";
		      $pw = "root";
              $bdd = "ProjetWEB";
		
              $co= mysqli_connect($serveur,$login,$pw,$bdd);

              if($co)
				{
					$IDUser = $_POST['IDuser'];
					$MDP = $_POST['MDP'];
				
				$sql = "SELECT IDuser, Mdp  FROM user WHERE IDuser='$a' ";

                $result = $co->query($sql);

                 if ($result->num_rows > 0) 
                {
                // output data of each row
                  while($row = $result->fetch_assoc()) 
                  {
                    if ($MDP==$row["Mdp"])
                    {
                    	header ('Location: Profil.php');
                    	
                    }

                  }
               
               

                }

				}	
 
                if ($co->connect_error) 
		         {
                  die("Connection failed: " . $co->connect_error);
                 }

              
                $co->close();
                 




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

<!DOCTYPE html>

<html>
 <title> Inscription </title>
 <meta charset = "UTF-8"/>
 <body>
 <form method = "post" action= "Connexion.php">

<p>
        <label for = "IDuser"> Mail : </label>
        <input type="text" name="IDuser" id="IDuser" required="required"/> </br>
       

		<label for = "MDP"> MDP : </label>
        <input type="text" name="MDP" id="MDP" required="required"/> </br>

        <input type="submit" name="Connection" value="Connection"/></br>



		</p>
		</form>
		</body>
</html>