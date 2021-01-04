<!DOCTYPE html>

<?php
session_start();
$loggedin = $_SESSION['loggedin'];
if (!isset($loggedin))
{
  header("Location:login.php");
}
?>

<?php
include_once 'menubarloggedin.html';
?>

<html>

<head>
  <title>Shop</title>
  <link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet">
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ"
      crossorigin="anonymous"></script>

      <meta charset='UTF-8'>
  <link rel="stylesheet" href="style/styleShop.css">

  <link rel="stylesheet" href="style/style.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
  <script src="js/modernizr.custom.63321.js"></script>

</head>

<body>


    <script>
    const navHamburger = document.querySelector('#navHamburger');
    navHamburger.addEventListener('click', (e) => {
        navHamburger.parentElement.classList.toggle('active');
    })
    </script>

  <div id="app" class="shopcontainer420">
    <div class="text-right"><button class="btn btn-primary" data-toggle="modal" data-target="#cartModal">Cart ({{cartItems.length}})</button></div>
    <div class="modal fade" id="cartModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Cart</h4>
          </div>
          <div class="modal-body">
            <shopping-cart inline-template :items="cartItems">
              <div>
                <table class="table table-cart">
                  <tr v-for="(item, index) in items">
                    <td>{{item.title}}</td>
                                <h6>${{ item.price | formatCurrency }}</h6>
                    <td style="width:120px">QTY:
                      <input v-model="item.qty" class="form-control input-qty" type="number">
                    </td>
                    <td class="text-right">${{item.price | formatCurrency}}</td>
                    <td>
                      <button @click="removeItem(index)"><span class="glyphicon glyphicon-trash"></span></button>
                    </td>
                  </tr>
                  <tr v-show="items.length === 0">
                    <td colspan="4" class="text-center">Cart is empty</td>
                  </tr>
                  <tr v-show="items.length > 0">
                    <td></td>
                    <td class="text-right">Cart Total</td>
                    <td class="text-right">${{Total | formatCurrency}}</td>
                    <td></td>
                  </tr>
                </table>
              </div>
              <!-- /.container -->
            </shopping-cart>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>




 </form>
