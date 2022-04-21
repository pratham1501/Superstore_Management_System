<?php
include('session1.php');
if(!isset($_SESSION['login_user'])){
header("location: index.php"); // To Home Page
}
?>

<!doctype html>
<html lang="en">
  <head>
  
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Administrator Login- Publix Mart</title>
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
            <a class="nav-link" href="distd.php">Distributor Details</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="stored.php">Store Details</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="sales.php">Sales Report</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout1.php">Log Out</a>
          </li>
        </ul>
      </nav>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    
<style>
    table {
    border-collapse: collapse;
    width: 60%;
    }

    th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
    }
</style>

<center>
  <div style="background-color:#F9E79F">
    <center><h2 style="font-size:30px;color:Black">Administrator Dashboard</h2></center>
      <b id="welcome" style="color:Black">Store_ID: <i style="color:Black"><?php echo $CustID; ?></i></b>
  </div>
</center>
<br>
 </body>

  </table>
    <div style="background-color:#AAB7B8">
      <center> 
      <center><h2 style="font-size:30px;color:Black"> New Distributor</h2>
        <p><div style="background-color:lightcyan">
      <center> 
    </div>
    <div class="signup">
      <center>
          <form action="custcmp.php" method="POST">
            <table>
            <tr>
              <td>Distributor Name</td>
              <td><input type="text" name="username" required></td>
              </tr>
              <tr>
              <tr>
              <td>Distributor Type</td>
              <td><input type="text" name="age" required></td>
              </tr>
              <td>Distributor Location</td>
              <td><input type="text" name="gender" required></td>
              </tr>
              <tr>
              <td>
            </td>
              <td><input type="submit" value="Register New Distributor "></td>
            </tr>
        </center>    
    </table>
          </form>
</center>
</div></p>
 </center>
</div>

<div style="background-color:#AAB7B8">
     <center>
     <center><div style="background-color:#AAB7B8">
 <center><h2 style="font-size:30px;color:Black">Distributor Details</h2></center>
 </div></center>
      <table>
        <tr>
          <th>Distributor ID</th>
          <th>Distributor Name</th>
          <th>Type</th>
          <th>Warehouse Location</th>
        </tr>
      
        
    <?php 
      $order59 ="SELECT * FROM dstbr order by DID";
      $food9 = mysqli_query($conn, $order59);
      while($oss55 = mysqli_fetch_assoc($food9))
      {echo '<tr><td>'. $oss55["DID"]."</td><td>". $oss55["DNAME"] . "</td><td>". $oss55["DTYPE"]. "</td><td>".$oss55["DLOC"]."</td></tr>";
      }
    ?>
    
</html>
