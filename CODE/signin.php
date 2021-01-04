<?php

$name = $_POST['user'];
$submittedword = md5($_POST['pwd']);

$servername = 'studmysql01.fhict.local';
$username ='dbi412887';
$dbpassword = 'Welcome2ea';
$dbname = 'dbi412887';
 // Create DB connection
$conn = new PDO('mysql:host=studmysql01.fhict.local;dbname='.$dbname, $username,  $dbpassword);

$sql = "select * from login where username=:user and password=:pwd;";

$stmt = $conn->prepare($sql);

$stmt->execute([':user'=> $name, ':pwd'=>$submittedword]);

$result = $stmt->fetchAll();

if (count($result)== 1 && ctype_upper($name[0]))
{

//  go to the secret page

  session_start();
  $_SESSION['loggedin'] = 'true';

  setcookie('error','');
  header('Location: shop.php');
}
else
{
// credentials wrong => go back to welcome
  setcookie('error',"Login credentials wrong");
  header("Location: login.php");
}



?>
