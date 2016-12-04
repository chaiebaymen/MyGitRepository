<?php 
$motdepasse = 'admin96066218';
if(isset($_POST['envoi'])){
 if(isset($_POST['mdp']) and !empty($_POST['mdp'])){
 	if ($_POST['mdp']== $motdepasse) {
 		$espacegranted = 1 ;
 	} else {
 		$erreur =  "Attention ! le mot de passe est erroné ";
 	}
 	
 }else{
 	$erreur =  "vous devez remplir la case mot de passe";
 }
}

if(isset($erreur)){echo $erreur ;}

 if(!isset($espacegranted))
		{
 ?>


<h1>Page protégée par mot de passe </h1>
</hr>




<form action="" method="post">
<p class = "label label-success">veuillez entre le mot de passe  ci dessous : </p> <br/>	
<p class = "label label-default">Mot de passe :</p> <input type="text" name="mdp">
<input  class="btn btn-information" type="submit" name="envoi" value="Entrer">

</form>

<?php 
   }else {
   	//debut de la page securise
 ?>
 <div>
<h1>BRAVO vous etes connecte</h1>


<?php 
require '/js/chat.php';
}

//fin de la page securise 
?>
</div>
 

