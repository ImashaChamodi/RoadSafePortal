<?php include('nav.php');?>
<html>
    <head>
        <link rel="stylesheet" href="manageuser.css">
    </head>
<div class="main-content">
    <div class="wapper">
        <h1>Add Police</h1>

        <br><br>
        <?php
if(isset($_SESSION['add']))
{
    echo $_SESSION['add'];
    unset($_SESSION['add']);
}
        ?>
        <form method="post" action="" name="signin-form">

        <table class="tbl-30">
            <tr>
                <td>Full Name:</td>
                <td><input type="text" name="full_name" placeholder="fullname"></td>
            </tr>
            <tr>
                <td>District:</td>
                <td><input type="text" name="district" placeholder="district"></td>
            </tr>
            <tr>
                <td>Username:</td>
                <td><input type="text" name="username" placeholder="username"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password" placeholder="password"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="submit" value="Add user" class="btn-secondary">
                </td>
            </tr>
        </table>
</form>
    </div>
</div>
<?php include"footer.php" ?>

<?php

if(isset($_POST['submit']))
{
$full_name=$_POST['full_name'];
$district=$_POST['district'];
$username=$_POST['username'];
$password=$_POST['password'];

$sql="INSERT INTO add_user_police SET full_name='$full_name',district='$district',username='$username',password='$password' ";


$res=mysqli_query($conn,$sql) or die(mysqli_error($conn));

if($res==TRUE)
{
    $_SESSION['add']="User Added Successfully";

    header("location:".SITEURL.'manage_user.php');
}else
{
    $_SESSION['add']="Failed to add";

    header("location:".SITEURL.'userpolice.php');
}
}
?>
</html>