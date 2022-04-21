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
      width: 70%;
    }
    
    th, td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }
    </style>
    </head>
    
    <center>
      <div style="background-color:#F9E79F">
      <center><h2 style="font-size:30px;color:Black">Administrator Dashboard</h2></center>
      <b id="welcome" style="color:Black">Store_ID: <i style="color:Black"><?php echo $CustID; ?></i></b>
    </div></center>
    
    <header class="masthead text-white text-center">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h1 class="mb-5" style="font-size:40px">"Publix Mart"</h1>
            <h1 class="mb-5" style="font-size:40px">Administrator Login</h1>
            <center>
              <div style="background-color:DodgerBlue">
              <center><h2 style="font-size:30px;color:Black">Sales Report</h2></center>
              
              <form method="POST">
                <center><table><h4>Sales by:
                  <select name="ssalescat" >
                    <option selected="" hidden="" value="None" >Category</option>
                    <option value="SBRANCHNAME">Branch</option>
                    <option value="SCITY">City</option>
                    <option value="SREGION">Region</option>
                    <option value="SSTATE">State</option>
                    <input type="submit" name="submitsales" value="Next">
                  </select>
                </center>
                
                <?php
                if(isset($_POST['submitsales']))
                {
                  $catsv = ($_POST['ssalescat']);
                  $pl="Selected Category:";
                  echo '<h5>',$pl,$catsv,'</h5></form>';
                  $query1122 = "INSERT into t(temp) values ('$catsv')";
                  mysqli_query($conn, $query1122);
                  echo '<form method="POST"><h4>Choose:';
                  $query1112 = "SELECT Distinct $catsv FROM store";
                  $ses_sq2 = mysqli_query($conn,$query1112);
                  $select12= '<select name="select2112">
                  <option selected hidden>Select</option>';
                  while($rs12 = mysqli_fetch_assoc($ses_sq2))
                  {
                    $select12.='<option value="'.$rs12[$catsv].'">'.$rs12[$catsv].'</option>';
                  }
                  $select12.='</select><br><input name="submitcs2" type="submit" value="Next"></h4></form></table>';
                  echo $select12,'</h4>';
                }
                if(isset($_POST['submitcs2']))
                {
                  $query1112 = "SELECT temp FROM t where tee=(select max(tee) from t)";
                  $ses_sq2112 = mysqli_query($conn, $query1112);
                  $rs12 = mysqli_fetch_assoc($ses_sq2112);
                  $catsv=$rs12['temp'];
                  $catsv1 = ($_POST['select2112']);echo $catsv1;
                  echo '<center>
                  <table>
                  <tr>
                  <th>Sales ID</th>
                  <th>Sales Date</th>
                  <th>Sales Cost</th>
                  <th>Store_ID</th>
                  <th>Store Name</th>
                  <th>Store City</th>
                  </tr>';
                  echo $catsv,":",$catsv1;
                  $order59 ="select sa.*,st.SBRANCHNAME,st.SCITY from sales sa,store st where sa.sid=st.sid";
                  $food9 = mysqli_query($conn, $order59);
                  while($oss55 = mysqli_fetch_assoc($food9))
                  {
                    echo '<tr><td>'. $oss55["SALESID"]."</td><td>". $oss55["SDATE"] . "</td><td>". $oss55["SCOST"]. "</td><td>".$oss55["SID"]."</td><td>".$oss55["SBRANCHNAME"]."</td><td>". $oss55["SCITY"]."</td></tr></div>";
                  }
                }
                ?>
                </div>
              </div>
            </div>
          </header>
        </div></center>
  </body>
</html>
