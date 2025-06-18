<?php

include('config.php');
$id=$_GET['id'];

$sql="DELETE FROM add_user_police WHERE id=$id";

$res=mysqli_query($conn,$sql);

if($res==true)
{
    $_SESSION['delete']="<div class='success'>User Deleted Successfully</div>";
    header('location:'.SITEURL.'manage_user.php');
}
else
{
    $_SESSION['delete']="<div class='error'>Failed to Delete User. Try Again Later</div>";
    header('location:'.SITEURL.'manage_user.php');
}

?>