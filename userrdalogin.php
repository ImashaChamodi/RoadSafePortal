<?php
include 'config.php';
?>
<!DOCTYPE html>
<head>
<link rel="stylesheet" href="reg.css">
</head>
<body>
<form method="post" action="" name="signin-form">
<div class="container center-div shadow ">
		<div class="heading text-center mb-5 text-uppercase text-white"> RDA LOGIN PAGE </div>
  <?php
if(isset($_SESSION['login']))
{
    echo $_SESSION['login'];
    unset ($_SESSION['login']);
}

  ?>
  <br><br>
        <div class="form-element">
    <label>Username</label>
    <input type="text" name="username" placeholder="Enter Username" pattern="[a-zA-Z0-9]+" required />
  </div>
  <div class="form-element">
    <label>Password</label>
    <input type="password" name="password" placeholder="Enter password" required />
  </div>
  <input type="submit" name="submit" value="login" class="btn-primary">
</div>

</form>
</body>
<?php
    
    
    if (isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $sql="SELECT * FROM user_rda WHERE username='$username' AND password='$password' ";

        $res=mysqli_query($conn,$sql);
        $count=mysqli_num_rows($res);

        if($count==1)
        {
            $_SESSION['login']="<div class='success'>Login Successfully</div>";
            header('location:'.SITEURL.'reportincident.php');
        }
    }
?>