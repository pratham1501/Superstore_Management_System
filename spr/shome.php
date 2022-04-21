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
  <div class="bgimg">
    <div class="over"><h1>Store Dashboard</h1>
      <b id="welcome" style="color:Black">Store_ID: <i style="color:Black"><?php echo $CustID; ?></i></b><br>
    </div>
  </div>




    
  </body>

</html>
