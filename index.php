<?php
require('compteBancaire.php');
//evite d'afficher des tableau error quand les champs sons vides
//var_dump($_POST);
if(!empty($_POST["name"]) && !empty($_POST["depot"])){
    $form = new CompteBancaire($_POST["name"], $_POST["depot"]);
    echo $form->Affiche('depot');
}
if(!empty($_POST["name"]) && !empty($_POST["retrait"])){
    $form = new CompteBancaire($_POST["name"],0, $_POST["retrait"]);
    echo $form->Affiche('retrait');

}
    
?>
<!DOCTYPE html>
<html>
<head>
<title>Test </title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body> 

<h1>Dépot</h1>
<form action="" method="POST"> 
<p>Votre nom :  <input type="text" name="name" /></p>
<p>Un dépot ? :  <input type="text" name="depot" /></p>
<p><input type="submit" value="OK"></p>
</form>

<h1>Retrait</h1>
<form action="" method="POST"> 
<p>Votre nom :  <input type="text" name="name" /></p>
<p>Un prélévement ? :  <input type="text" name="retrait" /></p>
<p><input type="submit" value="OK"></p>
</form>

</body>
</html>