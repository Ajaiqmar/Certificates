<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>RIDDLER</title>
    <link rel="stylesheet" href="CSS/intern.css" />
  </head>
  <body>
    <?php include("header.html") ?>
    <form action="save.php" method="POST">
      <label>EMAIL</label><br />
      <input type="email" class="login" name="username" required/><br />
      <label>PASSWORD</label><br />
      <input type="password" class="login" name="password" required/><br />
      <input type="submit" value="SUBMIT" id="but"/><br />
      <p>
        DON'T HAVE AN ACCOUNT? <a href="">SIGNUP</a>
      </p>
    </form>
    <?php include("footer.html") ?>
  </body>
</html>
