 <?php 
 session_start();
 require('AccueilGraph.php');  
if (isset($_POST['Inscription']))
{
	header('Location: RegisterFct.php');
}

if (isset($_POST['Connexion']))
{
	header('Location: Connexion.php');
}
?>


