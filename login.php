<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <h1>Sign in</h1>
  <h5>Quick & Easy to use</h5>
  <form action="logon.php" method="post">
    <input type="text" name="uname" id="uname"  class="username form-group"  placeholder="Username" required><br>
    <input type="password" class="password form-group"  name="pword" id="password" placeholder="Password" required><br>
    <input type="submit" value="Log In"  class="login form-group"  name="submit"><br>
    <a href="./forgetton-password.php"  name="fpword" class="fpword form-group"  id="fpword">Forget Password?</a><br>
    <a href="./registration.php"  name="new" class="new form-group"  id="new">Create New Account</a>
  </form>
</body>
</html>