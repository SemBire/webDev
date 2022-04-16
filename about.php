<?php

$pageTitle = "Home";
$pageContent = NULL;

$pageContent .= <<<HERE
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
 
  text-align: center;
  background-color: #FDAC53;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>


<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="images/jordan.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Camacho, Jordan Maria</h2>
        <p class="title">Web Developer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>jordan@example.com</p>
        <p><button class="button"><a href="contactus.php" style="color:white" style= "text-decoration:none"
		>Contact</a></button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/demaris.png" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Gonzalez, Damaris Marlene</h2>
        <p class="title">Web Developer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>demaris@example.com</p>
        <p><button class="button"><a href="contactus.php" style="color:white" style= "text-decoration:none"

		>Contact</a></button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="images/semhar.png" alt="John" style="width:100%">
      <div class="container">
        <h2>Bire, Semhar</h2>
        <p class="title">Web Developer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>semhar@example.com</p>
        <p><button class="button"><a href="contactus.php" style="color:white" style= "text-decoration:none"
		>Contact</a></button></p>
      </div>
    </div>
  </div>
  
</div>
HERE;
include 'template.php'
?>
