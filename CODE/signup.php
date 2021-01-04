<?php
$name = $_POST['ruser'];
$submittedword = MD5($_POST['rpwd']);
$submittedword2 = MD5($_POST['rpwd2']);
$servername = 'studmysql01.fhict.local';
$dbusername ='dbi412887';
$dbpassword = 'Welcome2ea';
$dbname = 'dbi412887';
 // Create DB connection
try {
$conn = new PDO('mysql:host=studmysql01.fhict.local;dbname='.$dbname, $dbusername,  $dbpassword);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO login (username, password) VALUES('$name', '$submittedword')";
    //UsernameCheck
    $sql2 = "select * from login where username=:ruser;";

    $stmt = $conn->prepare($sql2);
    $stmt->execute([':ruser'=> $name]);

    $result = $stmt->fetchAll();
    //
    if ($submittedword == $submittedword2 && count($result)== 0 && ctype_upper( $name[0] )){
          // use exec() because no results are returned
    $conn->exec($sql);
    setcookie('error',"Your account was created! You can login now!");
    header("Location: login.php");
    }
    else if (!ctype_upper($name[0])) {
      setcookie('error', "Username must start with uppercase letter!");
      header("Location: login.php");
    }
else if(count($result)== 1){
  // credentials wrong => go back to welcome
  setcookie('error',"Username  already exists please use another username!");
  header("Location: login.php");
}
else{
  setcookie('error',"The two passwords do not match!!");
  header("Location: login.php");
}
}
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>