<br><br><br><br><br><br><br><br><br><br><br>
<!-- For the HTML we will use a division that wraps some unordered lists
that will contain the items and a navigation with the category links.
Each list item will have a link that contains an image and a h4 heading. -->
<div id="mi-slider" class="mi-slider">
  <ul>
    <li><a href="#"><img src="images/laptop 2.bmp" alt="img01">
        <h3>Lenovo Edge 15 15.6" Notebook</h3>
        <p> Processor: Intel Core i7-4510U Dual-Core
          Memory Type: 8 GB 1600 MHz DDR3L SDRAM
          Storage Capacity: 1 TB
          Battery life: 10 hours</p>
          <p class="text-center"><input v-model="item.qty" type="number" class="form-control" placeholder="Qty" min="1"/></p>
            <button @click="addToCart(item)" class="btn btn-sm btn-primary" class="button" type="buttonreadd" onclick="alert('Your item was added!')">Add to Cart</button>

      </a></li>
    <li><a href="#"><img src="images/laptop 5.jpg" alt="img02">
        <h3>Toshiba portege a30</h3>
        <p> Processor: Intel® Core™ i3-7020U
          Memory Type: 4 GB DDR4-2133 SDRAM
          Storage Capacity: 1 TB 5400 rpm SATA
          Battery life: 8 hours</p>
          <p class="text-center"><input v-model="item.qty" type="number" class="form-control" placeholder="Qty" min="1"/></p>
        <button @click="addToCart(item)" class="btn btn-sm btn-primary"  class="button" type="buttonreadd" onclick="alert('Your item was added!')">Add to Cart</button>
      </a></li>
    <li><a href="#"><img src="images/laptop 6.jpg" alt="img03">
        <h3>HP Omen 15</h3>
        <p> Processor: NVIDIA® GeForce® GTX 1050 (2 GB GDDR5 dedicated)
          Memory Type: 12 GB DDR4-2666 SDRAM (1 x 4 GB, 1 x 8 GB)
          Storage Capacity: 1 TB 7200 rpm SATA
          Battery life: 7 hours</p>
          <p class="text-center"><input v-model="item.qty" type="number" class="form-control" placeholder="Qty" min="1"/></p>
        <button @click="addToCart(item)" class="btn btn-sm btn-primary" class="button" type="buttonreadd" onclick="alert('Your item was added!')">Add to Cart</button>
      </a></li>
  </ul>
  <ul>
    <li><a href="#"><img src="images/printer1.jpg" alt="img05">
        <h3>Brother Business Color Laser Printer, HL-L8360CDW</h3>
        <p>HIGH-QUALITY COLOR PRINTING
          EASY CONNECTIVITY
          AUTOMATIC DUPLEX PRINTING
          FOR USE WITH BROTHER GENUINE TONERS
          <p>
            <p class="text-center"><input v-model="item.qty" type="number" class="form-control" placeholder="Qty" min="1"/></p>
            <button @click="addToCart(item)" class="btn btn-sm btn-primary" class="button" type="buttonreadd" onclick="alert('Your item was added!')">Add to Cart</button>
      </a></li>
    <li><a href="#"><img src="images/printer2.jpg" alt="img06">
        <h3>Brother - MFC-L3770CDW </h3>
        <p> Up to 50-sheet automatic document feeder
          Fast print speeds of up to 25 pages per minute
          The 250-sheet capacity adjustable paper
          1-year limited warranty
          <p>
            <p class="text-center"><input v-model="item.qty" type="number" class="form-control" placeholder="Qty" min="1"/></p>
            <button @click="addToCart(item)" class="btn btn-sm btn-primary" class="button" type="buttonreadd" onclick="alert('Your item was added!')">Add to Cart</button>
      </a></li>
    <li><a href="#"><img src="images/printer3.jpg" alt="img07">
        <h3>Canon imageCLASS MF424dw </h3>
        <p>Print up to 40 ppm
          Print up to 8-1/2" x 14"
          900-Sheet maximum paper capacity
          Three-year warranty standard
          <p>
            <p class="text-center"><input v-model="item.qty" type="number" class="form-control" placeholder="Qty" min="1"/></p>
            <button @click="addToCart(item)" class="btn btn-sm btn-primary" class="button" type="buttonreadd" onclick="alert('Your item was added!')">Add to Cart</button>
      </a></li>
  </ul>
  <ul>
    <li><a href="#"><img src="images/headset1.jpg" alt="img09">
        <h3>Jabra EVOLVE 65 UC Stereo Wireless Headset</h3>
        <p>
          Up to 30 metres wireless range
          Bluetooth Connectivity & NFC-enabled
          Dual-connectivity
          Includes Jabra Link™ 360 USB adapter
        </p>
        <p class="text-center"><input v-model="item.qty" type="number" class="form-control" placeholder="Qty" min="1"/></p>
        <button @click="addToCart(item)" class="btn btn-sm btn-primary" class="button" type="buttonreadd" onclick="alert('Your item was added!')">Add to Cart</button>
      </a></li>
    <li><a href="#"><img src="images/headset2.jpg" alt="img10">
        <h3>Jabra Pro 920 Wireless Headset</h3>
        <p>
          Reliable range of up to 120 metres
          Noise-cancelling microphone
          Up to 8 hours talk-time
          Advanced wideband audio
          <p class="text-center"><input v-model="item.qty" type="number" class="form-control" placeholder="Qty" min="1"/></p>
          <button @click="addToCart(item)" class="btn btn-sm btn-primary" class="button" type="buttonreadd" onclick="alert('Your item was added!')">Add to Cart</button>
        </p>
      </a></li>
    <li><a href="#"><img src="images/headset5.jpg" alt="img11">
        <h3>Jabra BIZ 1900 </h3>
        <p>Noise canceling microphone
          Lightweight, comfortable design
          Professional quality sound
          <p class="text-center"><input v-model="item.qty" type="number" class="form-control" placeholder="Qty" min="1"/></p>
          <button @click="addToCart(item)" class="btn btn-sm btn-primary" class="button" type="buttonreadd" onclick="alert('Your item was added!')">Add to Cart</button>
        </p>
      </a></li>
  </ul>
  <ul>
    <li><a href="#"><img src="images/keyboard11.jpg" alt="img12">
        <h3>Apple Magic Keyboard</h3>
        <p>
          It pairs automatically with your Mac
          The battery is incredibly long-lasting
          It will power your keyboard for about a month or more between charges
        </p>
        <p class="text-center"><input v-model="item.qty" type="number" class="form-control" placeholder="Qty" min="1"/></p>
        <button @click="addToCart(item)" class="btn btn-sm btn-primary" class="button" type="buttonreadd" onclick="alert('Your item was added!')">Add to Cart</button>
      </a></li>
    <li><a href="#"><img src="images/keyboard2.jpg" alt="img13">
        <h3>Microsoft Modern Keyboard </h3>
        <p>
          Hidden Fingerprint Sensor
          AES encryption
          Bluetooth and USB rechargeable
          Beautifully Designed
          High Quality Aluminium Fr
        </p>
        <p class="text-center"><input v-model="item.qty" type="number" class="form-control" placeholder="Qty" min="1"/></p>
        <button @click="addToCart(item)" class="btn btn-sm btn-primary" class="button" type="buttonreadd" onclick="alert('Your item was added!')">Add to Cart</button>
      </a></li>
    <li><a href="#"><img src="images/keyboard3.jpg" alt="img14">
        <h3>Unicomp Ultra Classic Model</h3>
        <p>
          Number of keys/buttons : 104
          Connection : USB
          Cable length : 2 m
          Compatible : PC
          US APL key layou
        </p>
        <p class="text-center"><input v-model="item.qty" type="number" class="form-control" placeholder="Qty" min="1"/></p>
        <button @click="addToCart(item)" class="btn btn-sm btn-primary" class="button" type="buttonreadd" onclick="alert('Your item was added!')">Add to Cart</button>
      </a></li>
  </ul>
  <ul>
    <li><a href="#"><img src="images/mouse1.jpg" alt="img12">

        <h3>Logitech MX Master 2S </h3>
        <p>DPI: 4,000
          Interface: Bluetooth and 2.4GHz wireless
          Buttons: 7
          Ergonomic: Right-handed
          Features: Scrolling wheel, Customizable buttons, Thumb wheel, ergonomic build
        </p>
        <p class="text-center"><input v-model="item.qty" type="number" class="form-control" placeholder="Qty" min="1"/></p>
        <button @click="addToCart(item)" class="btn btn-sm btn-primary" class="button" type="buttonreadd" onclick="alert('Your item was added!')">Add to Cart</button>
      </a></li>
    <li><a href="#"><img src="images/mouse2.jpg" alt="img13">
        <h3>Logitech MX Anywhere 2</h3>
        <p>
          DPI: 1,600
          Interface: Bluetooth and 2.4GHz wireless
          Buttons: 6
          Ergonomic: Right-handed
          Features: Scrolling wheel, Logitech Darkfield Laser Tracking, Unifying receiver, Easy-Switch tech, gesture function
        </p>
        <p class="text-center"><input v-model="item.qty" type="number" class="form-control" placeholder="Qty" min="1"/></p>
        <button @click="addToCart(item)" class="btn btn-sm btn-primary" class="button" type="buttonreadd" onclick="alert('Your item was added!')">Add to Cart</button>
      </a></li>
    <li><a href="#"><img src="images/mouse3.jpg" alt="img14">
        <h3>Microsoft Classic Intellimouse</h3>
        <p>
          DPI: 3200
          Interface: Wired
          Buttons: 5
          Ergonomic: Right-handed
          Features: Classic design, Programmable buttons, Subdued white lighting
        </p>
        <p class="text-center"><input v-model="item.qty" type="number" class="form-control" placeholder="Qty" min="1"/></p>
        <button @click="addToCart(item)" class="btn btn-sm btn-primary" class="button" type="buttonreadd" onclick="alert('Your item was added!')">Add to Cart</button>
      </a></li>
  </ul>
  <nav>
    <a href="#">Laptops</a>
    <a href="#">Printers</a>
    <a href="#">Headsets</a>
    <a href="#">Keyboard</a>
    <a href="#">Mouse</a>
  </nav>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="js/jquery.catslider.js"></script>
<script>
  $(function() {

    $( '#mi-slider' ).catslider();

  });
</script>
<br>
<br>
<br>
<br>
<br>
<!-- <button class="buttonShoppingCart" type="buttonCart">Shopping Cart</button> -->
<div class="copyrightColor">
  <footer>&copy; Copyright 2019 HTML.am</footer>
</div>
    <script  src="js/edShop.js"></script>
</body>

</html>
