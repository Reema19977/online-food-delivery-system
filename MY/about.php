<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

.navbar {
    }

.navbar a {
    float: left;
    font-size: 20px;
    color: black;
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
    color: black;
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
    color: black;
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
        

        <a href="Contact.php">AboutUs</a>
          
        
     
    </div>
  </div> 
</div></br>
</br>
</br>

    <h1 style="text-align:center; color:red;font-size: 400%; margin-top:2px;"> About Us</h1>
<ol><font size="6">
  <h1 style="text-align:center; font-style:italic; color:brown; font-size: 100%;">Khana Khajan started off in this year, an IT firm that specializes in providing e-commerce, web solutions & internet advertising solutions (SEO) as a platform for local SMEs to market and to sell their products & services.
    This is a website which provide e-commerce ,web with highly user demand oriented.This website provide a way to order your food item from a college canteen food shop.All the food food delivering shop can use this website inorder to deliver their food item without providing their menu in a piece of paper and also they can book the future events like any birthday treat..

</h1>
  <div class="w3-content w3-section" style="max-width:1000px">
    <h4 style="text-align:center; font-style:italic; color:black;">Event/Treat</h4>
    <h6 style="text-align:left; color:brown;">Here you can order an event or a treat like birthday celebration or any other small party before one day</h6>
    <h4 style="text-align:center; font-style:italic; color:black; font-size: 100%;">Reservation </h4>
    <h6 style="text-align:center; font-style:italic; color:brown; font-size: 100%;">Here you can reserv for more then 10 person's food order before one days which is to be deliver to u...</h6>
    <h6 style="text-align:left; color:brown;">Address
    </br>
  CET Bhubaneswar,
</br>Girls Hostel..</h6>
    <h6 style="text-align:left; color:brown;">Ghatikia,Bhubaneswar</h6>
  
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