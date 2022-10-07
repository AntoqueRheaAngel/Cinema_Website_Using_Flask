<!DOCTYPE html>
<html>
<head>
  <title>THE WORLD OF CINEMA</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
  <div id="head">
    <h2>THE WORLD OF CINEMA</h2>
  </div>

<div id="sec">
  <div id="content">
  <h1>You've successfully ordered</h1>
  <h3 class='summ'>Firstname: <?php echo $_POST["fname"]; ?></h3>
  <h3 class='summ'>Lastname: <?php echo $_POST["lname"]; ?></h3>
  <h3 class='summ'>Address: <?php echo $_POST["address"]; ?></h3>
  <h3 class='summ'>Age: <?php echo $_POST["age"]; ?></h3>
  <h3 class='summ'>Gender : <?php echo $_POST["gender"]; ?></h3>
  <h3 class='summ'>Movie Number: <?php echo $_POST["movie"]; ?></h3>
  <h3 class='summ'>Number of Ticket: <?php echo $_POST["ticket"]; ?></h3>
  <h3 class='summ'>Your Order: <?php echo $_POST["orders"]; ?></h3>
  </div>
  
  

  <div id="navi">
    <br><br>
    <iframe autoplay width="400" height="280" src="Babalik Sa'yo - Moira Dela Torre (Visualizer feat. Red & Tox) _ From _2 Good 2 Be True_ OST.mp4" allowfullscreen  ></iframe>
</div>

<div id="footer">
     <p>Thank You and Enjoy!</p>
   </div>
  
  </div>
</div>
</body>
</html>