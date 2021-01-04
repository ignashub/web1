<!DOCTYPE html>
<?php
include_once 'menubar.html';
?>
<?php
session_start();

?>

<html>

<head>
  <title>LogIn</title>
  <link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet">
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script>

  <meta charset='UTF-8'>
  <link rel="stylesheet" type="text/css" href="style/style.css">
  <script rel="javascript" type="text/javascript" src="js/validation.js"></script>

</head>

<body background="newimage.jpg">
  <?php
$error = $_COOKIE['error'];
if(isset($error))
{
echo "<p style='color:red'>$error</p>";
}
?>

<script>
  const navHamburger = document.querySelector('#navHamburger');
    navHamburger.addEventListener('click', (e) => {
        navHamburger.parentElement.classList.toggle('active');
    })
    </script>

      </form>
    </div>
  </div>
  <div class="login-wrap">
  <div class="login-html">
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
    <div class="login-form">
      <form class="sign-in-htm" action="signin.php" method="POST">
        <div class="group">
          <label for="user" class="label">Username</label>
          <input id="user" name="user" type="text" class="input">
        </div>
        <div class="group">
          <label for="pass" class="label">Password</label>
          <input id="password" name="pwd" type="password" class="input" data-type="password">
        </div>
        <!-- <div class="group">
          <input id="check" type="checkbox" class="check" checked>
          <label for="check"><span class="icon"></span> Keep me Signed in</label>
        </div> -->
        <div class="group">
          <input name="login" type="submit"  class="button" value="Sign In">
        </div>
        <div class="hr"></div>
      </form>

      <!-- SIGN UP -->
      <form class="sign-up-htm" action="signup.php" method="POST">
        <div class="group">
          <label for="user" class="label">Username</label>
          <input id="ruser" name="ruser" type="text" class="input">
        </div>
        <div class="group">
          <label for="pass" class="label">Password</label>
          <input id="password" name="rpwd" type="password" class="input" data-type="password">
        </div>
        <div class="group">
          <label for="pass" class="label">Confirm Password</label>
          <input id="pass" name="rpwd2" type="password" class="input" data-type="password">
        </div>
        <div class="group">
          <input name="register" type="submit" class="button" value="Sign Up">
        </div>
        <div class="hr"></div>
        <!-- <div class="foot-lnk">
          <label for="tab-1">Already Member?</a>
        </div> -->
      </form>
    </div>
  </div>
  </div>

  <script>function validate()
  {
    // var user = document.getElementById('user').value;
    var ruser = document.getElementById('ruser').value;
    // var userRGEX = /^[A-Z].*$/;
    var ruserRGEX = /^^[A-Z].*$/;
    // var user = userRGEX.test(user);
    var ruser = ruserRGEX.test(ruser);
    // if(user == false)
    // {
    // alert('Please enter a valid phone number');
    // return false;
    // }

    if(ruser == false)
    {
    alert('Username must start with uppercase letter!');
    return false;
    }

      return true;
    }
  }
</script>


</div>
<div class="copyrightColor">
  <footer>&copy; Copyright 2019 HTML.am</footer>





  </body>

</html>
