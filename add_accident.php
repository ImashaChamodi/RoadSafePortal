<?php
include('config.php');




$userid=$_SESSION['login_sess'];

if(!isset($_SESSION['login_sess'])){
  header("location:login.php");
}

if(isset($_POST['submit'])){

$fileName5 = $_FILES['image1']['name']; 
$fileTmpName5 = $_FILES['image1']['tmp_name']; 

$fileExt5 = explode('.',$fileName5);
$fileActualExt5 = strtolower(end($fileExt5));

$fileNameNew5 = uniqid('',true).".".$fileActualExt5;
$fileDestination5 = 'addimages/'.$fileNameNew5; 
move_uploaded_file($fileTmpName5, $fileDestination5);

/*-----------------------------------*/
$fileName4 = $_FILES['image2']['name']; 
$fileTmpName4 = $_FILES['image2']['tmp_name']; 

$fileExt4 = explode('.',$fileName4);
$fileActualExt4 = strtolower(end($fileExt4));

$fileNameNew4 = uniqid('',true).".".$fileActualExt4;
$fileDestination4 = 'addimages/'.$fileNameNew4; 
move_uploaded_file($fileTmpName4, $fileDestination4);
/*------------------------------------------*/

$fileName3 = $_FILES['image3']['name']; 
$fileTmpName3 = $_FILES['image3']['tmp_name']; 

$fileExt3 = explode('.',$fileName3);
$fileActualExt3 = strtolower(end($fileExt3));

$fileNameNew3 = uniqid('',true).".".$fileActualExt3;
$fileDestination3 = 'addimages/'.$fileNameNew3; 
move_uploaded_file($fileTmpName3, $fileDestination3);


$date = date('Y-M-d');
date_default_timezone_set("Asia/Colombo");
$time = date('H:i a');


if(isset($_POST['description'])){
  $description = $_POST['description'];
  
}else{
$description="No description";
}

//$description="accident";
$district = $_POST['district'];
//$district="colombo";
$stmt = $conn->prepare("INSERT INTO accident(userid,img1,img2,img3,description,district,date,time) VALUES(?,?,?,?,?,?,?,?)");
$stmt->bind_param("isssssss", $userid,$fileDestination5,$fileDestination4,$fileDestination3,$description,$district,$date,$time);
$stmt->execute();
$stmt->store_result();
if($conn == true){
  echo "done";
    ?>
    <script>
        window.location.href = "accident_add.php";
    </script>
    <?php
}
else{

}


}

?>