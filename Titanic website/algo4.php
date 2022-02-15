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
  float: left;font-size: 22px;
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
padding: 30px;
margin-bottom: 30px;
margin-left:150px;
margin-right:100px;
text-align: justify;
}
</style>
</head>
<body style="background-image:url('c77.jpg'); background-repeat=no-repeat; font-size:18px;">
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
<h1 style=" color:black; text-align:center;font-family:harrington;"><b>Feature Engineering</b></h2>
<hr>
<b>
  			<p>Since the data had missing fields, incomplete fields, or the fields contained hidden information we went forward with Feature Engineering, which is a crucial step for any prediction system. For instance, the fields: Age, Cabin and Embarked in the dataset had missing values that had to be filled . The field Name which did not seem to be of much use contained the Passenger's Title (Mr., Mrs., etc.).
  				<font><br><br>
  				<ol type="A">
					<li>The following featured engineering techniques were performed:
					<ul>
						<li>Changing alphabetic values to numeric</li> 
						<li>Calculating family size</li>
						<li>Extracting title from name and deck label from ticket number</li>
						<li>Using linear regression algorithm to fill the missing ages</li>
					</ul></li><br>
					<li>We used several prediction algorithms in python:
					 <ul>
						<li>Decision Tree</li>
						<li>Random Forest </li>
						<li>SVM Classifier </li>
						<li>KNN Classifier</li>
						<li>Gaussian Naive Baye’s</li>
					</ul></li>
				</ol>
			</p>
			<p>
				<ol>
					<li>Title Mapping:
						<ul>
							<li>Mr    : 0</li>
							<li>Miss  : 1</li>
							<li>Mrs   : 2</li>
							<li>Others: 3</li>
						</ul><br>
					</li>
					<li>Sex Mapping:
						<ul>
							<li>Male  : 0</li>
							<li>Female: 1</li>
						</ul><br>
					</li>
					<li>Age Mapping:
						<ul>
							<li>Age <=16     : 0</li>
							<li>16 < Age<=26 : 1 </li>
							<li>26 < Age<=36 : 2</li>
							<li>36 < Age<=62 : 3</li>
							<li>62 < Age     : 5</li>
						</ul><br>
					</li>
					<li>Place Of Embarkment:
						<ul>
							<li>"S" : 0	</li>
							<li>"C" : 1 </li>
							<li>"Q" : 2 </li>
						</ul><br>
					</li>
					<li>Cabin:
						<ul>
							<li>A: 0</li>
							<li>B: 0.4</li>
							<li>C: 0.8</li>
							<li>D: 1.2</li>
							<li>E: 1.6</li>
							<li>F: 2</li>
							<li>G: 2.4</li>
							<li>T: 2.8</li>
						</ul><br>
					</li>
					<li>Family Mapping:
						<ul>
						<li>1  : 0</li>
						<li>2  : 0.4</li>
						<li>3  : 0.8</li>
						<li>4  : 1.2</li>
						<li>5  : 1.6</li>
						<li>6  : 2</li>
						<li>7  : 2.4</li>
						<li>8  : 2.8</li>
						<li>9  : 3.2</li>
						<li>10 : 3.6</li>
						<li>11 : 4</li>
					</ul><br>
					</li>
				</ol>


			</p>
</splk>
</body>
</html>
