<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reset Password</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  <h1> Reset Password </h1>
  <form action="reset.php" method="post">
    <input type="text" name="uname" id="uname"  class="form-group username" placeholder="Username"  required><br>
    <input type="password" name="npword" id="password" class="form-group password" placeholder="New Password"><br>
    <input type="submit" value="Submit" class="form-group login"  name="submit"><br>
    <a href="./login.php"  name="new" class="new form-group"  id="new">Go Back</a>
  </form>
</body>
</html>