<!DOCTYPE html>
<html lang="en">
    <head >
        <title>Easy Recipes</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--bootstrap5-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        
    <!-- jQuery library -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>

    <!--javaScript-->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!--FontAwesome kit-->
        <script src="https://kit.fontawesome.com/c0e800fc4a.js" crossorigin="anonymous"></script>
        
    <!--External Style sheet-->
        <link rel="stylesheet"  type="text/css" href="webDev\index.css">
    <!-- favicon -->
        <link rel="icon" type="image/png" sizes="32x32" href="images\logo.png">
    </head>
    <body>
    <!--php here to show image full size on index, other sizes for other pages-->
<?php
 $pageNumber=Null;
 $headerImg = Null;
 if ($pageNumber <= 1)	{
   $headerImg =<<<HERE
       <header class="container-fluid">
           <img class="img-fluid" src="images\hero5.svg" alt="collage of food images">
           </header>
HERE;
   }else	 {
   $headerImg =<<<HERE
   <header class="container-fluid">
           <img class="img-fluid" src="images\header.svg" alt="collage of food images">
           </header>
HERE;
}
        print $headerImg
?>
        <!-- Nav Bar -->
            [4/6/2022 5:50 PM] Gonzalez, Damaris Marlene
<nav class="navbar" data-spy="affix" data-offset-top="700" > <div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<a class="navbar-brand" href="index.php" style="color:white; font-weight: bold;">Home</a>
</div>
<div class="collapse navbar-collapse" id="myNavbar">
<ul class="nav navbar-nav" >
<li><a href="profile.php" > Profile </a> </li>
<li><a href="recipes-admin.php" > Recipes </a> </li>
<li><a href="#" >Gallery </a> </li>
<li><a href="#" >About Us</a> </li>
<li><a href="#" >Contact Us</a></li>
</ul>
</ul>
</div> <div>
</nav>

[4/6/2022 5:51 PM] Gonzalez, Damaris Marlene

.navbar {
background-color: #FDAC53;
color: white;
}



.navbar a {
float: left;
display: block;
color: #f2f2f2;
text-align: center;
padding: 14px;
text-decoration: none;
font-size: 20px;
}



.navbar-toggle .icon-bar{
background-color: #fff;
}
a:hover {
background-color: #00758f;
}



.navbar-nav > li >a:hover {
background-color: #00758f;
}




.affix {
top: 0;
width: 100%;
z-index: 9999 !important;
}



.affix + #fakeimg {
padding-top: 100px;
}

        <!-- End of NavBar -->
        <!--add burger-->
<?php
print $pageContent;
?>
<hr>
    <footer class="container-fluid">
                <!-- sign in -->
            <a class="button" href="login.php">Sign In</a>
    <p> Developed by Yordin Kirk, Semhar Bire, Damaris Gonzalez</p>
    <p>© BHC Web Dev 2022</p>
    <a href="https://www.youtube.com" target="_blank"><i class="fa-brands fa-youtube"></i></a>
    <a href="https://www.instagram.com" target="_blank"><i class="fa-brands fa-instagram-square"></i></a>
    <a href="https://www.pinterest.com" target="_blank"><i class="fa-brands fa-pinterest"></i></a>
    <a href="https://www.facebook.com" target="_blank"><i class="fa-brands fa-facebook-square"></i></a>
    </footer>
</body>
</html>