<?php
include('session.php');
if(!isset($_SESSION['login_user'])){
header("location: index.php"); // Redirecting To Home Page
}
$query4 = "SELECT * from store where SID='$user_check'";
              $ses_sq4 = mysqli_query($conn, $query4);
              $row4 = mysqli_fetch_assoc($ses_sq4);
              $para1 = $row4['SID'];
              $para2 = $row4['SBRANCHNAME'];
              $para3 = $row4['SCITY'];
              $para4 = $row4['SREGION'];
              $para5 = $row4['SSTATE'];
              $para6 = $row4['SPCODE'];
              $para7 = $row4['SPASS'];

 if(isset($_POST['submitn']))
  {$updtname = ($_POST['inputn']);
    $updatequery1 = "UPDATE store set SBRANCHNAME='$updtname' where SID='$para1'";mysqli_query($conn, $updatequery1);
    header("Refresh:0");}

    if(isset($_POST['submitc']))
  {$updtname = ($_POST['inputc']);
    $updatequery1 = "UPDATE store set SCITY='$updtname' where SID='$para1'";mysqli_query($conn, $updatequery1);
    header("Refresh:0");}
    if(isset($_POST['submitr']))
  {$updtname = ($_POST['inputr']);
    $updatequery1 = "UPDATE store set SREGION='$updtname' where SID='$para1'";mysqli_query($conn, $updatequery1);
    header("Refresh:0");}

    if(isset($_POST['submits']))
  {$updtname = ($_POST['inputs']);
    $updatequery1 = "UPDATE store set SSTATE='$updtname' where SID='$para1'";mysqli_query($conn, $updatequery1);
    header("Refresh:0");}

    if(isset($_POST['submitp']))
  {$updtname = ($_POST['inputp']);
    $updatequery1 = "UPDATE store set SPCODE='$updtname' where SID='$para1'";mysqli_query($conn, $updatequery1);
    header("Refresh:0");}

     if(isset($_POST['submitpa']))
  {$updtname = ($_POST['inputpa']);
    $updatequery1 = "UPDATE store set SPASS='$updtname' where SID='$para1'";mysqli_query($conn, $updatequery1);
    header("Refresh:0");}


              
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Store Login- Publix Mart</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <link rel="stylesheet" type="text/css" href="main.css">
  </head>
    <body>
      <nav class="navbar navbar-dark bg-dark">
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="shome.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="sprofile.php">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ssales.php">Sales Report</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="sorders.php">Store Orders</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="sstock.php">Stock</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Log Out</a>
          </li>
        </ul>
      </nav>


  <head>
<style>
    table {
    border-collapse: collapse;
    width: 70%;
    }

    th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
    }
</style>
<body>

    <center><div style="background-color:#F9E79F">
      <center><h2 style="font-size:30px;color:Black">Store Dashboard</h2></center
  <b id="welcome" style="color:Black">Store_ID: <i style="color:Black"><?php echo $CustID; ?></i></b>
 </div></center>
 <br>


    <!-- Masthead -->
    <header class="masthead text-white text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h1 class="mb-5" style="font-size:40px">"Store Login- Publix Mart"</h1>
         
   <center> <div style="background-color:#AED6F1">

<form method="POST"; action="">
  
<table style="width:70%;color:Black">
<center><div style="background-color:#85C1E9">
      <center><h2 style="font-size:30px;color:Black">Store Edit Profile</h2></center>
 </div></center>
    <tr>
    <td>Store ID:</td><td><?php echo "$para1"?></td>
    <td>Not Allowed</td>
   </tr>
   <tr>
    <td>Branch Name:</td>
    <td><input type="text" name="inputn" placeholder="<?php echo "$para2"?>"></td>
    <td><input type="submit" name="submitn"></td>
   </tr>
      <tr>
    <td>Branch City:</td>
    <td><input type="text" name="inputc" placeholder="<?php echo "$para3"?>"></td>
    <td><input type="submit" name="submitc"></td>
   </tr>
      <tr>
    <td>Branch Region:</td>
    <td><input type="text" name="inputr" placeholder="<?php echo "$para4"?>"></td>
    <td><input type="submit" name="submitr"></td>
   </tr>
      <tr>
    <td>Branch State:</td>
    <td><input type="text" name="inputs" placeholder="<?php echo "$para5"?>"></td>
    <td><input type="submit" name="submits"></td>
   </tr>
      <tr>
    <td>PINCODE:</td>
    <td><input type="text" name="inputp" placeholder="<?php echo "$para6"?>"></td>
    <td><input type="submit" name="submitp"></td>
   </tr>
   <td>Password</td>
    <td><input type="text" name="inputpa" placeholder="*******"</td>
    <td><input type="submit" name="submitpa"></td>
   </tr>
  </table>
</form>
  <br><br>
    </div></center>
  <br><br>
  </div>
   <br>
    </div>
        </div>
      </div>
    </header>
  </body>

</html>
