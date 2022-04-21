<?php
session_start(); // Starting Session
$error = ''; // Store Error Message
if (isset($_POST['submitq']))
{
  if (empty($_POST['lspass']) || empty($_POST['lsid']))
  {
    $error = "Username or Password is invalid";
  }
  else
  {
    $username = $_POST['lsid'];//  $username and $password
    $password = $_POST['lspass'];
    
    // mysqli_connect() new connection to the MySQL server.
    $conn = mysqli_connect("localhost", "root", "", "superstore");
    
    // SQL query 
    $query = "SELECT ANAME,APASS From admin Where ANAME=? and APASS=? Limit 1";
    
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $stmt->bind_result($username, $password);
    $stmt->store_result();
    if($stmt->fetch()) //fetching the contents of the row
    {
      $_SESSION['login_user'] = $username; // Initializing Session
      header("location: dhome.php"); //  Profile Page
    }
    else
    {
      $error = "Username or Password is invalid";
    }
    mysqli_close($conn); // Closing Connection
  }
}
?>
