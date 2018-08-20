<!DOCTYPE html>
<html class="w3-bannerimage">
<title>Unturned Nation</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="imagehover.css">
<script src="https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.js"></script>
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
<script>
function CustomAlert(){
    this.render = function(dialog, headtext){
        var winW = window.innerWidth;
        var winH = window.innerHeight;
        var dialogoverlay = document.getElementById('dialogoverlay');
        var dialogbox = document.getElementById('dialogbox');
        dialogoverlay.style.display = "block";
        dialogoverlay.style.height = winH+"px";
        dialogoverlay.style.width = winW+"px";
        dialogbox.style.display = "block";
        dialogbox.style.fontFamily = "lemon";
        document.getElementById('dialogboxhead').innerHTML = headtext;
        document.getElementById('dialogboxbody').innerHTML = dialog;
        document.getElementById('dialogboxfoot').innerHTML = '<button onclick="Alert.ok()">Close</button>';
    }
	this.ok = function(){
		document.getElementById('dialogbox').style.display = "none";
		document.getElementById('dialogoverlay').style.display = "none";
	}
}
var Alert = new CustomAlert();
</script>


<div id="dialogoverlay"></div>
<div id="dialogbox">
  <div>
    <div id="dialogboxhead"></div>
    <div id="dialogboxbody"></div>
    <div id="dialogboxfoot"></div>
  </div>
</div>



