<!DOCTYPE html>
<html>
<head>
<title>Viewclass</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

caption { 
    display: table-caption;
    text-align: center;
}
table {

font-size : 18px;
    width:55%;
}
table, th, td {
font-size : 18px;
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
font-size : 18px;
    padding: 28px;
    text-align: center;
}
table#t01 tr:nth-child(even) {
    background-color: #eee;
}
table#t01 tr:nth-child(odd) {
   background-color: #fff;
}
table#t01 th {
font-size :18px;
    background-color:	#989898;
    color: black;
}

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
{
    float: right;
    width: 50%;
    opacity :0.9;
    padding: 50px;
bakground-color:none;
border-radius :20%;
}
/* The container */
.container {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 20px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default radio button */
.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 18px;
  width: 18px;
  background-color: #7F4E4E;
  border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
  background-color:grey;
}

/* When the radio button is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: black;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.container .checkmark:after {
 	top: 6px;
	left: 6px;
	width: 6px;
	height: 6px;
	border-radius: 50%;
	background: white;
}
splk{
 display:inline-block;
border-radius: 5px;
  background:rgba(244,236,228, 0.9);
  width: 1250px;
padding: 30px;
margin-bottom: 30px;
margin-left:150px;
margin-right:100px;
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
				


<table id="t01" align="center" top-padding="100px">


  <tr>
<td bgcolor=black style="color:white;">Accuracy and Classifier</th>
    <th>Accuracy on Modelling</th>
    <th>Accuracy after Testing</th>
 </tr>
  <tr>
<td style="background-color:	#989898"><b>K-Nearest Neighbors Classifier</b></td>
<td>79.19 %</td>    
<td>81.25 %</td>
</tr>
 <tr>
<td style="background-color:	#989898"><b>Decision Tree Classifier</b></td>
    <td>79.64 %</td>    
<td>70.40 %</td></tr>
<tr>
<td style="background-color:	#989898"><b>Random Forest Classifier</b></td>
    <td>79.49 %</td>    
<td>73.99 %</td></tr>
<tr>
<td style="background-color:	#989898"><b>Gaussian Naive Baye's Classifier</b></td>
    <td>77.71 %</td>    
<td>80.71 %</td></tr>

<tr>
<td style="background-color:	#989898"><b>Support Vector Method</b></td>
<td>82.93 %</td>    
<td>84.30 %</td></tr>

</table>
<br>
<br>
</body>
</html>
