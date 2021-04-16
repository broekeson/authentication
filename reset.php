<?php
  if (isset($_POST['submit'])) {
    $username = $_POST['uname'];
    $NewPass  = $_POST['npword'];
    $data = file_get_contents("files/".$username.".json");
    $user_data  = json_decode($data,  true);

  if ($user_data['uname']==$username){
    $user_data['pword'] =  $NewPass;
    file_put_contents("files/".$username.".json",  json_encode($user_data));
 }else{
  header("location: ./forgetton-password.php");
}
  echo ("Your password has being successfully changed");
  }
?>