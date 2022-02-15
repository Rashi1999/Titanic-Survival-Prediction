<!DOCTYPE html>
<html>
<head>
<title>Graphs</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
#ab
		
		{		width: 700;
				height: 600;
				background-color: white;
				border-radius: 5%;	
		}
		#ifra
		{
			
			position:absolute;
			top:120%;
			left:30%;
		}
		#ab1
		{
				width: 700;
				height: 600;
				background-color: white;
				border-radius: 5%;	
		}
		.ifra1
		{
			
			position:absolute;
			top:120%;
			left:50%;
		}
img
		{
			z-index: -1;
			position: fixed;
			position: absolute;
			
			width: 100%;
			
			height: 150%;
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
splk{
 display:inline-block;
border-radius: 5px;
  background:rgba(244,236,228, 0.9);
  width: 650px;
padding: 30px;
margin-bottom: 30px;
margin-left:450px;
margin-right:100px;
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

</style>
</head>
<body style="background-image:url('c99.jpg'); background-repeat=no-repeat;">
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
<h2 style="color:black; text-align:center;font-family:harrington;"><b>Survival rate based on following categorical data :</b></h1><br><hr><br>
<p style="padding-left : 200px;">
<label class="container">Gender
  <input type="radio" name="radio" id="1" >
  <span class="checkmark"></span>
</label><br>
<label class="container">Passenger Class
  <input type="radio" name="radio" id="2"  >
  <span class="checkmark"></span>
</label><br>
<label class="container">Siblings and Spouse
  <input type="radio" name="radio" id="3" >
  <span class="checkmark"></span>
</label><br>
<label class="container">Parent and Children
  <input type="radio" name="radio" id="4" >
  <span class="checkmark"></span>
</label><br>
<label class="container">Embarkment
 <input type="radio" name="radio" id="5" >
  <span class="checkmark"></span>
</label><br>
<label class="container">Age
  <input type="radio" name="radio" id="6" >
  <span class="checkmark"></span>
</label><br>
</p>	
									
</splk>
<div id="ifra">
		<iframe id="ab" src="" ></iframe>	
		<br><br><br><br>
		</div>
		<div class="ifra1">
			<iframe id="ab1" src="" ></iframe>	
			<br><br><br><br>
		</div>
<script type="text/javascript">
			function display()
			{
				document.getElementById("ab1").style.display="none";
				var u="";
				var u1="";
				if(document.getElementById('1').checked)
				{
					u="http://localhost/gender/bargraph.html";
					u1="http://localhost/gender/bargraph1.html";
				}
				if(document.getElementById('2').checked)
				{
					u="http://localhost/pclass/graph.html";
					u1="http://localhost/pclass/graph2.html";
				}
				if(document.getElementById('3').checked)
				{
					u="http://localhost/SibSp/graph.html";
					u1="http://localhost/SibSp/graph2.html";
				}
				if(document.getElementById('4').checked)
				{
					u="http://localhost/parch/bargraph.html";
					u1="http://localhost/parch/bargraph1.html";
				}
				if(document.getElementById('5').checked)
				{
					u="http://localhost/embark/bargraph.html";
					u1="http://localhost/embark/bargraph1.html";
				}
				if(document.getElementById('6').checked)
				{
					u="http://localhost/Age/graph.html";
					u1="http://localhost/Age/graph2.html";
				}
				
					document.getElementById("ab").style.display="block";
					document.getElementById('ifra').style.left="0%";
					ab.src=u;
				if(u1!="")
				{
					document.getElementById("ab1").style.display="block";
					ab1.src=u1;
					document.getElementById('ifra').style.left="0%";
				}

				
			}
		</script>	

</body>
</html>
