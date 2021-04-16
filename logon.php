<?php
  session_start();

  if (isset($_POST["submit"])) {
    $data = file_get_contents("files/".$_POST['uname'].".json");
    $user_data = json_decode("$data", true);
    $username = $_POST["uname"];
    $password = $_POST["pword"];

    if ($user_data['pword'] == $password  && $user_data['uname']==$username){
      $_SESSION["first_name"]=$user_data['fname'];
      $_SESSION["last_name"]=$user_data['lname'];
      $_SESSION["email"]=$user_data['email'];
      $_SESSION["username"]=$user_data['uname'];

    header("location: ./welcome.php");
    } else {
      header("location: ./login.php");
    }
  } 
?>