<?php include('nav.php');?>
<html>
    <head>
        <link rel="stylesheet" href="manageuser.css">
    </head>
<div class="main-content">
    <div class="wrapper">
        <h1>Manage User RDA</h1>
        <br>
        <?php
if(isset($_SESSION['add']))
{
    echo $_SESSION['add'];
    unset($_SESSION['add']);
}
if(isset($_SESSION['delete']))
{
    echo $_SESSION['delete'];
    unset ($_SESSION['delete']);
}
if(isset($_SESSION['update']))
{
    echo $_SESSION['update'];
    unset ($_SESSION['update']);
}
        ?>
        <br><br><br>
        <a href="userrda.php" class="btn-primary">Add User</a>
        <br><br>
        <table class="tbl-full">
            <tr>
            <th>S.N.</th>
            <th>Full Name</th>
            <th>District</th>
            <th>Username</th>
            <th>Action</th>
            </tr>

            <?php
$sql="SELECT * FROM user_rda";

$res=mysqli_query($conn,$sql);

if($res==TRUE)
{
    $count=mysqli_num_rows($res);


    $sn=1;
    if($count>0)
    {
        while($rows=mysqli_fetch_assoc($res))
        {
            $id=$rows['id'];
            $full_name=$rows['full_name'];
            $district=$rows['district'];
            $username=$rows['username'];
            

            ?>

            <tr>
                <td><?php echo $sn++;?></td>
                <td><?php echo $full_name; ?></td>
                <td><?php echo $district;?></td>
                <td><?php  echo  $username;?></td>
                <td>
                    <a href="<?php echo SITEURL;?>updaterda.php?id=<?php echo $id;?>" class="btn-secondary">Update</a>
                <a href="<?php echo SITEURL; ?>deleterda.php?id=<?php echo $id;?>" class="btn-danger">Delete</a>
                </td>
            </tr>
            <?php
        }
    }else
    {

    }
}
            ?>
            
        </table>
    </div>
</div>
<?php include('footer.php'); ?>
</html>