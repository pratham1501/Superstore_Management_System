<?php
include('session1.php');
if(!isset($_SESSION['login_user'])){
header("location: index.php");} // Redirecting To Home Page
$query4 = "SELECT * from dstbr where DID='$user_check'";
              $ses_sq4 = mysqli_query($conn, $query4);
              $row4 = mysqli_fetch_assoc($ses_sq4);
              $para1 = $row4['DID'];
              $para2 = $row4['DNAME'];
              $para3 = $row4['DTYPE'];
              $para4 = $row4['DPASS'];
              if(isset($_POST['submitpa']))
  {$updtname = ($_POST['inputpa']);
    $updatequery1 = "UPDATE dstbr set DPASS='$updtname' where DID='$para1'";mysqli_query($conn, $updatequery1);
    header("Refresh:0");}

    if(isset($_POST['submitn']))
  {$updtname = ($_POST['inputn']);
    $updatequery1 = "UPDATE dstbr set DNAME='$updtname' where DID='$para1'";mysqli_query($conn, $updatequery1);
    header("Refresh:0");}

    if(isset($_POST['submitpt']))
  {$updtname = ($_POST['inputpt']);
    $updatequery1 = "UPDATE dstbr set DTYPE='$updtname' where DID='$para1'";mysqli_query($conn, $updatequery1);
    header("Refresh:0");}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Distributor Login- Publix Mart</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    
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


<style>
    table {
    border-collapse: collapse;
    width: 70%;
    }

    th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
    }</style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Distributor Login- Publix Mart</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/landing-page.min.css" rel="stylesheet">




    <center><div style="background-color:#F9E79F">
      <center><h2 style="font-size:30px;color:Black">Distributor Dashboard</h2></center>

  <b id="welcome" style="color:Black">Store_ID: <i style="color:Black"><?php echo $CustID; ?></i></b>

 </div></center>
 <br>
 <center><div style="background-color:#85C1E9">
      <center><h2 style="font-size:30px;color:Black">Edit Profile</h2></center>
 </div></center>

    
         
        </div>
      </div>
    </header>
<center> <div style="background-color:#AED6F1">

    <form method="POST"; action="">
  
<table style="width:70%">
    <tr>
    <td>Distributor ID:</td><td><?php echo "$para1"?></td>
    <td>Not Allowed</td>
   </tr>
   <tr>
    <td>Distributor Name:</td>
    <td><input type="text" name="inputn" placeholder="<?php echo "$para2"?>"></td>
    <td><input type="submit" name="submitn"></td>
   </tr>
      <tr>
    <td>Distributor Product type:</td>
    <td><input type="text" name="inputpt" placeholder="<?php echo "$para3"?>"></td>
    <td><input type="submit" name="submitpt"></td>
  </tr>
    
   <tr>
   <td>Password</td>
    <td><input type="text" name="inputpa" placeholder="*******"</td>
    <td><input type="submit" name="submitpa"></td>
   </tr>
  </table>
</form></div></center>
  <br><br>

    
  </body>

</html>
