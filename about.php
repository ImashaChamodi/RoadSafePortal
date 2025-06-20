<?php
include('nav.php');
?>
<!DOCTYPE html>
<html>
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
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
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
.image-view
{
width: 100%;
height: 200px;
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

<div class="about-section">
  <h1>About Us Page</h1>
  <div class="image_view">
    <img src="quote.png">
  </div>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="icon3.png" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Chanudi Dinethma</h2>
        
        <p>creating page.</p>
        <p>chanudinethma@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="icon1.png" alt="Mike" style="width:100%">
      <div class="container">
        <h2>ALB Mahiman</h2>
        
        <p>Designing page.</p>
        <p>albmahiman@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="icon4.png" alt="John" style="width:100%">
      <div class="container">
        <h2>DM Chamodi Imasha</h2>
        
        <p>Creating pages.</p>
        <p>dmchamodiimasha@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="column">
    <div class="card">
      <img src="icon2.png" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Chamidu Maduwantha</h2>
        
        <p>Designing pages.</p>
        <p>chamindumaduwantha@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="icon6.png" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Shanuka Thasmina</h2>
       
        <p>Designing pages.</p>
        <p>shanukathasmina@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="icon5.png" alt="John" style="width:100%">
      <div class="container">
        <h2>CT Ramanayake</h2>
       
        <p>Designing page.</p>
        <p>charithmaramanayake@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>

</body>
</html>
