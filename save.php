<?php
  $u_name = $_POST["username"];
  $pass = $_POST["password"];
  $conn = new mysqli("localhost","root","","login_credentials");
  if ($conn->connect_error)
  {
    echo "ERROR!!";
  }
  $sql = "INSERT INTO `users` (`uname`, `password`) VALUES ('$u_name', '$pass');";
  if(mysqli_query($conn, $sql))
  {
    echo "<script>location.href='login.php'</script>";
  }
  else {
    echo "error";
  }
  mysqli_close($conn);
?>
