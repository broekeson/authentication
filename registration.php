<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <h1>Sign Up </h1>
  <h5>Quick & Easy to use</h5>
  <form action="registered.php" method="post">
    <input type="text" class="lname form-group" name="lname"  placeholder="Last Name" required>
    <input type="text" class="fname form-group" name="fname"  placeholder="First Name"  required><br>
    <input type="email"  class="email form-group" name="email" id="email" placeholder="Enter Your Email Address"  required><br>
    <input type="text" name="uname" id="uname"  class="username form-group"  placeholder="Enter Your Preferred Username"required><br>
    <input type="password" class="password form-group"  name="pword" id="password" placeholder="New Password" required><br>
    <a href="./index.php"  name="new" class="new form-group"  id="new">Existing User? Sign In</a><br>
    <input type="submit" value="Sign Up"  class="submit"  name="submit">
  </form>
</body>
</html>