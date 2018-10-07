<!DOCTYPE html>
<html>
<head>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style>
* {box-sizing: border-box;}

body {

background-image:url("http://www.bonieren.at/upload/palermo_demos_08.jpg");
background-repeat: no-repeat;
}

/* Set height of body and the document to 100% */
body, html {
    height: 100%;
    margin: 0;
    font-family: Arial;
}

/* Style tab links */
.tablink {
    background-color: #555;
    color: white;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    font-size: 17px;
    width: 25%;
}

.tablink:hover {
    background-color: #777;
}

/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
    color: white;
    display: none;
    padding: 100px 20px;
    height: 100%;
}

#Home {background-color: ;}
#IT BOOK BANK {background-color: green;}
#1st Semester {background-color: blue;}
#About {background-color: orange;}

</style>


</head>
<body>

</div>

<button class="tablink" onclick="openPage('Home', this, 'pink ')">Home</button>
<button class="tablink" onclick="openPage('IT BOOK BANK', this, 'green')" id="defaultOpen">IT BOOK BANK</button>
<button class="tablink" onclick="openPage('2nd Semester', this, 'red')">2nd SEMESTER</button>
<header role="banner">
	
<header role="banner">
	
<header role="banner">
	<h1><br></br> <br></br>Search Your Subject. </h1>
</header>
<div id="Home" class="tabcontent">
  <h3>Home</h3>
  <p>..</p>
</div>
<br></br>


<div id="IT BOOK BANK" class="tabcontent">
  <h3>IT BOOK BANK</h3>
  <p></p> 
</div>



<div id="2nd Semester" class="tabcontent">
  <h3>2ND Semester</h3>
  <p>.</p>
</div>

<div id="About" class="tabcontent">
  <h3>About</h3>
  <p></p>
</div>
<style>
  div{
    display: block;
    float:left;
    margin-right:100px;
}

div > img{
   height:100px;
    width:100px;
}

p{
    text-align:center;
}
</style>
</head>

<body>

<div class="container">
<a href="_blank">
 <img width="200" src="https://books.google.co.in/books/content?id=lSKXCCM6fPkC&amp;printsec=frontcover&amp;img=1&amp;zoom=1&amp;h=160&amp;stbn=1" style="height: 200px;">
</a>
</div>
<br>
<div class="container">
<a href="_blank">
<img class="irc_mi" src="https://ulektz.s3.amazonaws.com/Content/Publisher/7958/training_material/553/n0o0iX.png" alt="Image result for ENVIRONMENTAL STUDIES &amp; HEALTH CARE ENGINEERING books" onload="typeof google==='object'&amp;&amp;google.aft&amp;&amp;google.aft(this)" width="200" height="200" style="margin-top: 0px;">
</a>
</div>
<br>
<div class="container">
<a href="_blank">
<<img class="irc_mi" src="http://www.eagleprakashan.com/uploads/file/APP-MATH-II_a5ks5.jpg" onload="typeof google==='object'&amp;&amp;google.aft&amp;&amp;google.aft(this)" width="200" height="200" style="margin-top: 0px;" alt="Image result for APPLIED MATHEMATICS-II books">
</a>
</div>
<div class="container">
<a href="_blank">
 <img class="irc_mi" src="https://www.schandpublishing.com/uploads/bookimages/schand-books/9788121927291.jpg" alt="Image result for ELECTRICAL &amp; ELECTRONICS ENGINEERING books" onload="typeof google==='object'&amp;&amp;google.aft&amp;&amp;google.aft(this)" width="200" height="200" style="margin-top: 0px;">
</a>
</div>
<div class="container">
<a href="_blank">
 <<img width="200" src="https://books.google.co.in/books/content?id=q0mb4Kjz-ioC&amp;printsec=frontcover&amp;img=1&amp;zoom=1&amp;h=160&amp;stbn=1" style="height: 200px;">
 </a>
 </div>


<script>
function openPage(pageName,elmnt,color) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
    }
    document.getElementById(pageName).style.display = "block";
    elmnt.style.backgroundColor = color;

}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
     
</body>
</html>