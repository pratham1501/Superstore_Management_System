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



    <center><div style="background-color:#F9E79F">
      <center><h2 style="font-size:30px;color:Black">Distributor Dashboard</h2></center>

  <b id="welcome" style="color:Black">Store_ID: <i style="color:Black"><?php echo $CustID; ?></i></b>

 </div></center>
 <br>
 <center><div style="background-color:#85C1E9">
      <center><h2 style="font-size:30px;color:Black">Profile</h2></center>
 </div></center>

    
         
        </div>
      </div>
    </header>
    <div style="background-color:#58D68D">
     <center> 
      <center>
<table style="width:70%">
    <tr>
    <td>Distributor ID:</td>
    <td><?php echo "$para1"?></td>
   </tr>
   <tr>
    <td>Distributor Name:</td>
    <td><?php echo "$para2"?></td>
   </tr>
    <tr>
    <td>Distribution Product Type:</td>
    <td><?php echo "$para3"?></td>
   </tr>
    
  <tr><td></td><td>
  <a href="dprofileedit.php"><button>Edit Profile</button></a></td>
  </tr> </table>
  <br><br>
  </div>
   <br>

    
  </body>

</html>
