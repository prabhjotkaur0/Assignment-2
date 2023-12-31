<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FinalProjrctPHP</title>
    <link rel="stylesheet" href="css/style3.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital@1&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Header -->
    <header>
        <nav class="navbar">
            <img class="logo" src="img/polaroid2.png" alt="website Logo">
            <div class="searchBar">
                <input type="search" placeholder="Search for music">
            </div>
            <div class="Acontainer">
                <a href="home" class="active">Home</a>
                <a href="signup.php">Register</a>
                <a href="login.php">Login</a>
                <a href="Contact.html">Contact</a>
            </div>
        </nav>
    </header>

    <section class="section1">
        <div class="polaroid1 pop-element">
            <img src="polaroid1.png" alt="">
        </div>
        <div class="section1_1">
            <h1 class="pop-element">Polaroid</h1><br>
            <h2>Capture your <br> Moments</h2>
        </div>
    </section>

    <section class="section2">
        <blockquote>
            " The Polaroid camera is a timeless icon, blending nostalgia with modern simplicity. <br>
            Each click freezes a moment, creating tangible memories that transcend the digital realm. <br>
             With its distinctive shake-and-develop ritual, it offers a refreshing return to the tactile and <br> immediate in a world saturated with digital imagery. The Polaroid isn't just a camera; <br>
             it's a conduit for creating, sharing, and treasuring authentic moments."
        </blockquote>
    </section>
    <section class="section3">
        <div class="polaroid5 pop-element">
            <img src="img/polaroid5.png" alt="">
        </div>
        <div class="section3_1">
            <h1 class="pop-element">JOIN US!</h1><br>
            <h2 id="slideInHeading">NOW!</h2>
            <ul class="pop-element">
                <li>Instant Gratification</li>
                <li>Tactile and Tangible Memories</li>
                <li>Creative Expression and Spontaneity</li>
                <li>Social Interaction and Sharing</li>
                <li>Iconic Aesthetic and Timeless Appeal</li>
            </ul>
        </div>
    </section>

    <footer>
        <div class="tab">
            <h1 class="pop-element">Shop</h1>
            <div class="subtabs">
                <a href="Home.html">Home</a>
                <a href="Product.html">Our Product</a>
            </div>
            <h1 class="pop-element">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Company</h1>
            <div class="subtabs">
                <a href="about.html">About</a>
                <a href="Reviews.html">Reviews</a>
                <a href="FAQ.html">FAQ</a>
            </div>
            <h1 class="pop-element">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Contact Us</h1>
            <div class="subtabs">
                <p>contact@Polaroid.corp</p>
                <p>+1-(123)-456-4440</p>
                <p>111, tupac shakur road, Toronto</p>
            </div>
            <h1 class="pop-element">Follow Us</h1>
            <div class="subtabs">
                <a href="#">Twitter</a>
                <a href="#">Facebook</a>
                <a href="#">Instagram</a>
                <a href="#">Github</a>
            </div>
        </div>
        <div class="footerdiv">
            <div class="tab-2">
                <a href="#">Terms & Conditions</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Shipping Policy</a>
                <a href="#">Refund Policy</a>
                <a href="#">Cookie Policy</a>
            </div>
            <p>© 2023 by Polaroid Camera Corp.</p>
        </div>
    </footer>
    

    <script>
        // JavaScript to control the animation
        document.addEventListener("DOMContentLoaded", function () {
          var slideInHeading = document.getElementById("slideInHeading");
    
          function checkScroll() {
            var triggerBottom = window.innerHeight * 0.8; // Adjust as needed
            var headingTop = slideInHeading.getBoundingClientRect().top;
    
            if (headingTop < triggerBottom) {
              slideInHeading.style.opacity = 1;
              slideInHeading.style.transform = "translateX(0)";
              window.removeEventListener("scroll", checkScroll);
            }
          }
    
          window.addEventListener("scroll", checkScroll);
          checkScroll(); // Check on initial load
        });
      </script>
</body>

</html>
