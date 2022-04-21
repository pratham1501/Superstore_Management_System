<?php
include('session.php');
if(!isset($_SESSION['login_user'])){
header("location: index.php"); // Redirecting To Home Page
}
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

    
  </header>



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
   


    <center><div style="background-color:#F9E79F">
      <center><h2 style="font-size:30px;color:Black">Store Dashboard</h2></center>
  <b id="welcome" style="color:Black">Store_ID: <i style="color:Black"><?php echo $CustID; ?></i></b>
  <h2 style="font-size:30px;color:Black">Store Sales Report</h2>
 </div></center>

 <center><div style="background-color:#85C1E9">
      <center><h2 style="font-size:30px;color:Black"> </h2></center>
 </div></center>


  
<center> 
<div style="background-color:#AED6F1">
     <center>
      <h3>Sales Entries</h3>
      <table>
        <tr>
          <th>Sales ID</th>
          <th>Sales Date</th>
          <th>Sales Cost</th>
        </tr>
        <?php 
        
      $order59 ="SELECT * FROM sales where SID=$CustID";
      $food9 = mysqli_query($conn, $order59);
      while($oss55 = mysqli_fetch_assoc($food9))
      {echo '<tr><td>'. $oss55["SALESID"]."</td><td>". $oss55["SDATE"] . "</td><td>". $oss55["SCOST"]. "</td></tr>";
      }
?>
      </table>
      <br>
    </div></center>
    <br>
<div style="background-color:#AED6F1">
     <center> 
      <center><h1 style="font-size:30px;color:Black">New Sales Entry</h1>
        <p><div style="background-color:lightcyan">
     <center> 
      </div>
        <div class="signup">
           <center>
  <form action="custcmp.php" method="POST">
  <table>
   <tr>
    <td>Sales Date(DD/MM/YYYY)</td>
    <td><input type="text" name="username" required></td>
   </tr>
   <tr> 
    <td>Sales Cost</td>
    <td><input type="text" name="email" required></td>
   </tr>
   <tr><td></td>
    <td><input type="submit" value="Enter"></td>
   </tr>
   </center>
  </table>
 </form>
</center>
</div></p>
 </center>
</div>


    
  </body>

</html>
