<?php
include('session1.php');
if(!isset($_SESSION['login_user']))
{
  header("location: index.php"); // Redirecting To Home Page
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Distributor Login- Publix Mart</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <link rel="stylesheet" type="text/css" href="main.css">
  </head>
  <body>
    <nav class="navbar navbar-dark bg-dark">
      <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="dhome.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="dprofile.php">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="dorders.php">Orders</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout1.php">Log Out</a>
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
      <center><div style="background-color:#F9E79F">
      <center><h2 style="font-size:30px;color:Black">Distributor Dashboard</h2></center>
      <b id="welcome" style="color:Black">Store_ID: <i style="color:Black"><?php echo $CustID; ?></i></b>
    </div></center>
    <br>
    <center><div style="background-color:#85C1E9">
    <center><h2 style="font-size:30px;color:Black">Orders</h2></center>
  </div></center>
  <center> 
    <div style="background-color:#AED6F1">
    <center>
      <h3>Recent Orders</h3>
      <table>
        <tr>
          <th>Order ID</th>
          <th>Store ID</th>
          <th>Order Date</th>
          <th>Category</th>
          <th>Payment Status</th>
          <th>Shipment Mode</th>
          <th>Shipment Status</th>
          <th>Order Details Update</th>
        </tr>
        
        <?php 
        $order59 ="SELECT s.*,m.DTYPE FROM strorders s , dstbr m where m.DID=$CustID and m.did=s.did";
        $food9 = mysqli_query($conn, $order59);
        while($oss55 = mysqli_fetch_assoc($food9))
        {
          echo '<tr><td>'. $oss55["ORDID"]."</td><td>". $oss55["SID"] . "</td><td>". $oss55["ORDDATE"].
          "</td><td>". $oss55["DTYPE"]. 
          "</td><td>". $oss55["PMYSTAT"].
          "</td><td>". $oss55["SHPMODE"].
          "</td><td>". $oss55["SHPSTAT"].
          "</td><td><a href=\"dordupdate.php\">update</a></td></tr>";
        }
        ?>
      </table>
      <br>
    </div></center>
    <br>
   </body>
</html>
