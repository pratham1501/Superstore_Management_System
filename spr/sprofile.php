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


<style>
    table {
    border-collapse: collapse;
    width: 80%;
    }

    th, td {
    padding: 8px;
    text-align:left;
    border-bottom: 1px solid #ddd;
    }
</style>


    <center><div style="background-color:#F9E79F">
      <center><h2 style="font-size:30px;color:Black">Store Dashboard</h2></center>
  <b id="welcome" style="color:Black">Store_ID: <i style="color:Black"><?php echo $CustID; ?></i></b>
 </div></center>



    <!-- Masthead -->
    <header class="masthead text-white text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h1 class="mb-5" style="font-size:40px">"Store Login- Publix Mart"</h1>
         
    <div style="background-color:#4682B4">
     <center> 
      <center>
<table style="width:100%">
<center><div style="background-color:#F9E79F">
      <center><h2 style="font-size:30px;color:Black">Store Profile</h2></center>
 </div></center>
    <tr>
    <td>Store ID:</td>
    <td><?php echo "$para1"?></td>
   </tr>
   <tr>
    <td>Branch Name:</td>
    <td><?php echo "$para2"?></td>
   </tr>
   <tr>
    <tr>
    <td>City:</td>
    <td><?php echo "$para3"?></td>
   </tr>
    <td>Region:</td>
    <td><?php echo "$para4"?></td>
   </tr>
      <tr>
      <tr>
    <td>State:</td>
    <td><?php echo "$para5"?></td>
   </tr>
      <tr>
    <td>Pincode:</td>
    <td><?php echo "$para6"?></td>
   </tr>
 
  <tr><td></td><td>
  <a href="sprofileedit.php"><button>Edit Profile</button></a></td>
  </tr> </table>
  <br><br>
  </div>
   <br>
    </div>
        </div>
      </div>
    </header>
  </body>

</html>
