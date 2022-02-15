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
splk{
 display:inline-block;
border-radius: 5px;
  background:rgba(244,236,228, 0.9);
  width: 1250px;
padding: 50px;
margin-bottom: 30px;
margin-left:150px;
margin-right:100px;
text-align: justify;
}
</style>
</head>
<body style="background-image:url('c3.jpg'); background-repeat=no-repeat;font-size:18px;">
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
<splk>
<h1 style=" color:black; text-align:center;font-family:harrington;"><b>Exploratory Data Analysis</b></h2>
<hr>
<p>We use following functions of pandas library :
  			<ol>
				<li>head(int n) : to view n rows of the dataset</li><br>
				<li>shape() : to get the count of no. of rows and columns in dataset</li><br>
				<li>info() : gives count of non-null values in each column of the dataset</li><br>
				<li>isnull().sum() :  gives count of null values in each column of the dataset</li><br>
			</ol>
		</p>
			<p>
			We import python lib and seaborn for visualization and create bar charts for following categorical features: 
			<ul>
				<li>Pclass</li><br>
				<li>Age</li><br>
				<li>Sex</li><br>
				<li>SibSp ( Number of siblings and spouse)</li><br>
				<li>Parch ( Number of parents and children)</li><br>
				<li>Embarked</li>
			</ul></b>
			</p>		
</splk></body>
</html>
