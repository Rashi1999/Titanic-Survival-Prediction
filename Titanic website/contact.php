<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>


.navbar {
  overflow: hidden;
  background-color: #333;

}

.navbar a {
  float: left;
  font-size: 22px;
  color: white;
  text-align: center;
  padding: 25px 25px;
  text-decoration: none;
  font-family: harrington;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 20px;  
  border: none;
  outline: none;
  color: white;
  padding: 25px 25px;
  background-color: inherit;
  font-family:harrington;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
font-size: 15px; 
  color: black;
  padding: 16px 16px;
  text-decoration: none;
  display: block;
font-family:inherit; 
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
r1{
 display:inline-block;
border-radius: 5px;
  background:rgba(244,236,228, 1);
  width: 200px;
padding: 30px;
margin-bottom: 30px;
margin-left:70px;

margin-right:80px;
}
r2{
 display:inline-block;
border-radius: 5px;
  background:rgba(244,236,228,1);
  width: 200px;
padding: 30px;
margin-bottom: 30px;
margin-left:70px;
margin-right:100px;
}
l1{
 display:inline-block;
border-radius: 5px;
  background:rgba(244,236,228,1);
  width: 200px;
padding: 30px;
margin-bottom: 30px;
margin-left:70px;
margin-right:80px;
}
l2{
 display:inline-block;
border-radius: 5px;
  background:rgba(244,236,228,1);
  width: 200px;
padding: 30px;
margin-bottom: 30px;
margin-left:70px;
margin-right:80px;
}
</style>
</head>
<body style="background-image:url('c3.jpg'); background-repeat=no-repeat;">
<h2 style=" font-size:400%;color:black; text-align:center;font-family:harrington;"><b>The RMS Titanic</h2>
<div class="navbar">

  <a href="home.php">Home</a>
  <a href="fabt.php">About</a>
<div class="dropdown">
    <button class="dropbtn"><b>View</b> 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="viewgraph.php">Graphs</a>
      <a href="viewclass.php">Classifiers</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn"><b>Algorithm</b>
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="algo1.php">Problem Statement</a>
      <a href="algo2.php">Data Acquisition</a>
      <a href="algo3.php">Exploratory Data Analysis</a>
      <a href="algo4.php">Feature Engineeering</a>
      <a href="algo5.php">Modelling</a>
      <a href="algo6.php">Testing</a>
    </div>
  </div> 
<a href="contact.php">Contact</a>
</div>
<br>
<br>
<br>
<br>
<r1>
<hr><p style="font-size:20px; text-align: center;">Pooja Shah<hr>
<br>
7060196093<br><br>
pooja.shah@science.<br>christuniversity.in<br><br>
BCA<br><br>
19<br><br>
India<br><br>
<pre><a href=''><img src="twit.png" width ="45px" height="45px"></a>     <a href=''><img src="face.jpg" width ="45px" height="45px"s></a></pre>
</r1>
<r2>
<hr><p style="font-size:20px; text-align: center;">Rashi Khandelwal<hr>
<br>
7060196093<br><br>
rashi.khandelwal@science.<br>christuniversity.in<br><br>
BCA<br><br>
20<br><br>
India<br><br>
<pre><a href=''><img src="twit.png" width ="45px" height="45px"></a>     <a href=''><img src="face.jpg" width ="45px" height="45px"s></a></pre>
</r2>
<l1>
<hr><p style="font-size:20px; text-align: center;">Eugen Becker<hr>
<br>
7060196093<br><br>
e.becker1991@<br>yahoo.de<br><br>
B Tech<br><br>
26<br><br>
Germany<br><br>
<pre><a href=''><img src="twit.png" width ="45px" height="45px"></a>     <a href=''><img src="face.jpg" width ="45px" height="45px"s></a></pre>
</l1>
<l2>
<hr><p style="font-size:20px; text-align: center;">ThuyAnh Dang <hr>
<br>
7060196093<br><br>
thuyanh.dang@<br>student.fhws.de<br><br>
E Commerce<br><br>
23<br><br>
Germany<br><br>
<pre><a href=''><img src="twit.png" width ="45px" height="45px"></a>     <a href=''><img src="face.jpg" width ="45px" height="45px"s></a></pre>
</l2>
</body>
</html>
