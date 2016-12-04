
<?php 

mysql_connect('localhost', 'root', '');
mysql_select_db('projectstructurephp');

$ttt=mysql_query('SELECT count(*) from chat') or die(mysql_error());
$nbr_messages=mysql_fetch_array($ttt);
 ?>

<h1 >Chat (<?php echo $nbr_messages[0];?>)</h1>
<hr/>
<?php 
$data1= mysql_query('SELECT * FROM chat ORDER BY id DESC LIMIT 0,10') or die(mysql_error());
while($donnees = mysql_fetch_array($data1)){
echo '#'.$donnees['id'].' par '.htmlspecialchars(stripcslashes($donnees['pseudo'])) .' : <br /> ' ;
echo htmlspecialchars(stripcslashes($donnees['message'])) .'   <br /> <br />' ;

}

 ?>
<hr/>
<?php 
   if(isset($_POST['pseudo']) AND isset($_POST['message'])) {
   	$pseudo = mysql_escape_string($_POST['pseudo']);
   	$message = mysql_escape_string($_POST['message']);

   	

   	mysql_query('INSERT INTO chat VALUES("","'.$pseudo.'","'.$message.'")') ;
    header('Location: index.php');

   }

 ?>
 <form action="" method="post">
 pseudo :	<input type="text" name="pseudo"> <br/>
  <br/>
 message :	<textarea name="message"></textarea> <br/>
 <input type="submit" value="Envoyer !" >
 </form>

