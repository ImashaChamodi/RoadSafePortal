<?php
include ('config.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="main.css">
<style>


.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: green;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
.footer{
background-color: blue;
color: white;
text-align: center;
}
</style>
</head>
<body>

<div class="navbar">
  <a href="homee.php"><i class="fa fa-fw fa-home"></i>Home</a>
  <a href="news.php">News</a>
  <a href="#"><i class="fas fa-calendar-week"></i>Latest</a> 
  <a href="message.php"><i class="fa fa-fw fa-envelope"></i> Contact</a>
  <div class="dropdown">
    <button class="dropbtn">Dropdown 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="login.php">Driver</a>
      <a href="userpolicelogin.php">Police</a>
      <a href="userrdalogin.php">RDA</a>
      <a href="userinsurancelogin.php">Insurance</a>
    </div>
  </div> 
  <a href="adminlogin.php"><i class="fa fa-fw fa-user"></i>Admin Login</a>
  <a href="about.php"><i class="fa fa-fw fa-envelope"></i>About</a>
</div>



</body>
</html>
<?php
if(!(isset($_SESSION['login_sess']))){
  header("location:login.php");
}
?>