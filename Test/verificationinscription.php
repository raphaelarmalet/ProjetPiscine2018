 <?php

require ('testinscr.php') //exemple mettre le bon chemin 
require ('fonctions.php') //exemple mettre le bon chemin 


 if (isset($_POST['Inscription']))
 {
if(!empty ($_POST['IDUser']) &&! empty ($_POST['MDP']) && !empty ($_POST['MDPconfirmation'])&&!empty ($_POST['Nom']) &&! empty ($_POST['Prenom'])&& !empty ($_POST['Age'])&& !empty ($_POST['Langue'])&& !empty ($_POST['Diplome'])&& !empty ($_POST['Tel'])&& !empty ($_POST['Sexe'])&& !empty ($_POST['Statut']))
{
     
     $errors= [];
 extract($_POST);

	
if (mb_strlen ($Nom)<1)
{
$errors[]="Veuillez saisir un nom surperieur à 1 caractère";

}

if (mb_strlen ($Prenom)<1)
{
$errors[]="Veuillez saisir un prenom surperieur à 1 caractère";

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

$serveur ="localhost";
$login = "root";
$pw = "";
$bdd = "projetweb";
$co= mysqli_connect($serveur,$login,$pw,$bdd);

$q= $bdd->prepare ("SELECT id FROM $table WHERE $field=?");
$q-> execute([$value]);

$count=$q->rowcount();

$q->closeCursor();

if($count>0)
{
	$errors[]="Ce mail est deja utilise";
}

 }else
  {
    $errors[]="Veuillez SVP remplir tous les champs !";
  }


  }

?>