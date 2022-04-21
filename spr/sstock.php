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

 </div></center>
 <br>
 <center><div style="background-color:#85C1E9">
      <center><h2 style="font-size:30px;color:Black">Store Stock </h2></center>
 </div></center>

    <!-- Masthead -->
    <header class="masthead text-white text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h1 class="mb-5" style="font-size:40px">"Store Login- Publix Mart"</h1>
          </div>
         
        </div>
      </div>
    </header>

    
    <br>
<center> 
<div style="background-color:#AED6F1">
     <center>
      <h3>Stock Details</h3>
      <table>
        <tr>
          <th>Category </th>
          <th>Sub-Category</th>
          <th>Quantity Left</th>
        </tr>
        <?php 
        
      $order59 ="SELECT * FROM stock where SID=$CustID";
      $food9 = mysqli_query($conn, $order59);
      while($oss55 = mysqli_fetch_assoc($food9))
      {echo '<tr><td>'. $oss55["CRY"]."</td><td>". $oss55["SCRY"] . "</td><td>". $oss55["QUANT"]. "</td></tr>";
      }
?>
      </table>
      <br>
    </div></center>
    <br>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var order59 = google.visualization.arrayToDataTable([
          ['CRY', 'SCRY', 'QUANT'],
          <?php
            $order59 ="SELECT * FROM stock";
            $food9 = mysqli_query($conn, $order59);
            while($oss55=mysqli_fetch_array($food9)){
              $CRY=$oss55['CRY'];
              $SCRY=$oss55['SCRY'];
              $QUANT=$oss55['QUANT'];
              
           ?>
           ['<?php echo $CRY;?>',<?php echo $SCRY;?>,<?php echo $QUANT;?>],   
           <?php   
            }
           ?> 
        ]);

        var options = {
          chart: {
            title: 'Company Performance',
            subtitle: 'Sales, Expenses, and Profit: 2014-2017',
          },
          bars: 'vertical' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
  </head>
  <body>
    <div id="barchart_material" style="width: 900px; height: 500px;"></div>
 </body>

</html>
