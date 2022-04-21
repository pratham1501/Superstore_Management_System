<?php
session_start(); // Starting Session
$error = ''; // To Store Error Message
if (isset($_POST['submitq']))
 {
if (empty($_POST['lspass']) || empty($_POST['lsid'])) {
$error = "Username or Password is invalid";
}
else
{
//  $username and $password
$username = $_POST['lsid'];
$password = $_POST['lspass'];

// mysqli_connect() f new connection to the MySQL server.
$conn = mysqli_connect("localhost", "root", "", "superstore");

// SQL query 
$query = "SELECT SID,SPASS From store Where SID=? and SPASS=? Limit 1";


$stmt = $conn->prepare($query);
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$stmt->bind_result($username, $password);
$stmt->store_result();

if($stmt->fetch()) //contents of the row
        {
          $_SESSION['login_user'] = $username; //  Session
          header("location: shome.php"); // Profile Page
        }
else {
       $error = "Username or Password is invalid";
     }
mysqli_close($conn); // Closing 
}
}
?>
