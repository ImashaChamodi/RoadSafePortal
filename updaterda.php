<?php include('nav.php'); ?>
<html>
    <head>
        <link rel="stylesheet" href="manageuser.css">
    </head>
 <div class="main-content">
     <div class="wrapper">
         <h1>Update User</h1>
         <br><br>


         <?php
         $id=$_GET['id'];

         $sql="SELECT * FROM user_rda WHERE id=$id";

         $res=mysqli_query($conn,$sql);

         if($res==true)
         {
             $count=mysqli_num_rows($res);

             if($count==1)
             {
               //echo "User Available";
               $row=mysqli_fetch_assoc($res);

               $full_name=$row['full_name'];
               $district=$row['district'];
               $username=$row['username'];
             }else
             {
                 header('location:'.SITEURL.'manage_user_rda.php');
             }
         }
         ?>
         <form action="" method="POST">

         <table class="tbl-30">
             <tr>
                 <td>Full Name:</td>
                 <td>
                     <input type="text" name="full_name" value="<?php echo $full_name; ?>">
                 </td>
             </tr>

             <tr>
                 <td>District:</td>
                 <td>
                     <input type="text" name="district" value="<?php echo $district; ?>">
                 </td>
             </tr>

             <tr>
                 <td>Username:</td>
                 <td>
                     <input type="text" name="username" value="<?php echo $username; ?>">
                 </td>
             </tr>
             
             <tr>
                 <td colspan="2">
                     <input type="hidden" name="id" value="<?php echo $id;  ?>">
                     <input type="submit" name="submit" value="Update User" class="btn-secondary">
                 </td>
             </tr>
         </table>
         </form>
     </div>
 </div>
</html>
<?php
if(isset($_POST['submit']))
{
    //echo "Button Clicked";

    $id=$_POST['id'];
    $full_name=$_POST['full_name'];
    $username=$_POST['username'];

    $sql="UPDATE user_rda SET full_name='$full_name',username='$username' WHERE id=$id";

    $res=mysqli_query($conn,$sql);

if($res==true)
{
    $_SESSION['update']="<div class='success'>User Updated Successfully</div>";
    header('location:'.SITEURL.'manage_user_rda.php');
}
else
{
    $_SESSION['update']="<div class='error'>Failed to Update User. Try Again Later</div>";
    header('location:'.SITEURL.'manage_user_rda.php');
}
}

?>

<?php include('footer.php');?>