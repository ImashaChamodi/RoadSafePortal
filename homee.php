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
  background:mediumaquamarine;
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
    <h2>Social effect of car accidents</h2>
    <section>
        <img src="car.png" style="width: 350px;" class="myslide">
        
        

    </section>
   
    
    <p>The social implications of road traffic accidents include the victims' loss of production, the expense of the legal system, the cost of pain and suffering, and the victim's and their family's loss of quality of life. Productivity loss accounts for a considerable share of total social expenses.</p>
    
    <section>
        <img src="car1.png" style="width:350px ;">
<br>
        <br>
        <img src="car2.png" style="width: 350px;">
    </section>
    <h2>Physical effect of car accidents</h2>
    <p>Brain and head trauma, such as traumatic brain injury, neck injuries, such as whiplash, neck strains, or disk damage, and back or spine injuries, such as sprains, strains, fractures, or disk injuries, are all common physical injuries connected with car accidents.

Permanent disabilities, such as amputations, paralysis, or TBIs that cause mental impairment, are frequently associated with long-term repercussions, but soft tissue injuries that affect the tissue surrounding and linking tendons, muscles, and ligaments are also usually long-term.

This is why evaluating the amount of an injury and the possibility of future pain and suffering is such a critical part of the recovery process after an auto accident.</p><br><br>
<p>
Road accidents, in Sri Lanka and abroad, are a serious problem that has a direct impact on public health and well-being by causing numerous impairments and a significant loss of life each year. As a result, road accidents have become a huge social issue that must be addressed.

Every citizen and all involved parties should be extremely worried. Sri Lankan road accidents

From the perspective of the transportation sector, they have also become a big issue.

significantly impacting the nation's long-term growth and creating massive damage

The economy has suffered losses. The cost of traffic accidents is estimated to be in the billions of dollars.

Rs 10,000 million each year, or around 1% of Sri Lanka's GDP (Kumarage, 2008).

2003).

</p>
  </div>
  <div class="main">
    <h2>Road Traffic Accident</h2>
    
    <section>
        <img src="acci.png" style="width:100%; height: 400px; " class="myslides">
        <img src="car3.png" style="width:100%; height: 400px; " class="myslides">
        <img src="car4.png" style="width:100%; height: 400px; " class="myslides">
        
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
    
    <p>Road Traffic Accident....</p>
    <p>Road traffic accidents are a huge public health issue that necessitates comprehensive prevention, as these preventable injuries are already overburdened.

Healthcare systems are overburdened. Road

The tenth leading cause of death is automobile accidents.

cause of all deaths worldwide Based

according to the Census and Statistics report,

By 2020, traffic accidents will be one of the top causes of death.

Sri Lankans are dying. According to the report,

The most recent WHO data was published in 2018.

Sri Lankans killed in motor accidents

Sri Lanka received 3,590 votes, or 2.82 percent.

total death toll The age-appropriate

16.37 per 100,000 people die.

Sri Lanka is ranked 96th in the world by population.

world. Sri Lanka has the most dangerous roads.

death rate among its near neighbors

neighboring countries in South Asia.In Sri Lanka, road traffic injuries and deaths have reached pandemic proportions. The number of individuals killed and injured in traffic accidents in Sri Lanka in 2019 was 2839 and 24611, respectively. Pedestrians made up over a third of the total, while two- and three-wheelers made up nearly half. Low-income commuters and motorists account for 70% of all traffic accidents.
Motorcycle pedestrian collisions are said to be common, accounting for roughly 40% of pedestrian fatalities.</p>

<div id="piechart" class="piechart"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">

google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);


function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Type of vehicle', 'accidents per Day'],
  ['Cars',42.9],
  ['Motorcycle', 12.9],
  ['Bicycles', 4.3],
  ['Pickups', 20.9],
  ['Pedestrians', 19]
]);

  
  var options = {'title':'Percentage of Road Accident', 'width':700, 'height':500};

  
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>
    
    <h2>Accident</h2>
    
    
    <section>
        <img src="quote.png" style="width: 100%; height:400px;">
    </section>
    
    <p> Road accidents have become a distressing global occurrence, claiming hundreds of lives and causing significant property damage. As a result, many countries are eager to examine trends in road accidents and research the fundamental causes of such occurrences in order to reduce the number of unexpected and sad events as well as their effects. According to WHO estimates, 1.25 million people die each year as a result of road traffic accidents, while 20 to 50 million people get non-fatal injuries. As a result of their injuries, many people become disabled.
    According to statistics, the cost of road accidents accounts for up to 3% of the Gross Domestic Product in various nations (GDP). Road accidents occur in poor and middle-income countries with lower socioeconomic position in excess of 90% of the time.
Road injuries are already the tenth biggest cause of mortality worldwide, and are expected to rise to the seventh by 2030 unless action is made to reverse this catastrophic trend (WHO, 2015). These data highlight the importance of taking strong steps to reduce the number of traffic accidents. Road accidents are caused primarily by human mistake, thus it is critical to act responsibly in order to maintain a reliable and safe transportation system.
    </p>
  </div>
</div>

</body>
</html>
