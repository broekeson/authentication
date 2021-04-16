<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome</title>
  <link rel="stylesheet" href="css/welcome.css">
</head>
<body>
  <div  id="div1">
  <h2>Welcome <?php echo $_SESSION['first_name'];?>!</h2>
  <h5> Thank you for joining us today</h5><br>
  <p>We've some gifts to <?php echo $_SESSION['email']?> for your use!</p>
  <p>Do have a wonderful day <?php echo $_SESSION['first_name'] ." ".$_SESSION['last_name']?></p>
  <br></br>

  <p><a href="./logout.php"  class="link">Logout <?php echo $_SESSION['username'];?></a></p>
  </div>
  </body>
</html>