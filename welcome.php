<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>

<<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<title>Travel website</title>
<title>carousel</title>
<style>
body {
font-family: Arial, sans-serif;
margin: 0;
padding: 0;
}

header {
background-color: #333;
color: white;
padding: 10px;
text-align: center;
}

nav {
background-color: #f4f4f4;
padding: 10px;
display: flex;
justify-content: space-around;
}

section {
padding: 20px;
}

.featured-destinations {
display: flex;
flex-wrap: wrap;
justify-content: space-around;
}

.destination {
width: 30%;
margin: 10px;
border: 1px solid #ddd;
padding: 10px;
text-align: center;
}

footer {
background-color: #333;
color: white;
padding: 10px;
text-align: center;
position: fixed;
bottom: 0;
width: 100%;
}
body {
font-family: 'Helvetica Neue', sans-serif;
background-color: #b3d4f5;
margin: 0;
padding: 0;
}

header {
background-color:coral;
color: #fff;
text-align: center;
padding: 1em;
font-family:fantasy;
}

section {
padding: 40px;
text-align:center;
font-family:'Helvetica Neue', sans-serif;

}

h1, h2 {
color:antiquewhite
}

p {
color: #310bf1;
}

footer {
background-color: #343a40;
color: #fff;
text-align: center;
padding: 1em;


}


</style>
</head>
<body>
<header>
<h1>Tourist Website</h1>
<pre><img src="https://www.tourmyindia.com/blog//wp-content/uploads/2021/04/Best-Weekend-Getaways-from-Gurgaon.jpg" height="95"> <img src="https://images.thrillophilia.com/image/upload/s--oAt1mryM--/c_fill,f_auto,fl_strip_profile,h_775,q_auto,w_1600/v1/images/photos/000/052/793/original/1556370242_shutterstock_780181144.jpg.jpg?1556370242" height="95"> <img src="https://img.freepik.com/free-vector/detailed-travel-logo_23-2148616554.jpg" height=100> <img src="https://www.incredibleindia.org/content/dam/incredible-india-v2/images/home/SOU_new.jpg/_jcr_content/renditions/cq5dam.web.1800.737.jpeg" height ="95"> <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS66LRjrbYdPbx8VEVXVRNwVS3aQ0m8sedsXg&usqp=CAU" height="95">
</header>

<nav>
<a href="#">Home</a>
<a href="#">Hotels Nearby</a>
<a href="#">Tourist Destination</a>
<a href="#">Upcoming Trips</a>
<a href="C:\Users\Manaswi\Downloads\Untitled-1.html">Health and Safety measures </a>
</nav>
<hr>
<p>Explore the worlds amazing destination with us</p>
<hr>

<section>
<h2>Featured Destinations</h2>
<div class="featured-destinations">
<div class="destination">
<h2>Jaipur</h2>
<a href="https://www.tripadvisor.com/LocationPhotoDirectLink-g304555-d11802415-i232607293-Heritage_Dream_Holidays_Jaipur_Cab_Service-Jaipur_Jaipur_District_Rajas.html"> <img src="https://media-cdn.tripadvisor.com/media/photo-s/0d/dd/4e/3d/jaipur-sight-seen-pictures.jpg" target ="_main" height=150 alt="Paris Image"></a>
<p>Description of Jaipur...</p>
<a href="https://en.wikipedia.org/wiki/Jaipur" target="_main">Learn More</a>
</div>
<!-- Add more destinations as needed -->
</div>
</section>

<footer>
<p>&copy; 2023 Tourist Website</p>
</footer>
<div class="container">
<div id="viitcarousel" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
<li data-target="viitcarousel1" data-slide-to="0" class="active"></li>
<li data-target="viitcarousel2" data-slide-to="1"></li>
<li data-target="viitcarousel1" data-slide-to="2" ></li>
</ol>
<div class="carousel-inner">
<div class="item active">
<img src="https://images.pexels.com/photos/12496258/pexels-photo-12496258.jpeg?auto=compress&cs=tinysrgb&w=800" style="width: 100%">


</div>

<div class="item">
<img src="https://images.pexels.com/photos/984868/pexels-photo-984868.jpeg?auto=compress&cs=tinysrgb&w=800" style="width:100%">


</div>
<div class="item">
<img src="https://images.pexels.com/photos/2563681/pexels-photo-2563681.jpeg?auto=compress&cs=tinysrgb&w=800" style="width: 100%">

</div>
</div>
<table border="0" align="centre">
<tr>
<th><img src="https://upload.wikimedia.org/wikipedia/commons/0/09/India_Gate_in_New_Delhi_03-2016.jpg" height="170" width="170" style="border-radius:100%"></th>
<TH><img src="https://static.toiimg.com/thumb/msid-97781598,width-1280,resizemode-4/97781598.jpg" height="170" width="170" style="border-radius:100%"></tH>
<th><img src="https://www.godigit.com/content/dam/godigit/directportal/en/contenthm/mumbai-maharashtra.jpg" height="170" width="170" style="border-radius:100%"></th>"
<br>
<th><img src="https://upload.wikimedia.org/wikipedia/commons/b/b7/7th_-_9th_century_Hindu_and_Jain_temples%2C_Pattadakal_monuments_Karnataka_5.jpg" height="170" width="170" style="border-radius:100%"></th>"
<th><img src="https://images.adsttc.com/media/images/5bd9/b552/f197/cc45/e900/00d6/medium_jpg/43914221_363966157680449_595145553531016098_n.jpg?1540994380" height="170" width="170" style="border-radius:100%"></th>"


</tr>
<tr>
<td><PRE> <button onclick="myFunction()">DELHI</button></PRE></td>
<td><PRE> <button onclick="myFunction()">RAJASTHAN</button></PRE></td>
<td><PRE> <button onclick="myFunction()">MAHARASHTRA</button></PRE></td>
<td><PRE> <button onclick="myFunction()">KARNATAKA</button></PRE></td>
<td><PRE> <button onclick="myFunction()">GUJRAT</button><a href="guj.html"">click</a></PRE></td>
</tr>
</tr>
</tr>
</table>
</body>
</html>