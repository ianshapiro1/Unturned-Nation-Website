<!DOCTYPE html>
<html class="w3-bannerimage">
<title>Unturned Nation</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<body>

  <!-- Navbar -->
  <div class="w3-top" style="opacity: 0.95;">
    <div class="w3-bar w3-opaqueteracotta w3-card w3-left-align w3-xlarge">
      <a class="w3-bar-item w3-button w3-hide-large w3-right w3-padding-hamburger w3-hover-navbar"href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><img class="w3-right" style="padding-top: 10px; padding-right: 10px;" src="https://recreation.willistonparks.com/images/bars.svg" width="50" height="50"/></a>
      <a href="cart.php" class="w3-bar-item w3-button w3-right w3-hover-navbar w3-red"><img src="http://i63.tinypic.com/54um11.png" width="45px" height="45px"/></a>
      <a href="index.php" class="w3-bar-item w3-button w3-hover-navbar"><img id="homelogo" src="http://i65.tinypic.com/kbd0s0_th.png"/></a>
      <a href="kits.php" class="w3-bar-item w3-button w3-lemonmilk w3-hide-small w3-padding-large w3-hover-navbar w3-hover-text-green4 w3-text-green4">Kits</a>
      <a href="ranks.php" class="w3-bar-item w3-button w3-lemonmilk w3-hide-small w3-padding-large w3-hover-navbar w3-hover-text-green4 w3-text-green4">Ranks</a>
      <a href="perks.php" class="w3-bar-item w3-button w3-lemonmilk w3-hide-small w3-padding-large w3-hover-navbar w3-hover-text-green4 w3-text-green4">Perks</a>
      <a href="upgrades.php" class="w3-bar-item w3-button w3-lemonmilk w3-hide-small w3-padding-large w3-hover-navbar w3-hover-text-green4 w3-text-green4">Upgrades</a>
      <a href="contact.php" class="w3-bar-item w3-button w3-lemonmilk w3-hide-small w3-padding-large w3-hover-navbar w3-hover-text-green4 w3-text-green4">Contact Us</a>
    </div>
      <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-opaqueteracotta w3-text-green4 w3-lemonmilk w3-hide w3-hide-large">
      <a href="kits.php" class="w3-bar-item w3-button w3-padding-large">Kits</a>
      <a href="ranks.php" class="w3-bar-item w3-button w3-padding-large">Ranks</a>
      <a href="perks.php" class="w3-bar-item w3-button w3-padding-large">Perks</a>
      <a href="upgrades.php" class="w3-bar-item w3-button w3-padding-large">Upgrades</a>
      <a href="contact.php" class="w3-bar-item w3-button w3-padding-large">Contact Us</a>
    </div>
  </div>

<!-- Header -->
  <header class="w3-container" id="header" >
    <div class="bg-header">
      <img class="responsive" src="http://oi64.tinypic.com/14cgx2p.jpg"/>
    </div>
  </header>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-32 w3-container w3-green4opq">
  <div class="w3-content">
    <div class="w3-third pad20 w3-right">

    </div>
    <div class="w3-twothird pad20">

    </div>
  </div>
</div>

<!-- Second Grid -->
<div class="w3-row-padding w3-opaqueteracotta w3-container"id="SecondBlock">
  <div class="w3-content">
    <div class="w3-twothird w3-text-green4">
      <div class="pad20">
      </div>
    </div>
    <div class="w3-third w3-center">
      <div class="pad20">

      </div>
    </div>
  </div>
</div>


<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center ">
  <div class="w3-large w3-padding-32 w3-lemonmilk w3-text-green4">
    <p>&copy; Copyright 2018 Unturned Nation</p>
 </div>
</footer>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html>
