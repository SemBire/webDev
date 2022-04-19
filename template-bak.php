<?php
echo<<<HERE
<!DOCTYPE html>
<html lang="en">

   <head>
      <title>Easy Recipes</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
         integrity="sha-long-hash_code" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
         crossorigin="anonymous"></script>
      <!-- internal css -->
      <link rel="stylesheet" href="index.css">

   </head>

   <body>

      <div class="fakeimg" style="margin-bottom:0">
         <img src="images/homepagephoto.png" class="fakeimg" alt="Cinque Terre">
      </div>

      <nav class="navbar navbar-expand-sm navbar-dark sticky-top" style="background-color:#FDAC53 ;">

         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
               <li class="nav-item active">
                  <a href="index.php" class="nav-link active">
                     Home
                  </a>
               </li>
               <li class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button"
                     data-bs-toggle="dropdown" aria-expanded="false"> Recipe Gallery </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                     <li><a href="#" class="dropdown-item">Breakfast </a></li>
                     <li><a href="#" class="dropdown-item">Lunch </a></li>
                     <li><a href="#" class="dropdown-item">Dinner </a></li>
                  </ul>
               <li class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button"
                     data-bs-toggle="dropdown" aria-expanded="false">About Us </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                     <li><a href="about.php" class="dropdown-item">Who we are?</a></li>
                     <li><a href="contactus.php" class="dropdown-item">How to contact us?</a></li>
                  </ul>
               </li>
            </ul>
         </div>

         </div>
      </nav>

HERE;
print $pageContent;
echo <<<HERE
        <hr>
         <footer class="container-fluid">
            <br>
            <a href="login.php">
               <button type="button" class="btn btn-primary"> Sign In </button>
            </a>
            <br>

            <hr>
            <p> Developed by Yordin Kirk, Semhar Bire, Damaris Gonzalez</p>
            <a href="https://www.youtube.com/" class="btn"><span class="fab fa-youtube-square"
                  style="font-size:52px;color:red"></span></a>
            <a href="https://www.instagram.com/" class="btn"><span class="fab fa-instagram"
                  style="font-size:52px;color:fuchsia"></span></a>
            <a href="https://www.pinterest.com/" class="btn"><span class="fab fa-pinterest-square"
                  style="font-size:52px;color:firebrick"></span></a>
            <a href="https://www.twitter.com/" class="btn"><span class="fab fa-twitter-square"
                  style="font-size:52px;color:DeepSkyBlue"></span></a>
            <br>
            <a href="register.php"> Subscribe in our WebSite </a>
            <p>© BHC Web Dev 2022</p>
         </footer>
        </main>
   </body>

</html>
HERE;
?>