<?php

include('nav.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
  background-color: burlywood;
}


.header {
  padding: 80px;
  text-align: center;
  background:forestgreen;
  color: white;
}

.header h1 {
  font-size: 40px;
}

.row {  
  display: flex;
  flex-wrap: wrap;
}


.side {
  flex: 30%;
  background-color:darkgrey;
  padding: 20px;
}


.main {   
  flex: 70%;
  background-color:lightslategray;
  padding: 20px;
}
.main h2{
    color:navy;
}
.footer{
    background-color: black;
color: white;
text-align: center;
}



</style>
</head>
<body>

<div class="header">
  <h1>Accident In Sri Lanka</h1>
  
</div>
<div class="footer">
Road Traffic
</div>

<div class="row">
  <div class="side">
    <h2>Bus–lorry collision injures more than fifteen, including schoolchildren in Mundel</h2>
    <section>
        <img src="my5.png" style="width: 350px;" class="myslide">
        
        

    </section>
   
    
    <p> A bus-lorry crash near Mundel on the Puttalam-Colombo major road earlier today injured more than fifteen people, including youngsters.

The injured were sent to the Chilaw Hospital, according to Mundel Police.

The accident happened when a school bus bringing students and parents back to Rajankana from a Colombo educational trip collided with a stopped lorry.</p>
    
    <section>
        <img src="my1.png" style="width:350px ;">
<br>
        <br>
        <img src="my.png" style="width: 350px;">
    </section>
    <h2>Three arrested for fatal accident in Kuliyapitiya</h2>
    <p>SSP Nihal Thalduwa, a police media spokesman, said three people have been arrested in connection with the death of a motorcyclist in a collision with a Defender in Kuliyapitiya's Kanadulla district.

According to the spokeswoman, a father and his 14-year-old son were also arrested.



On the Madampe Road in the Kanadulla district of Kuliyapitiya, a motorcyclist heading from Madampe to Kuliyapitiya was killed after his motorcycle crashed head-on with a Defender SUV traveling in the opposite direction.



The deceased was identified as a 39-year-old Kurudalpotha, Kuliyapitiya resident.



After the tragedy, a group of residents who were enraged by the disaster set fire to the Defender car.</p><br><br>
<p>
According to the Police spokesman, unofficial information has been obtained indicating the 14-year-old juvenile was driving the Defender vehicle at the time, and that this information will be validated by midday.
<section>
        <img src="bike.png" style="width:350px ;">
            </section>

</p>
  </div>
  <div class="main">
    <h2>Road Traffic Accident</h2>
    
    <section>
        <img src="my2.png" style="width:100%; height: 400px; " class="myslides">
        <img src="my3.png" style="width:100%; height: 400px; " class="myslides">
        <img src="my4.png" style="width:100%; height: 400px; " class="myslides">
        
    </section>
    <script>
// Automatic Slideshow - change image every 3 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("myslides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 3000);
}
</script>
    
    <p style="color:navy;">Sixty injured in private bus collision</p>
    <p>
    A collision involving two buses in Waskaduwa, Kalutara, has claimed the lives of six people and injured 52 others.

A head-on collision between two private buses on the Dambulla-Kurunegala main road in Panliyadda, Melsiripura yesterday afternoon injured sixty persons and sent them to the hospital.

The two bus drivers, a Buddhist monk, and a Bikkhuni, were among those injured. About 20 individuals were sent to Galewala, Kurunegala, Gokarella, and Dambulla hospitals with significant injuries incurred in the tragedy.

Both buses belonged to the same owner, according to investigations.

One of the buses involved in the accident was traveling from Embilipitiya to Jaffna, while the other was going from Vavuniya to Embilipitiya.
Police believe the two buses were traveling at a high rate of speed and collided while attempting to overtake another vehicle. The passengers, on the other hand, claimed that both drivers, who were friends, were speeding and trying to overtake each other in a race when the accident occurred.

Some passengers claimed that the two drivers had a tendency of often flashing their lights at each other when they crossed paths on the road.



Residents in the area said they heard a big crash and hurried outside to see the two buses collide.
</p>


    
    <h2>Five Lankans killed in Saudi road accident</h2>
    
    
    <section>
        <img src="my8.png" style="width: 100%; height:400px;">
    </section>
    
    <p> 
    At least five Sri Lankans were among the 20 bus passengers killed in a traffic accident late Friday night in Saudi Arabia. The victims were killed when the bus they were riding in collided with an incoming truck and erupted into flames near Riyadh, Saudi Arabia.

Marleen Mohamed, Sri Lanka's ambassador to Saudi Arabia, told the Sunday Times that thorough identification was impossible since the bodies were burned beyond recognition, despite the fact that all of the victims were men.



"It appears that the victims were confined for several minutes inside the burning vehicle." Mr. Marleen explained that the intense fire prohibited rescuers from getting close to the ill-fated bus.
    </p>

    <h2>Six dead, 52 injured in SLTB-private bus collision</h2>
    <p>
    A collision involving two buses in Waskaduwa, Kalutara, has claimed the lives of six people and injured 52 others.

At around 4.15 a.m. this morning, a Sri Lanka Transport Board (SLTB) bus en way to Colombo from Elpitiya collided with a private bus traveling to Galle from Colombo (04).

According to a police media spokesperson, the accident killed three ladies and three males.

According to reports, 43 men, 8 women, and a little infant were hurt.

They've been admitted to Nagoda Hospital for additional treatment.
    </p>
  </div>
</div>

</body>
</html>
