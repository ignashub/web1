<?php
include_once 'menubar.html';
?>
<!DOCTYPE html>
<html>

<head>
  <title>Contact Us</title>
  <link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ"
        crossorigin="anonymous"></script>

        <meta charset='UTF-8'>
  <link rel="stylesheet" href="style/style.css">
</head>

<body background="newimage.jpg" >
    </body>

    <script>
    const navHamburger = document.querySelector('#navHamburger');
    navHamburger.addEventListener('click', (e) => {
        navHamburger.parentElement.classList.toggle('active');
    })
    </script>
  <h1>Contact form</h1>
  <div>
    <!-- <h3 class="flip">Contact form</h3> -->
    <div class="column">
      <div class="container">
        <form method="post" action="sendcontact.php">
        <label for="fname"><p>First Name:</p></label>
        <!-- <br> -->
        <input type="text" placeholder="Enter Firstname" name="firstname" required>
        <!-- <br> -->
        <label for="lname"><p>Last Name:</p></label>
        <!-- <br> -->
        <input type="text" placeholder="Enter Lastname" name="lastname" required>
        <!-- <br> -->
        <label for="email"><p>Email:</p></label>
        <!-- <br> -->
        <input type="email" placeholder="Enter Email" name="email" required>
        <!-- <br> -->
        <!-- <br> -->
        <textarea name="message" rows="10" cols="100" placeholder="Enter your question or a problem">
        </textarea>
        <!-- <br> -->
        <button class="button" name="submit" type="buttonreadd" onclick="alert('Mail Sent. Thank you, we will contact you shortly.')">Submit</button>
</form>
      </div>
    </div>
  </div>
  
    <div class="copyrightColor">
      <footer>&copy; Copyright 2019 HTML.am</footer>
    </div>
</body>

</html>
