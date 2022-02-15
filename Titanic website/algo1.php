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
font-size: 22px;
  float: left;
  
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
splk{
 display:inline-block;
border-radius: 5px;
  background:rgba(244,236,228, 0.9);
  width: 1300px;
padding: 30px;
margin-bottom: 30px;
margin-left:150px;
margin-right:100px;
text-align: justify;
}
</style>
</head>
<body style="background-image:url('c77.jpg'); background-repeat=no-repeat;font-size:18px;">
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

<splk>
<h1 style=" color:black; text-align:center;font-family:harrington;"><b>Problem Statement</b></h2>
<hr>
<p><b>The 1912 maiden voyage of the Titanic from England to New York ended in a horrific accident, when the supposedly indestructible ship hit the infamous iceberg and began to sink with all 2224 passengers on board. What became quickly apparent was the lack of lifeboats for all of the passengers, which resulted in chaos when people were scrambling to get off a sinking ship and find space for themselves in a lifeboat. 
There was an element of luck involved in surviving the catastrophe, however certain groups of people were more likely to survive than others, such as women, children, and the upper-class. The objective is to predict the fate of the Titanic passengers and the factors which influenced the survival of some particular group of people over others using the data structure and data analysis tools of machine learning.</p>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="TItanic_Survival_Infographic"><img src="tt.jpg" alt="TItanic_Survival_Infographic" title=""></a>
</splk>
</body>
</html>
