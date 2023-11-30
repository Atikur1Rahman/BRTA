<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>BRTA Home Page</title>

  <style>
    * {
      box-sizing: border-box;
    }

    body {
      font-family: Verdana, sans-serif;
    }

    .mySlides {
      display: none;
    }

    img {
      vertical-align: middle;
    }

    .slideshow-container {
      max-width: 1500px;
      position: relative;
      margin: auto;
    }





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

    .fade {
      animation-name: fade;
      animation-duration: 2s;
    }

    @keyframes fade {
      from {
        opacity: .4
      }

      to {
        opacity: 1
      }
    }

    @media only screen and (max-width: 300px) {
      .text {
        font-size: 11px
      }
    }
  </style>



</head>


<body>
  
<nav class="navbar">
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="license_application.php">Registation</a></li>
      <li><a href="login.php">Log In</a></li>
      <li><a href="map.html">Location</a></li>

    </ul>
   
       
        
            
  </nav>
  
  <br><br>
  <br><br>


  <center>
    <div class="slideshow-container">

      <div class="mySlides fade">

        <img src="1.jpeg" style="width:30%">

      </div>

      <div class="mySlides fade">

        <img src="2.jpeg" style="width:30%">

      </div>
      <div class="mySlides fade">

        <img src="3.png" style="width:30%;">


      </div>
  </center>
  <br>

  <div style="text-align:center">
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
  </div>

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
      if (slideIndex > slides.length) {
        slideIndex = 1
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
      setTimeout(showSlides, 3000);
    }
  </script>
  <div class="container">
    <div class="slider">

    </div>

    <?php 
      if(isset($_GET["success_msg"])){
        echo "<div class='alert alert-success' role='alert'> ".$_GET["success_msg"]." </div>";
      }
    ?>

    <div class="instructions">
      <h2>Driving license Instructions</h2>
      <p>Follow the instructions below to obtain your license...</p>
      <ol>
        <li>A prerequisite for a driving license is a learner's driving license</li>
        <li>Minimum educational qualification of driving license applicant is 8th class pass.</li>
        <li>Age should be minimum 18 years for amateur and minimum 21 years for professional driving license.</li>
        <li>Must be mentally and physically healthy.</li>
      </ol>
    </div>

    <div class="fees">
      <h2>Documents Required for Smartcard Driving License:</h2>
      <ol>
      <li>Application in prescribed form.</li>
      <li>Medical certificate by registered doctor.</li>
      <li>Attested photocopy of National ID Card.</li>
      <li>Receipt of deposit of prescribed fee in designated bank of BRTA.</li>
      <li>Police Investigation Report for Professional Driving Licence.</li>
      <li>1 copy of passport size photograph taken recently.</li>
    </ol>
    </div>
  </div>

  <footer>
    <div class="footer-columns">
      <div class="contact">
        <h3>Contact Us</h3>
        <p>Email: brta@gmail.com</p>
        <p>Phone: 01884314876</p>
      </div>

      <div class="links">
        <h3>Important Links</h3>
        <ul>
          <li>President Office</li>
          <li>Prime Minister Office</li>
          <li>Road Transport & Highway Division</li>
        </ul>
      </div>

      <div class="subscribe">
        <h3>Subscribe</h3>
        <form action="subscribe.php" method="post">
          <label for="email">Enter your email:</label>
          <input type="email" name="email" required>
          <input type="submit" value="Subscribe">
        </form>
      </div>
    </div>
  </footer>




</body>

</html>