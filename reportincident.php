<?php
include('config.php');
if(!isset($_SESSION['user_insurance_id']))
{
    header('userinsurancelogin.php');
}
if(isset($_SESSION['login']))
{
    echo $_SESSION['login'];
    unset ($_SESSION['login']);
}

$userid=$_SESSION['user_insurance_id'];


$accident_sql = "SELECT * FROM user_insurance WHERE id=? ";
    $accident_stmt = $conn->prepare($accident_sql); 
    $accident_stmt->bind_param("i",$userid);
    $accident_stmt->execute();
    $accident_result = $accident_stmt->get_result();
    $accident_rows = $accident_result->fetch_assoc();


    $usercompany=$accident_rows['company_name'];
    $district=$accident_rows['district'];

    //echo $district;
    
   $_SESSION['company']=$usercompany;
   $_SESSION['district']=$district;
   
  ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="report.css">
    <link rel="stylesheet" href="main.css">
    <title>Document</title>
  </head>
  <body>
    <div class="container">
<div id="load_data">


</div>
    </div>


 
  </body>
  </html>
  <script>
    

    $(document).ready(function(){
     
     var limit = 5;
     var start = 0;
     var action = 'inactive';
     function load_country_data(limit, start)
     {
      $.ajax({
       url:"fetch.php",
       method:"POST",
       data:{limit:limit, start:start},
       cache:false,
       success:function(data)
       {
        $('#load_data').append(data);
        if(data == '')
        {
         $('#load_data_message').html("<h1 class='nodata_text'>No Data Found</h1>");
         action = 'active';
        }
        else
        {
         $('#load_data_message').html("<h1>Loading</h1>");
         action = "inactive";
        }
       }
      });
     }
    
     if(action == 'inactive')
     {
      action = 'active';
      load_country_data(limit, start);
     }
     $(window).scroll(function(){
      if($(window).scrollTop() + $(window).height() > $("#load_data").height() && action == 'inactive')
      {
       action = 'active';
       start = start + limit;
       setTimeout(function(){
        load_country_data(limit, start);
       }, 1000);
      }
     });
     
    });
      </script>