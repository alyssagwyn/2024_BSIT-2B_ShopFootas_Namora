<!DOCTYPE html>
<?php include "../db.php";
?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ShopFootas</title>
  <link rel="stylesheet" href="style.css">
  
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
</head>
<body>
    <header>
      <nav class="navbar">
        <div class="nav-logo">
          <h1>ShopFootas</h1>
        </div>

        <div class="explore">
          <a href="search_button.html">
            <span class=" ">Explore</span>
          </a>
        </div>

        <div class="profile">
          <a href="#">
            <span class="">Profile</span>
          </a>
        </div>

        <div class="settings">
          <a href="#">
            <span class="">Settings</span>
          </a>
        </div>

        <div class="cart">
          <a href="#">
            <span class="">Cart</span>
          </a>
        </div>

           <div class="btn">
            <a href="login.html" class="btn">
              <button class="button">Login</button>
            </a>
           </div>

           <div class="btn">
             <a href="sign_up.html" class="btn">
               <button class="button">Signup</button>
             </a>
           </div>
          </div>
       
      </nav>

      
    </header>

    

  <meta name="viewport" content="width=device-width, initial-scale=1">

  

<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}


@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
</head>
<body>

  <center>
   
<div class="slideshow-container">

<div class="mySlides fade">
  <img src="SHOE BANNER 1.png" style="width:100%">  
</div>

<div class="mySlides fade">
  <img src="SHOE BANNER 2.png" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="SHOE BANNER 3.png" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="SHOE BANNER 4.png" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="SHOE BANNER 5.png" style="width:100%">
</div>

<!-- <div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="2.jpg" style="width:50%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="3.jpg" style="width:50%">
  <div class="text">Caption Three</div>
</div> -->

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

</center>
<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>


    <div>
    <?php
        $query = " SELECT * FROM product_design(item_name, item_price, item_description, item_qty, item_color, item_size, item_type, item_brand, item_photo)";
        $result = mysqli_query($conn, $query);
 
        while ($data = mysqli_fetch_assoc($result)) {
    ?>
        <img src="./product_pictures/<?php echo $data['item_photo']; ?>">
 
    <?php
        }
    ?>
    

    </div>

</body>
</html> 
 
  <section class="hero-section"></section>
  <section class="shop-section">
    <div class="shop-images">
      <div class="shop-link">
        <h3>Shop Flipflop</h3>
        <img src="flipflop.jpg" alt="card">
        <a href="#">Shop now</a>
      </div>
      <div class="shop-link">
        <h3>Shop Shoes</h3>
        <img src="shoe.jpg" alt="card">
        <a href="#">Shop now</a>
      </div>
      <div class="shop-link">
        <h3>Shop boots</h3>
        <img src="rider-boots.jpg" alt="card">
        <a href="#">Shop now</a>
      </div>
      <div class="shop-link">
        <h3>Shop slides</h3>
        <img src="slides.jpg" alt="card">
        <a href="#">Shop now</a>
      </div>
    </div>
  </section> 
  

    
      
</body>
</html>
