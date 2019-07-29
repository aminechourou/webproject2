<html>
<head>
<meta charset="utf8">
</head>
<body>
<?php 
include "session.php";
//$log="admin";
//$pwd="admin";
/*$servername="localhost";
	$username="root";
	$password="";
	$dbname="dblogin";
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", 
	$username, $password);
	$req="select * from users where user_name='$login' && user_pass='$pwd'";
	$rep=$conn->query($req);
	$res=$rep->fetchAll();
	*/
$c=new Database();
$conn=$c->connexion();
$client=new Client($_POST['user'],$_POST['pwd'],$conn);
$c=$client->Logedin($conn,$_POST['user'],$_POST['pwd']);

	//var_dump($u);
//$logR=$_POST['login'];
//$pwdR=$_POST['pwd'];
$vide=false;
if (!empty($_POST['user']) && !empty($_POST['pwd'])){
	
	foreach($c as $t){
		$vide=true;
	if ($t['user']==$_POST['user'] && $t['pwd']==$_POST['pwd']){
		
		session_start();
		$_SESSION['l']=$_POST['user'];
		$_SESSION['p']=$_POST['pwd'];
		header("location:indexb.php");
		
		}
	
}
if ($vide==false) { 
         // Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
         echo '<body onLoad="alert(\'Client non reconnu...\')">'; 
         // puis on le redirige vers la page d'accueil
         echo '<meta http-equiv="refresh" content="0;URL=log-in.html">'; 
      } 
}	  
 
else { 
      echo '<body onLoad="alert(\'Vous devez remplir le formulaire...\')">';
  echo '<meta http-equiv="refresh" content="0;URL=log-in.html">';
}  

?> 
</body>
</html>