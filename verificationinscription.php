 <?php

require ('datatbase.php') //exemple mettre le bon chemin 
require ('fonctions.php') //exemple mettre le bon chemin 


 if (isset($_POST['register']))
 {
if(!empty ($_POST['IDUser']) &&! empty ($_POST['MDP']) && !empty ($_POST['MDPconfirmation'])&&!empty ($_POST['Nom']) &&! empty ($_POST['Prenom'])&& !empty ($_POST['Age'])&& !empty ($_POST['Langue'])&& !empty ($_POST['Diplome'])&& !empty ($_POST['Tel'])&& !empty ($_POST['Sexe'])&& !empty ($_POST['Statut']))
{
     
     $errors= [];
 extract($_POST);

	
if (mb_strlen ($Nom)<3)
{
$errors[]="Veuillez saisir un nom surperieur à 3 caractère";

}

if (mb_strlen ($Prenom)<3)
{
$errors[]="Veuillez saisir un prenom surperieur à 3 caractère";

}

if (mb_strlen ($MDP)<6)
{
$errors[]="Veuillez saisir un mot de passe surperieur à 6 caractères";

}

if ($MDP != $MDPconfirmation)
{
$errors[]="Mauvais mot de passe";

}

 }

if(!filter_var($IDUser, FILTER_VALIDATE_EMAIL))
{
$errors[]="Veuillez saisir un email valide";
}  

if(deja_utilise('IDUser',$IDUser,'user'))
{

	$errors[]="Email deja utilisé!";
}

if(count($errors)==0)
{
	//enregistrement de l'utilisateur

	// Message de bienvenue 

	//Redirection vers 
}

 }else
  {
    $errors[]="Veuillez SVP remplir tous les champs !";
  }


  }

?>