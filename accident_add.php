
<?php 
//include('config.php');
include('nav.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="add.css">
    <link rel="stylesheet" href="main.css">
    
</head>
<body>
    <br><br>
<form action="add_accident.php" method="POST" enctype="multipart/form-data" >

<div class="main-content">
      <label>Description</label>
      
      <textarea id="message" placeholder="say something about......." name="description"></textarea>
</div>
<div class="main_content">
    <label>District</label>
    <input type="text" name="district">
<br><br>
    <div class="image-container">
<div class="image-cn" id="image-cn1">
+
</div>
<input type="file" hidden name="image1" id="image1">
    </div>
  <br><br>
    <div class="image-container">
    <div class="image-cn" id="image-cn2">
+
</div>
<input type="file" hidden name="image2" id="image2">
    </div>
<br><br>
<div class="image-container">
    <div class="image-cn" id="image-cn3">
+
</div>
<input type="file" hidden name="image3" id="image3">
</div>
    <br><br>
    <input type="submit" name="submit" value="Submit" class="submitbutton">
</form>
    <script src="add.js"></script>
</body>
</html>