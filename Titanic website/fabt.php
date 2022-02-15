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
<splk>
<h1 style=" color:black; text-align:center;font-family:harrington;"><b>HISTORY  OF  THE  MAIDEN  VOGAYE  OF  THE  TITANIC</b></h3><hr>
<br>
<p style="font-size:18px;">RMS Titanic was a British passenger liner that sank in the North Atlantic Ocean in the early hours of 15 April 1912, after colliding with an iceberg during 
her maiden voyage from Southampton to New York City. There were an estimated 2,224 passengers and crew aboard, and more than 1,500 died, making it one of 
the deadliest commercial peacetime maritime disasters in modern history. RMS Titanic was the largest ship afloat at the time she entered service and was the 
second of three Olympic-class ocean liners operated by the White Star Line. She was built by the Harland and Wolff shipyard in Belfast. Thomas Andrews, chief 
naval architect of the shipyard at the time, died in the disaster.
<br><br>
Titanic was under the command of Capt. Edward Smith, who also went down with the ship. The ocean liner carried some of the wealthiest people in the world, as
well as hundreds of emigrants from Great Britain and Ireland, Scandinavia and elsewhere throughout Europe who were seeking a new life in the United States. 
A high-powered radiotelegraph transmitter was available for sending passenger "marconigrams" and for the ship's operational use.
<br><br>
Although Titanic had advanced safety features such as watertight compartments and remotely activated watertight doors, it only carried enough lifeboats for 1,178
people about half the number on board, and one third of her total capacity due to outdated maritime safety regulations. The ship carried 16 lifeboat davits which
could lower three lifeboats each, for a total of 48 boats. However, Titanic carried only a total of 20 lifeboats, four of which were collapsible and proved hard 
to launch during the sinking.
<br><br>
After leaving Southampton on 10 April 1912, Titanic called at Cherbourg in France and Queenstown (now Cobh) in Ireland before heading west to New York. On 14 April,
four days into the crossing and about 375 miles (600 km) south of Newfoundland, she hit an iceberg at 11:40 p.m. ship's time. The collision caused the hull plates 
to buckle inwards along her starboard (right) side and opened five of her sixteen watertight compartments to the sea; she could only survive four flooding. Meanwhile,
passengers and some crew members were evacuated in lifeboats, many of which were launched only partially loaded. A disproportionate number of men were left aboard 
because of a "women and children first" protocol for loading lifeboats. At 2:20 a.m., she broke apart and foundered with well over one thousand people still aboard. 
Just under two hours after Titanic sank, the Cunard liner RMS Carpathia arrived and brought aboard an estimated 705 survivors.	

			</p>		
</splk>

</body>
</html>
