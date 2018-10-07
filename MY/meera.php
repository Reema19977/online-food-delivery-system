<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {
    box-sizing: border-box;
}

body {

background-image:url("pizza2.jpg");
background-repeat: no-repeat;
background-size: 150%;
}

.navbar {
    }

.navbar a {
    float: left;
    font-size: 20px;
    color: white;
    text-align: center;
    padding: 16px 16px;
    text-decoration: none;
}

.dropdown {
    float: right;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 30px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font: inherit;
    margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: skyblue;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    width: 100%;
    left: 0;
    box-shadow: 0px 0px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content .header {
    background: red;
    padding: 16px;
    color: white;
}

.dropdown:hover .dropdown-content {
    display: block;
}
/* Create three equal columns that floats next to each other */
.column {
    float: right;
    width: 33.33%;
    padding: 0.1px;
    background-color: none;
    height: 0px;
}

.column a {
    float: none;
    color: red;
    padding: 0px;
    text-decoration: none;
    display: block;
    text-align: right;
}

.column a:hover {
    background-color: #ddd;
}

/* Clear floats after the columns */

}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .column {
        width: 10%;
        height: auto;
    }
}
     h1 {
    color: white;
    text-shadow: 4px 4px 8px #0000ff;
}
   ol {
    text-shadow: 0 0 3px #C70039, 0 0 5px #C70039;
} 
    h5 {
    color: blue;
    text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
}
</style>
</head>
<body>

<div class="navbar">
  <a href="meera.php">Home</a>
  <a href="reema.php">Menus</a>
    <a href="Events.php">Events/Treat</a>
   <a href="Reserv.php">Reservation</a>
<a href="Contact.php">Contact Us</a>

    
  <div class="dropdown">
    <button class="dropbtn">Registration
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      
         
      
        <div class="column">
            
             <a href="register.php">Register</a> 
              
            <a href="login.php">login</a>
        

        <a href="about.php">AboutUs</a>
          
        
     
    </div>
  </div> 
</div></br>
</br>
</br>

    <h1 style="text-align:center; font-style:italic; color:blue;font-size: 800%; margin-top:2px;"> Welcome My Khana Khajana.com</h1>
<ol><font size="6">
  <h1 style="text-align:center; font-style:italic; color:red;">Book for your Dish:)</h1>
  <div class="w3-content w3-section" style="max-width:1000px">
  <img class="mySlides" src="mypizza.jpg" style="width:95%">
  <img class="mySlides" src="pizza1.jpg" style="width:100%">
  <img class="mySlides" src="pizza2.jpg" style="width:100%">
</div>
<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

  <li></li>
  
</font></ol><font size="6"> 
<h5><font face="comic sans ms">...</font></h5><font face="comic sans ms">

<div style="padding:12px">
  <h3></h3>
  <p></p>
  <p></p>
</div>

</body>
</html>