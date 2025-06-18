<?php
include "config.php";
$userid = $_SESSION['user_police_id'];

$start = $_POST["start"];
$limit = $_POST["limit"];

$userdistrict = $_SESSION['district']; 

//"SELECT * FROM accident WHERE district=?";

    $accident_sql = "SELECT * FROM accident WHERE district=? ORDER BY a_id DESC LIMIT ?,?";
    $accident_stmt = $conn->prepare($accident_sql); 
    $accident_stmt->bind_param("sii",$userdistrict,$start,$limit);
    $accident_stmt->execute();
    $accident_result = $accident_stmt->get_result();
    while ($accident_rows = $accident_result->fetch_assoc()) {
        $aid = $accident_rows['a_id'];
        $accident_userid = $accident_rows['userid'];
        $img = $accident_rows['img1'];
        $description = $accident_rows['description'];
        $accident_district = $accident_rows['district'];
        $accident_date = $accident_rows['date'];
        $accident_time = $accident_rows['time'];

        $accident_user_sql = "SELECT * FROM users WHERE id=?";
        $accident_user_stmt = $conn->prepare($accident_user_sql);
        $accident_user_stmt->bind_param("i", $accident_userid);
        $accident_user_stmt->execute();
        $accident_user_result = $accident_user_stmt->get_result();
        $accident_user_rows = $accident_user_result->fetch_assoc();
        $accident_fname = $accident_user_rows['fname'];
        $accident_lname = $accident_user_rows['lname'];
        $accident_insuranceno = $accident_user_rows['insurance_no'];
        
            ?>  
            <div class="accident">
                <img src="<?php echo $img;?>" alt="" width="500px">
                <div class="accident_detail_container">
                    <h1 class="customer_name">Name : <?php echo $accident_fname, " ", $accident_lname;?></h1> <br>
                    <h1 class="districtname">District : <?php echo $accident_district;?></h1> <br>
                    <h1 class="description">Description : <?php echo $description;?></h1> <br>
                    
                    <h1 class="insuranceno">Insurance number : <?php echo $accident_insuranceno;?></h1> <br>
                    <div class="accident_button-container">
                    <a href="accident_view.php?id=<?php echo $aid;?>" class="viewbutton">View accident</a>

                    </div>
                    
                </div>
            </div>
            <?php
        }
    

?>