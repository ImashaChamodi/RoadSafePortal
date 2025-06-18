<?php
session_start();
if(!isset($_SESSION['user'])){
	header('location:adminlogin.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<?php  include 'links.php' ?> 
</head>
<body>

<div class="container center-div shadow">
		<div class="heading text-center text-uppercase text-white mb-5"> Admin Control Page 
			<?php echo $_SESSION['user']?>&nbsp;Technical channel : </div>
            <div>
                <p>
                In Sri Lanka, road traffic injuries and deaths have reached pandemic proportions. The number of people killed and injured in 2019

in traffic accidents in Sri Lanka

24611 and 2839, respectively Pedestrians made up nearly a third of the total.

Two- and three-wheelers account for more than half of the total. Seventy

Low-speed crashes account for % of all traffic accidents.

-income drivers and commuters

Motorcycle-pedestrian collisions are common.

high, according to reports, accounting for

Approximately 40% of pedestrian fatalities.<br>At railroad level crossings, about 10% of the fatalities occurred. Males and adults in the economically active age group of 25 to 64 years had a higher fatality rate per 100,000 population than females and people of other ages. Due to the loss of family breadwinners, this load is causing severe economic hardship. Because younger drivers' overall health and fitness is better than older drivers', younger drivers are more likely to survive, minimizing the number of deaths per loss of control crash.Humans, vehicles, and the road are all factors that influence road traffic accidents. The route design components, the dynamic nature of the drivers involved, and changes in environmental factors such as animal crossings and weather conditions have all been highlighted as major factors influencing the occurrence of road traffic accidents. Driving in the dark increased multivehicle crash driver fatalities when compared to driving in the daylight.
                </p>
            </div>
            <div>
                <img src="train.jpg" width="100%" height="300px">
            </div>
		<a href="logoutt.php" class="btn btn-danger">  Logout</a>
        <div><br>
    <a href="manage_user.php" class="btn btn-primary btn-group-lg form_btn">Create Accounts For Police</a>
    &nbsp;
    <a href="manage_user_rda.php" class="btn btn-primary btn-group-lg form_btn">Create Accounts For RDA</a>
    &nbsp;
    <a href="manage_user_insurance.php" class="btn btn-primary btn-group-lg form_btn">Create Accounts For Insurance</a>
</div>
</div>



</body>
</html>