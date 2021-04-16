<?php
   if (isset($_POST["submit"])){
    $lname  =  $_POST["lname"];
    $fname  = $_POST["fname"];
    $email  = $_POST["email"];
    $uname  = $_POST["uname"];
    $pword  = $_POST["pword"];

    $user = [
      'fname' => $fname,
      'lname' => $lname,
      'uname' =>  $uname,
      'email' =>  $email,
      'pword' =>  $pword,
    ];

    $_SESSION["first_name"]=$fname;
    $_SESSION["last_name"]=$lname;
    $_SESSION["email"]=$email;
    $_SESSION["username"]= $uname;

    file_put_contents($uname.".json", json_encode($user));

    header("location: ./welcome.php");
  };
?>