<div class="w3-container">
  <div class="w3-lemonmilk w3-center w3-text-white" style="padding: 100px; padding-left: 0px; padding-right: 0px;">
    <h1 class="underline w3-text-green3">Kits</h1>
    <p class="w3-text-green4">Donate today for access to Basic, Premium, and Deluxe Kits</p>
    <br>
    <br>
    <br>
    <h2 class="underline w3-text-green3 borderkits" style="margin-top: 100px; margin-bottom: 10px;">Basic ($1.00 each)</h2>
    <div style="margin-top: 100px; margin-left: 20px; margin-right: 20px; border-radius: 10px;"
      <figure class="imghvr-fade w3-lemonmilk">
        <img class="kitsimages" src="http://i68.tinypic.com/6ixs06.png">
        <figcaption style="background-color: #737a28">
          <button class="buttonkit" onclick="Alert.render('<p>Command: /kit essentials<br>May be spawned once per hour.</p><p>This kit includes:</p><ul><li>Maplestrike</li><li>Military Mag x2</li><li>Military Crate x2</li><li>Gas Can</li><li>Blow Torch</li><li>MRE x2</li><li>Water x2</li><li>Dressing x5</li><li>Antibiotics x3</li></ul>', 'Essentials Kit')">
            <div class="w3-xlarge" style="color: #FF9D0F;">
              <h1 class="underline w3-xlarge" style="color: #FF9D0F">Essentials</h1>
              <p class="w3-medium">A weapon and supplies kit with necessary items for survival, including a maplestrike, ammo, food, medical, gas, and a blow torch.</p>
              <p class="w3-small">*Click for Details*</p>
            </div>
          </button>
          <form action="cart.php" method="post">
            <input type="submit"/>
          </form>
        </figcaption>
      </figure>
    </div>
    <div style="margin-top: 100px; margin-left: 20px; margin-right: 20px; border-radius: 10px"
      <figure class="imghvr-fade w3-lemonmilk">
        <img class="kitsimages" src="http://i64.tinypic.com/swqpma.png">
        <figcaption style="background-color: #737a28">
          <button class="buttonkit" onclick="Alert.render('<p>Command: /kit meals<br>May be spawned once per hour.</p><p>This kit includes:</p><ul><li>MRE x10</li><li>Coconut Water x5</li><li>Energy Bar x5</li></ul>', 'Meals Kit')">
            <div class="w3-xlarge" style="color: #FF9D0F;">
              <h1 class="underline w3-xlarge" style="color: #FF9D0F">Meals</h1>
              <p class="w3-medium">A supply kit that contains MREs, coconut water, and energy bars.</p>
              <p class="w3-small">*Click for Details*</p>
            </div>
          </button>
        </figcaption>
      </figure>
    </div>
    <div style="margin-top: 100px; margin-left: 20px; margin-right: 20px; border-radius: 10px"
      <figure class="imghvr-fade w3-lemonmilk">
        <img class="kitsimages" src="http://i67.tinypic.com/710107.png">
        <figcaption style="background-color: #737a28">
          <button class="buttonkit" onclick="Alert.render('<p>Command: /kit firstaid<br>May be spawned once per hour.</p><p>This kit includes:</p><ul><li>Medkit x3</li><li>Bloodbag x2</li><li>Vaccine x3</li><li>Antibiotics x4</li><li>Dressing x5</li><li>Splint x2</li></ul>', 'First Aid Kit')">
            <div class="w3-xlarge" style="color: #FF9D0F;">
              <h1 class="underline w3-xlarge" style="color: #FF9D0F">First Aid</h1>
              <p class="w3-medium">A supply kit that contains medkits, bloodbags, vaccines, antibiotics, dressings, and splints.</p>
              <p class="w3-small">*Click for Details*</p>
            </div>
          </button>
        </figcaption>
      </figure>
    </div>
    <div style="margin-top: 100px; margin-left: 20px; margin-right: 20px; border-radius: 10px"
      <figure class="imghvr-fade w3-lemonmilk">
        <img class="kitsimages" src="http://i68.tinypic.com/2hp7ypw.jpg">
        <figcaption style="background-color: #737a28">
          <button class="buttonkit" onclick="Alert.render('<p>Command: /kit shelter<br>May be spawned once per hour.</p><p>This kit includes:</p><ul><li>Construction Helmet</li><li>Construction Top</li><li>Cargo Pants</li><li>Alicepack</li><li>Metal Pillar x8</li><li>Metal Floor x3</li><li>Metal Roof x3</li><li>Metal Wall x4</li><li>Metal Window x2</li><li>Bulletproof Glass x2</li><li>Metal Doorway x2</li><li>Metal Door x2</li><li>Metal Hole</li><li>Metal Hatch</li><li>Metal Ladder</li><li>Metal Garage</li><li>Metal Gate</li><li>Locker x2</li><li>Claim Flag</li><li>Barbed Wire Fence x5</li></ul>', 'Shelter Kit')">
            <div class="w3-xlarge" style="color: #FF9D0F;">
              <h1 class="underline w3-xlarge" style="color: #FF9D0F">Shelter</h1>
              <p class="w3-medium">A builder kit comprised of all metal housing, including bulletproof glass, doors, fences, and a claim flag.</p>
              <p class="w3-small">*Click for Details*</p>
            </div>
          </button>
        </figcaption>
      </figure>
    </div>
    <div style="margin-top: 100px; margin-left: 20px; margin-right: 20px; border-radius: 10px"
      <figure class="imghvr-fade w3-lemonmilk">
        <img class="kitsimages" src="http://i66.tinypic.com/28jzkmb.png">
        <figcaption style="background-color: #737a28">
          <button class="buttonkit" onclick="Alert.render('<p>Command: /kit storage<br>May be spawned once per hour.</p><p>This kit includes:</p><ul><li>Locker x10</li></ul>', 'Storage Kit')">
            <div class="w3-xlarge" style="color: #FF9D0F;">
              <h1 class="underline w3-xlarge" style="color: #FF9D0F">Storage</h1>
              <p class="w3-medium">A supply kit that contains 10 lockers.</p>
              <p class="w3-small">*Click for Details*</p>
            </div>
          </button>
        </figcaption>
      </figure>
    </div>
    <div style="margin-top: 100px; margin-left: 20px; margin-right: 20px; border-radius: 10px"
      <figure class="imghvr-fade w3-lemonmilk">
        <img class="kitsimages" src="http://i63.tinypic.com/2ccxamr.png">
        <figcaption style="background-color: #737a28">
          <button class="buttonkit" onclick="Alert.render('<p>Command: /kit watersupply<br>May be spawned once per hour.</p><p>This kit includes:</p><ul><li>Rain Barrel x5</li><li>Water Tank</li><li>Canteen</li></ul>', 'Water Supply Kit')">
            <div class="w3-xlarge" style="color: #FF9D0F;">
              <h1 class="underline w3-xlarge" style="color: #FF9D0F">Water Supply</h1>
              <p class="w3-medium">A supply kit that contains rain barrels, a water tank, and a canteen.</p>
              <p class="w3-small">*Click for Details*</p>
            </div>
          </button>
        </figcaption>
      </figure>
    </div>
    <div style="margin-top: 100px; margin-left: 20px; margin-right: 20px; border-radius: 10px"
      <figure class="imghvr-fade w3-lemonmilk">
        <img class="kitsimages" src="http://i68.tinypic.com/143drnr.png">
        <figcaption style="background-color: #737a28">
          <button class="buttonkit" onclick="Alert.render('<p>Command: /kit energysupply<br>May be spawned once per hour.</p><p>This kit includes:</p><ul><li>Generator x2</li><li>Industrial Gas Can</li><li>Pump Jack x2</li><li>Fuel Tank</li></ul>', 'Energy Supply')">
            <div class="w3-xlarge" style="color: #FF9D0F;">
              <h1 class="underline w3-xlarge" style="color: #FF9D0F">Energy Supply</h1>
              <p class="w3-medium">A supply kit that contains an industrial generator, an industrial gas can, and oil derricks.</p>
              <p class="w3-small">*Click for Details*</p>
            </div>
          </button>
        </figcaption>
      </figure>
    </div>
    <div style="margin-top: 100px; margin-left: 20px; margin-right: 20px; border-radius: 10px"
      <figure class="imghvr-fade w3-lemonmilk">
        <img class="kitsimages" src="http://i66.tinypic.com/2ijtcnb.png">
        <figcaption style="background-color: #737a28">
          <button class="buttonkit" onclick="Alert.render('<p>Command: /kit defense<br>May be spawned once per hour.</p><p>This kit includes:</p><ul><li>Snayperskya</li><li>Snayperskya Mag x3</li><li>8x Scope</li><li>Ranger Suppresor</li><li>Kryzkarek</li><li>Kryzkarek Mag</li><li>Low Caliber Ranger Ammunition x2</li><li>Headlamp</li><li>Binoculars</li></ul>', 'Defense Kit')">
            <div class="w3-xlarge" style="color: #FF9D0F;">
              <h1 class="underline w3-xlarge" style="color: #FF9D0F">Defense</h1>
              <p class="w3-medium">A weapons kit that equips you with a snayperskya, a kryzkarek, and ammo.</p>
              <p class="w3-small">*Click for Details*</p>
            </div>
          </button>
        </figcaption>
      </figure>
    </div>
    <div style="margin-top: 100px; margin-left: 20px; margin-right: 20px; border-radius: 10px"
      <figure class="imghvr-fade w3-lemonmilk">
        <img class="kitsimages" src="http://i63.tinypic.com/2rd9m6g.png">
        <figcaption style="background-color: #737a28">
          <button class="buttonkit" onclick="Alert.render('<p>Command: /kit offense<br>May be spawned once per hour.</p><p>This kit includes:</p><ul><li>Bulldog</li><li>Bulldog Mag x3</li><li>Calling Card</li><li>Calling Card Mag</li><li>Halo Sight</li><li>Barrel</li><li>Low Caliber Ranger Ammunition x2</li><li>Butterfly Knife</li><li>Headlamp</li></ul>', 'Offense Kit')">
            <div class="w3-xlarge" style="color: #FF9D0F;">
              <h1 class="underline w3-xlarge" style="color: #FF9D0F">Offense</h1>
              <p class="w3-medium">A weapons kit that equips you with a bulldog, a calling card, and ammo.</p>
              <p class="w3-small">*Click for Details*</p>
            </div>
          </button>
        </figcaption>
      </figure>
    </div>
    <div style="margin-top: 100px; margin-left: 20px; margin-right: 20px; border-radius: 10px"
      <figure class="imghvr-fade w3-lemonmilk">
        <img class="kitsimages" src="http://i67.tinypic.com/5x6ija.png">
        <figcaption style="background-color: #737a28">
          <button class="buttonkit" onclick="Alert.render('<p>Command: /kit attachment<br>May be spawned once per hour.</p><p>This kit includes:</p><ul><li>Red Dot Sight</li><li>Halo Sight</li><li>Tactical Light</li><li>Red Cross Scope</li><li>16x Scope</li><li>Vertical Grip x2</li><li>Horizontal Grip</li><li>Bipod</li><li>Military Barrel</li><li>Ranger Barrel</li><li>Military Suppressor</li><li>Ranger Suppressor</li><li>Adaptive Chambering</li><li>Military Muzzle</li></ul>', 'Attachments Kit')">
            <div class="w3-xlarge" style="color: #FF9D0F;">
              <h1 class="underline w3-xlarge" style="color: #FF9D0F">Attachments</h1>
              <p class="w3-medium">A tactical kit that includes 15 attachments.</p>
              <p class="w3-small">*Click for Details*</p>
            </div>
          </button>
        </figcaption>
      </figure>
    </div>
    <div style="margin-top: 100px; margin-left: 20px; margin-right: 20px; border-radius: 10px"
      <figure class="imghvr-fade w3-lemonmilk">
        <img class="kitsimages" src="http://i65.tinypic.com/bjdhdf.png">
        <figcaption style="background-color: #737a28">
          <button class="buttonkit" onclick="Alert.render('<p>Command: /kit repair<br>May be spawned once per hour.</p><p>This kit includes:</p><ul><li>Blowtorch</li><li>Metal Scrap x25</li><li>Cloth x10</li></ul>', 'Repair Kit')">
            <div class="w3-xlarge" style="color: #FF9D0F;">
              <h1 class="underline w3-xlarge" style="color: #FF9D0F">Repair</h1>
              <p class="w3-medium">A supply kit that contains metal, cloth, and a blow torch for quick repairs.</p>
              <p class="w3-small">*Click for Details*</p>
            </div>
          </button>
        </figcaption>
      </figure>
    </div>
    <div style="margin-top: 100px; margin-left: 20px; margin-right: 20px; border-radius: 10px"
      <figure class="imghvr-fade w3-lemonmilk">
        <img class="kitsimages" src="http://i67.tinypic.com/o93887.png">
        <figcaption style="background-color: #737a28">
          <button class="buttonkit" onclick="Alert.render('<p>Command: /kit fences<br>May be spawned once per hour.</p><p>This kit includes:</p><ul><li>Barbed Wire Fence x15</li><li>Barbed Wire x10</li></ul>', 'Fences Kit')">
            <div class="w3-xlarge" style="color: #FF9D0F;">
              <h1 class="underline w3-xlarge" style="color: #FF9D0F">Fences</h1>
              <p class="w3-medium">A tactical kit that includes barbed wire fences and barbed wire.</p>
              <p class="w3-small">*Click for Details*</p>
            </div>
          </button>
        </figcaption>
      </figure>
    </div>
    <div style="margin-top: 100px; margin-left: 20px; margin-right: 20px; border-radius: 10px"
      <figure class="imghvr-fade w3-lemonmilk">
        <img class="kitsimages" src="http://i67.tinypic.com/24mdp1t.png">
        <figcaption style="background-color: #737a28">
          <button class="buttonkit" onclick="Alert.render('<p>Command: /kit picnic<br>May be spawned once per hour.</p><p>This kit includes:</p><ul><li>Pizza</li><li>Pumpkin Pie</li><li>Cake</li><li>BLT x2</li><li>Cheese Steak Sandwich x2</li><li>Cheese x2</li><li>Canned Soda x2</li><li>Canned Cola x2</li><li>Pancake x2</li><li>Waffle x2</li><li>Doughnut x2</li><li>Maple Syrup x2</li><li>Milk Box</li><li>Orange Juice Box</li><li>Grape Juice x2</li><li>Apple Juice x2</li><li>Chewing Gum</li><li>Cooler</li></ul>', 'Picnic Kit')">
            <div class="w3-xlarge" style="color: #FF9D0F;">
              <h1 class="underline w3-xlarge" style="color: #FF9D0F">Picnic</h1>
              <p class="w3-medium">A supply kit that contains plenty of food to share.</p>
              <p class="w3-small">*Click for Details*</p>
            </div>
          </button>
        </figcaption>
      </figure>
    </div>
      <div style="margin-top: 100px; margin-left: 20px; margin-right: 20px; border-radius: 10px"
      <figure class="imghvr-fade w3-lemonmilk">
        <img class="kitsimages" src="http://i67.tinypic.com/2irx9py.png">
        <figcaption style="background-color: #737a28">
          <button class="buttonkit" onclick="Alert.render('<p>Command: /kit paint<br>May be spawned once per hour.</p><p>This kit includes:</p><ul><li>Black Balaclava</li><li>Black T-Shirt</li><li>Cargo Pants</li><li>Paintball Gun</li><li>Halo Sight</li><li>Vertical Grip</li><li>Adaptive Chambering</li><li>Purple Hopper x2</li><li>Blue Hopper x2</li><li>Green Hopper x2</li><li>Yellow Hopper x2</li><li>Orange Hopper x2</li><li>Red Hopper x2</li></ul>', 'Paint Kit')">
            <div class="w3-xlarge" style="color: #FF9D0F;">
              <h1 class="underline w3-xlarge" style="color: #FF9D0F">Paint</h1>
              <p class="w3-medium">A very colorful kit.</p>
              <p class="w3-small">*Click for Details*</p>
            </div>
          </button>
        </figcaption>
      </figure>
    </div>
    <div style="margin-top: 100px; margin-left: 20px; margin-right: 20px; border-radius: 10px;"
      <figure class="imghvr-fade w3-lemonmilk">
        <img class="kitsimages" src="http://i68.tinypic.com/95pi0z.png">
        <figcaption style="background-color: #737a28">
          <button class="buttonkit" onclick="Alert.render('<p>Command: /kit horde<br>May be spawned once per hour.</p><p>This kit includes:</p><ul><li>Horde Beacon</li><li>Chainsaw</li><li>Low Caliber Civilian Ammunition x4</li><li>Low Caliber Military Ammunition x2</li><li>SutureKit x2</li><li>Dressing x9</li><li>Vaccine x3</li></ul>', 'Horde Kit')">
            <div class="w3-xlarge" style="color: #FF9D0F;">
              <h1 class="underline w3-xlarge" style="color: #FF9D0F">Horde</h1>
              <p class="w3-medium">A tactical kit that includes a horde beacon, ammo, and medical supplies.</p>
              <p class="w3-small">*Click for Details*</p>
            </div>
          </button>
        </figcaption>
      </figure>
    </div>
    <h2 class="underline w3-text-green3" style="padding-top: 150px;padding-bottom: 10px">Premium ($2.50 each)</h2>
    <div>
      <div style="margin-top: 100px; margin-left: 20px; margin-right: 20px; border-radius: 10px"
        <figure class="imghvr-fade w3-lemonmilk">
          <img class="kitsimages" src="http://i65.tinypic.com/k2hant.png">
          <figcaption style="background-color: #737a28">
            <button class="buttonkit" onclick="Alert.render('<p>Command: /kit forestmilitary<br>May be spawned once per hour.</p><p>This kit includes:</p><ul><li>Forest Military Helmet</li><li>Forest Military Shirt</li><li>Forest Military Vest</li><li>Forest Military Bottom</li><li>Swissgewehr</li><li>Swissgewehr Mag x3</li><li>Backlash</li><li>12 Gauge Shells x6</li><li>Red Dot Sight</li><li>Vertical Grip</li><li>Adaptive Chambering</li><li>Low Caliber Military Ammunition x3</li><li>Military Knife</li><li>Flashbang x2</li><li>MRE x2</li><li>Medkit</li><li>Dressing x3</li></ul>', 'Forest Military Kit')">
              <div class="w3-xlarge" style="color: #FF9D0F;">
                <h1 class="underline w3-xlarge" style="color: #FF9D0F">Forest Military</h1>
                <p class="w3-medium">A weapons kit that equips you with forest military gear, a swissgewehr, a desert falcon, and ammo.</p>
                <p class="w3-small">*Click for Details*</p>
              </div>
            </button>
          </figcaption>
        </figure>
      </div>
      <div style="margin-top: 100px; margin-left: 20px; margin-right: 20px; border-radius: 10px"
        <figure class="imghvr-fade w3-lemonmilk">
          <img class="kitsimages" src="http://i68.tinypic.com/vr3lo2.png">
          <figcaption style="background-color: #737a28">
            <button class="buttonkit" onclick="Alert.render('<p>Command: /kit russianmilitary<br>May be spawned once per hour.</p><p>This kit includes:</p><ul><li>Russian Military Helmet</li><li>Russian Military Top</li><li>Russian Military Vest</li><li>Russian Military Bottom</li><li>Nykorev</li><li>Nykorev Box</li><li>Teklowvka</li><li>Teklowvka Magazine x3</li><li>Red Dot Sight</li><li>Vertical Grip</li><li>Adaptive Chambering</li><li>Low Caliber Ranger Ammunition x4</li><li>Military Knife</li><li>Flashbang x2</li><li>MRE x2</li><li>Medkit</li><li>Dressing x3</li></ul>', 'Russian Military Kit')">
              <div class="w3-xlarge" style="color: #FF9D0F;">
                <h1 class="underline w3-xlarge" style="color: #FF9D0F">Russian Military</h1>
                <p class="w3-medium">A weapons kit that equips you with russian military gear, a nykorev, a teklowvka, and ammo.</p>
                <p class="w3-small">*Click for Details*</p>
              </div>
            </button>
          </figcaption>
        </figure>
      </div>
      <div style="margin-top: 100px; margin-left: 20px; margin-right: 20px; border-radius: 10px"
        <figure class="imghvr-fade w3-lemonmilk">
          <img class="kitsimages" src="http://i63.tinypic.com/5bsgso.png">
          <figcaption style="background-color: #737a28">
            <button class="buttonkit" onclick="Alert.render('<p>Command: /kit desertmilitary<br>May be spawned once per hour.</p><p>This kit includes:</p><ul><li>Desert Military Helmet</li><li>Desert Military Top</li><li>Desert Military Vest</li><li>Desert Military Bottom</li><li>Fusilaut</li><li>Military Drum</li><li>Desert Falcon</li><li>Desert Falcon Magazine x3</li><li>Red Dot Sight</li><li>Vertical Grip</li><li>Adaptive Chambering</li><li>Low Caliber Military Ammunition x2</li><li>High Caliber Military Ammunition x2</li><li>Military Knife</li><li>Flashbang x2</li><li>MRE x2</li><li>Medkit</li><li>Dressing x3</li></ul>', 'Desert Military Kit')">
              <div class="w3-xlarge" style="color: #FF9D0F;">
                <h1 class="underline w3-xlarge" style="color: #FF9D0F">Desert Military</h1>
                <p class="w3-medium">A weapons kit that equips you with desert military gear, a fusilaut, a backlash, and ammo.</p>
                <p class="w3-small">*Click for Details*</p>
              </div>
            </button>
          </figcaption>
        </figure>
      </div>
      <div style="margin-top: 100px; margin-left: 20px; margin-right: 20px; border-radius: 10px"
        <figure class="imghvr-fade w3-lemonmilk">
          <img class="kitsimages" src="http://i63.tinypic.com/255rz4k.png">
          <figcaption style="background-color: #737a28">
            <button class="buttonkit" onclick="Alert.render('<p>Command: /kit germancamo<br>May be spawned once per hour.</p><p>This kit includes:</p><ul><li>Peaks Ghillie Hood</li><li>Peaks Ghillie Top</li><li>Peaks Ghillie Vest</li><li>Peaks Ghillie Bottom</li><li>Ekho</li><li>Ekho Magazine x4</li><li>Maschingehewr</li><li>Maschingehewr Magazine x2</li><li>Red Dot Sight</li><li>Bipod</li><li>16x Scope</li><li>Low Caliber Ranger Ammunition x2</li><li>High Caliber Ranger Ammunition x2</li><li>Military Knife</li><li>Flashbang x2</li><li>MRE x2</li><li>Medkit</li><li>Dressing x3</li></ul>', 'German Camo Kit')">
              <div class="w3-xlarge" style="color: #FF9D0F;">
                <h1 class="underline w3-xlarge" style="color: #FF9D0F">German Camo</h1>
                <p class="w3-medium">A weapons kit that equips you with peaks ghillie, an ehko, a maschingehewr, and ammo.</p>
                <p class="w3-small">*Click for Details*</p>
              </div>
            </button>
          </figcaption>
        </figure>
      </div>
      <div style="margin-top: 100px; margin-left: 20px; margin-right: 20px; border-radius: 10px"
        <figure class="imghvr-fade w3-lemonmilk">
          <img class="kitsimages" src="http://i64.tinypic.com/15qfacy.png">
          <figcaption style="background-color: #737a28">
            <button class="buttonkit" onclick="Alert.render('<p>Command: /kit russiancamo<br>May be spawned once per hour.</p><p>This kit includes:</p><ul><li>Russian Ghillie Hood</li><li>Russian Ghillie Top</li><li>Russian Ghillie Vest</li><li>Russian Ghillie Bottom</li><li>Matamorez</li><li>Matamorez Box x3</li><li>Yuri</li><li>Yuri Magazine x2</li><li>Red Dot Sight</li><li>Horizontal Grip</li><li>8x Scope</li><li>Low Caliber Ranger Ammunition x2</li><li>High Caliber Ranger Ammunition x2</li><li>Military Knife</li><li>Flashbang x2</li><li>MRE x2</li><li>Medkit</li><li>Dressing x3</li></ul>', 'Russian Camo Kit')">
              <div class="w3-xlarge" style="color: #FF9D0F;">
                <h1 class="underline w3-xlarge" style="color: #FF9D0F">Russian Camo</h1>
                <p class="w3-medium">A weapons kit that equips you with russian ghillie, a matamorez, a yuri, and ammo.</p>
                <p class="w3-small">*Click for Details*</p>
              </div>
            </button>
          </figcaption>
        </figure>
      </div>
      <div style="margin-top: 100px; margin-left: 20px; margin-right: 20px; border-radius: 10px"
        <figure class="imghvr-fade w3-lemonmilk">
          <img class="kitsimages" src="http://i63.tinypic.com/k1b2pc.png">
          <figcaption style="background-color: #737a28">
            <button class="buttonkit" onclick="Alert.render('<p>Command: /kit scuba<br>May be spawned once per hour.</p><p>This kit includes:</p><ul><li>Snorkel</li><li>Wetsuit Top</li><li>Wetsuit Bottom</li><li>Diving Tank</li><li>Scalar</li><li>Scalar Magazine x3</li><li>Red Dot Sight</li><li>Tactical Light</li><li>Vertical Grip</li><li>Low Caliber Military Ammunition x3</li><li>Butterfly Knife</li><li>Oxygenator</li><li>Generator</li><li>MRE x2</li><li>Medkit</li><li>Dressing x3</li></ul>', 'Scuba Kit')">
              <div class="w3-xlarge" style="color: #FF9D0F;">
                <h1 class="underline w3-xlarge" style="color: #FF9D0F">Scuba</h1>
                <p class="w3-medium">A tactical kit that includes diving gear, a scalar, an oxygenator, and ammo.</p>
                <p class="w3-small">*Click for Details*</p>
              </div>
            </button>
          </figcaption>
        </figure>
      </div>
      <div style="margin-top: 100px; margin-left: 20px; margin-right: 20px; border-radius: 10px"
        <figure class="imghvr-fade w3-lemonmilk">
          <img class="kitsimages" src="http://i67.tinypic.com/2u4q7hi.png">
          <figcaption style="background-color: #737a28">
            <button class="buttonkit" onclick="Alert.render('<p>Command: /kit biohazard<br>May be spawned once per hour.</p><p>This kit includes:</p><ul><li>Biohazard Hood</li><li>Biohazard Top</li><li>Biohazard Bottom</li><li>Empire</li><li>Empire Magazine x2</li><li>Red Dot Sight</li><li>Military Barrel</li><li>Vertical Grip</li><li>Low Caliber Military Ammunition x3</li><li>Military Knife</li><li>Filter x6</li><li>Vaccine x3</li><li>Antiobiotics</li><li>MRE x2</li><li>Medkit</li><li>Dressing x3</li></ul>', 'Biohazard Kit')">
              <div class="w3-xlarge" style="color: #FF9D0F;">
                <h1 class="underline w3-xlarge" style="color: #FF9D0F">Biohazard</h1>
                <p class="w3-medium">A tactical kit that includes biohazard gear, filters, and medical supplies</p>
                <p class="w3-small">*Click for Details*</p>
              </div>
            </button>
          </figcaption>
        </figure>
      </div>
      <div style="margin-top: 100px; margin-left: 20px; margin-right: 20px; border-radius: 10px"
        <figure class="imghvr-fade w3-lemonmilk">
          <img class="kitsimages" src="http://i66.tinypic.com/f0wet.png">
          <figcaption style="background-color: #737a28">
            <button class="buttonkit" onclick="Alert.render('<p>Command: /kit ranger<br>May be spawned once per hour.</p><p>This kit includes:</p><ul><li>RCMP Hat</li><li>RCMP Top</li><li>Grasslands Vest</li><li>RCMP Bottom</li><li>Augewehr</li><li>Ranger Drum</li><li>Zubeknakov</li><li>Ranger Magazines x2</li><li>Red Dot Sight</li><li>Vertical Grip</li><li>Ranger Barrel</li><li>Low Caliber Ranger Ammunition x4</li><li>Machete</li><li>MRE x2</li><li>Medkit</li><li>Dressing x3</li></ul>', 'Ranger Kit')">
              <div class="w3-xlarge" style="color: #FF9D0F;">
                <h1 class="underline w3-xlarge" style="color: #FF9D0F">Ranger</h1>
                <p class="w3-medium">A weapons kit that equips you with rcmp gear, a zubeknakov, an augewehr, and ammo.</p>
                <p class="w3-small">*Click for Details*</p>
              </div>
            </button>
          </figcaption>
        </figure>
      </div>
      <div style="margin-top: 100px; margin-left: 20px; margin-right: 20px; border-radius: 10px"
        <figure class="imghvr-fade w3-lemonmilk">
          <img class="kitsimages" src="http://i63.tinypic.com/1zx8kfa.png">
          <figcaption style="background-color: #737a28">
            <button class="buttonkit" onclick="Alert.render('<p>Command: /kit coastguard<br>May be spawned once per hour.</p><p>This kit includes:</p><ul><li>Red Cap</li><li>Coastguard Top</li><li>Coastguard Bottom</li><li>Red Travelpack</li><li>Skipper</li><li>Low Caliber Military Ammunition x3</li><li>Military Knife</li><li>MRE x2</li><li>Medkit</li><li>Dressing x3</li></ul>', 'Coastguard Kit')">
              <div class="w3-xlarge" style="color: #FF9D0F;">
                <h1 class="underline w3-xlarge" style="color: #FF9D0F">Coastguard</h1>
                <p class="w3-medium">A tactical kit that includes a skipper and coastguard gear.</p>
                <p class="w3-small">*Click for Details*</p>
              </div>
            </button>
          </figcaption>
        </figure>
      </div>
      <div style="margin-top: 100px; margin-left: 20px; margin-right: 20px; border-radius: 10px"
        <figure class="imghvr-fade w3-lemonmilk">
          <img class="kitsimages" src="http://i67.tinypic.com/2rhplhf.png">
          <figcaption style="background-color: #737a28">
            <button class="buttonkit" onclick="Alert.render('<p>Command: /kit pilot<br>May be spawned once per hour.</p><p>This kit includes:</p><ul><li>Fighter Pilot Hat</li><li>Fighter Pilot Top</li><li>Fighter Pilot Bottom</li><li>White Travelpack</li><li>Fighter Jet</li><li>Low Caliber Military Ammunition x3</li><li>Military Knife</li><li>MRE x2</li><li>Medkit</li><li>Dressing x3</li></ul>', 'Pilot Kit')">
              <div class="w3-xlarge" style="color: #FF9D0F;">
                <h1 class="underline w3-xlarge" style="color: #FF9D0F">Pilot</h1>
                <p class="w3-medium">A tactical kit that includes a fighter jet and fighter pilot gear.</p>
                <p class="w3-small">*Click for Details*</p>
              </div>
            </button>
          </figcaption>
        </figure>
      </div>
    </div>
    <h2 class="underline w3-text-green3" style="padding-top: 150px;padding-bottom: 10px">Deluxe ($5.00 each)</h2>
    <div>
      <div style="margin-top: 100px; margin-left: 20px; margin-right: 20px; border-radius: 10px"
        <figure class="imghvr-fade w3-lemonmilk">
          <img class="kitsimages" src="http://i65.tinypic.com/ev2zhs.png">
          <figcaption style="background-color: #737a28">
            <button class="buttonkit" onclick="Alert.render('<p>Command: /kit shield<br>May be spawned once per hour.</p><p>This kit includes:</p><ul><li>Spec Ops Beret</li><li>Military Nightvision</li><li>Spec Ops Top</li><li>Spec Ops Vest</li><li>Spec Ops Bottom</li><li>Alicepack</li><li>Dragonfang</li><li>Dragonfang Box x2</li><li>Honeybadger</li><li>Military Drum x2</li><li>Tracer Magazines x3</li><li>Fragmentation Magazines x2</li><li>Rangefinder</li><li>Red Dot Sight</li><li>Vertical Grip x2</li><li>Adaptive Chambering</li><li>Military Barrel</li><li>Low Caliber Military Ammunition x5</li><li>Military Knife</li><li>Flashbangs x3</li><li>MRE x3</li><li>Medkit x2</li><li>Bloodbag x2</li><li>Vaccine</li><li>Dressing x5</li></ul>', 'Shield Kit')">
              <div class="w3-xlarge" style="color: #FF9D0F;">
                <h1 class="underline w3-xlarge" style="color: #FF9D0F">Shield</h1>
                <p class="w3-medium">A weapons kit that equips you with spec ops gear, a dragonfang, a honeybadger, tracer and fragmentation magazines, and ammo.</p>
                <p class="w3-small">*Click for Details*</p>
              </div>
            </button>
          </figcaption>
        </figure>
      </div>
      <div style="margin-top: 100px; margin-left: 20px; margin-right: 20px; border-radius: 10px"
        <figure class="imghvr-fade w3-lemonmilk">
          <img class="kitsimages" src="http://i67.tinypic.com/2eo8axg.png">
          <figcaption style="background-color: #737a28">
            <button class="buttonkit" onclick="Alert.render('<p>Command: /kit raid<br>May be spawned once per hour.</p><p>This kit includes:</p><ul><li>Spec Ops Beret</li><li>Military Nightvision</li><li>Spec Ops Top</li><li>Spec Ops Vest</li><li>Spec Ops Bottom</li><li>Alicepack</li><li>Nightraider</li><li>Military Drum x2</li><li>Rocket Launcher</li><li>Rocket x4</li><li>Rangefinder</li><li>Red Dot Sight</li><li>Vertical Grip</li><li>Adaptive Chambering</li><li>Low Caliber Military Ammunition x5</li><li>Demolition Charges x8</li><li>Precision Charges x4</li><li>Detonator</li><li>Impact Grenade x3</li><li>Sticky Grenade x3</li><li>Military Knife</li><li>Flashbangs x3</li><li>MRE x3</li><li>Medkit x2</li><li>Bloodbag x2</li><li>Vaccine</li><li>Dressing x5</li></ul>', 'Raid Kit')">
              <div class="w3-xlarge" style="color: #FF9D0F;">
                <h1 class="underline w3-xlarge" style="color: #FF9D0F">Raid</h1>
                <p class="w3-medium">A weapons kit that equips you with spec ops gear, a nightraider, a rocket launcher, various explosive devices, and ammo.</p>
                <p class="w3-small">*Click for Details*</p>
              </div>
            </button>
          </figcaption>
        </figure>
      </div>
      <div style="margin-top: 100px; margin-left: 20px; margin-right: 20px; border-radius: 10px"
        <figure class="imghvr-fade w3-lemonmilk">
          <img class="kitsimages" src="http://i65.tinypic.com/2hrhedv.png">
          <figcaption style="background-color: #737a28">
            <button class="buttonkit" onclick="Alert.render('<p>Command: /kit sentry<br>May be spawned once per hour.</p><p>This kit includes:</p><ul><li>Alicepack</li><li>Hostile Sentry x8</li><li>Neutral Sentry x4</li><li>Eaglefire x6</li><li>Industrial Generator</li><li>Industrial Gas Can</li><li>Sandbag x12</li><li>Snare x6</li></ul>', 'Sentry Kit')">
              <div class="w3-xlarge" style="color: #FF9D0F;">
                <h1 class="underline w3-xlarge" style="color: #FF9D0F">Sentry</h1>
                <p class="w3-medium">A tactical kit that includes hostile and neutral sentries, eaglefires, a generator, and a gas can.</p>
                <p class="w3-small">*Click for Details*</p>
              </div>
            </button>
          </figcaption>
        </figure>
      </div>
      <div style="margin-top: 100px; margin-left: 20px; margin-right: 20px; border-radius: 10px"
        <figure class="imghvr-fade w3-lemonmilk">
          <img class="kitsimages" src="http://i68.tinypic.com/2ldkayv.png">
          <figcaption style="background-color: #737a28">
            <button class="buttonkit" onclick="Alert.render('<p>Command: /kit lightsniper<br>May be spawned once per hour.</p><p>This kit includes:</p><ul><li>Forest Ghillie Hood</li><li>Military Nightvision</li><li>Forest Ghillie Top</li><li>Forest Ghillie Vest</li><li>Forest Ghillie Bottom</li><li>Alicepack</li><li>Timberwolf</li><li>Timberwolf Magazine x4</li><li>Honeybadger</li><li>Military Drum x2</li><li>Rangefinder</li><li>Red Dot Sight</li><li>Military Nightvision Scope</li><li>Bipod</li><li>Vertical Grip</li><li>Military Suppressor</li><li>Low Caliber Military Ammunition x3</li><li>High Caliber Military Ammunition x2</li><li>Military Knife</li><li>Flashbangs x3</li><li>MRE x3</li><li>Medkit x2</li><li>Bloodbag x2</li><li>Vaccine</li><li>Dressing x5</li></ul>', 'Light Sniper Kit')">
              <div class="w3-xlarge" style="color: #FF9D0F;">
                <h1 class="underline w3-xlarge" style="color: #FF9D0F">Light Sniper</h1>
                <p class="w3-medium">A weapons kit that equips you with forest ghillie, a timberwolf, a honeybadger, and ammo.</p>
                <p class="w3-small">*Click for Details*</p>
              </div>
            </button>
          </figcaption>
        </figure>
      </div>
      <div style="margin-top: 100px; margin-left: 20px; margin-right: 20px; border-radius: 10px"
        <figure class="imghvr-fade w3-lemonmilk">
          <img class="kitsimages" src="http://i68.tinypic.com/10e4rb6.png">
          <figcaption style="background-color: #737a28">
            <button class="buttonkit" onclick="Alert.render('<p>Command: /kit heavysniper<br>May be spawned once per hour.</p><p>This kit includes:</p><ul><li>Forest Ghillie Hood</li><li>Military Nightvision</li><li>Forest Ghillie Top</li><li>Forest Ghillie Vest</li><li>Forest Ghillie Bottom</li><li>Alicepack</li><li>Grizzly</li><li>Grizzly Magazine x4</li><li>Honeybadger</li><li>Military Drum x2</li><li>Rangefinder</li><li>Red Dot Sight</li><li>Military Nightvision Scope</li><li>Bipod</li><li>Vertical Grip</li><li>Military Suppressor</li><li>Low Caliber Military Ammunition x3</li><li>High Caliber Military Ammunition x2</li><li>Military Knife</li><li>Flashbangs x3</li><li>MRE x3</li><li>Medkit x2</li><li>Bloodbag x2</li><li>Vaccine</li><li>Dressing x5</li>', 'Heavy Sniper Kit')">
              <div class="w3-xlarge" style="color: #FF9D0F;">
                <h1 class="underline w3-xlarge" style="color: #FF9D0F">Heavy Sniper</h1>
                <p class="w3-medium">A weapons kit that equips you with forest ghillie, a grizzly, a honeybadger, and ammo.</p>
                <p class="w3-small">*Click for Details*</p>
              </div>
            </button>
          </figcaption>
        </figure>
      </div>
      <h2 class="underline w3-text-green3" style="padding-top: 150px;padding-bottom: 10px">Ultimate ($10.00 each)</h2>
      <div>
        <div style="margin-top: 100px; margin-left: 20px; margin-right: 20px; border-radius: 10px"
          <figure class="imghvr-fade w3-lemonmilk">
            <img class="kitsimages" src="http://i68.tinypic.com/9i7fq9.png">
            <figcaption style="background-color: #737a28">
              <button class="buttonkit" onclick="Alert.render('<p>Command: /kit ammunition<br>May be spawned once per hour.</p><p>This kit includes:</p><ul><li>Alicepack</li><li>Low Caliber Military Ammunition x8</li><li>High Caliber Military Ammunition x4</li><li>Low Caliber Ranger Ammunition x6</li><li>High Caliber Ranger Ammunition x3</li><li>Military Drum x3</li><li>Ranger Drum x2</li></ul>', 'Ammunition Kit')">
                <div class="w3-xlarge" style="color: #FF9D0F;">
                  <h1 class="underline w3-xlarge" style="color: #FF9D0F">Ammunition</h1>
                  <p class="w3-medium">A tactical kit that includes low caliber military and ranger, and high caliber military and ranger ammo.</p>
                  <p class="w3-small">*Click for Details*</p>
                </div>
              </button>
            </figcaption>
          </figure>
        </div>
        <div style="margin-top: 100px; margin-left: 20px; margin-right: 20px; border-radius: 10px"
          <figure class="imghvr-fade w3-lemonmilk">
            <img class="kitsimages" src="http://i66.tinypic.com/2cd7f2b.png">
            <figcaption style="background-color: #737a28">
              <button class="buttonkit" onclick="Alert.render('<p>Command: /kit op<br>May be spawned once per hour.</p><p>This kit includes:</p><ul><li>Green Beret</li><li>Military Nightvision</li><li>Spec Ops Top</li><li>Spec Ops Vest</li><li>Spec Ops Bottom</li><li>Alicepack</li><li>Chariot</li><li>Hells Fury</li><li>Hells Fury Drum x3</li><li>Honeybadger</li><li>Military Drum x3</li><li>Rangefinder</li><li>Military Nightvision Scope</li><li>Red Dot Sight</li><li>Vertical Grip</li><li>Adaptive Chambering</li><li>Military Barrel</li><li>Low Caliber Military Ammunition x4</li><li>Low Caliber Ranger Ammunition x4</li><li>Impact Grenade x3</li><li>Sticky Grenade x3</li><li>Landmine x3</li><li>Flashbang x5</li><li>Butterfly Knife</li><li>MRE x5</li><li>Medkit x3</li><li>Bloodbag x2</li><li>Vaccine x2</li><li>Antibiotic x2</li><li>Dressing x5</li></ul>', 'OP Kit')">
                <div class="w3-xlarge" style="color: #FF9D0F;">
                  <h1 class="underline w3-xlarge" style="color: #FF9D0F">OP</h1>
                  <p class="w3-medium">A weapons kit that equips you with a chariot, a hells fury, a honeybadger, explosives, and ammo.</p>
                  <p class="w3-small">*Click for Details*</p>
                </div>
              </button>
            </figcaption>
          </figure>
        </div>
        <div style="margin-top: 100px; margin-left: 20px; margin-right: 20px; border-radius: 10px"
          <figure class="imghvr-fade w3-lemonmilk">
            <img class="kitsimages" src="http://i66.tinypic.com/28rz33d.png">
            <figcaption style="background-color: #737a28">
              <button class="buttonkit" onclick="Alert.render('<p>Command: /kit lancer<br>May be spawned once per hour.</p><p>This kit includes:</p><ul><li>Alicepack</li><li>Lancer</li><li>Lancer Rocket x10</li></ul>', 'Lancer Kit')">
                <div class="w3-xlarge" style="color: #FF9D0F;">
                  <h1 class="underline w3-xlarge" style="color: #FF9D0F">Lancer</h1>
                  <p class="w3-medium">A weapons kit that equips you with a lancer and lancer rockets.</p>
                  <p class="w3-small">*Click for Details*</p>
                </div>
              </button>
            </figcaption>
          </figure>
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
