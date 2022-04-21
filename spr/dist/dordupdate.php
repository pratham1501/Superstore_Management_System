<?php
include('session1.php');
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

<div style="background-color:#85C1E9">
    <h2 style="font-size:30px;color:Black"></h2>
    <center>
      <h4>Select:
<form method="POST" >
  
<?php 
      $query19 = "SELECT ORDID FROM strorders where DID='$CustID' ";
      $ses_sq29 = mysqli_query($conn, $query19);
      $select1= '<select style="color:Black" name="select2"><option selected hidden value="">  Order_ID  </option>';
      while($rs1 = mysqli_fetch_assoc($ses_sq29))
      {
      $select1.='<option value="'.$rs1['ORDID'].'">'.$rs1['ORDID'].'</option>';
      }
      $select1.='</select>';
      echo $select1;
     echo' <input style="color:Black" name="submitqp" type="submit" value="Submit"></h4>'; 
     $paraa2="";
     $paraa3="";
     $paraa4="";
     $paraa5="";
      if(isset($_POST['submitqp']))
       {
        $oidv = ($_POST['select2']);
        $queryod = "SELECT ORDID,PMYSTAT,SHPMODE,SHPSTAT from strorders where ORDID='$oidv' ";
              $ses_sq44 = mysqli_query($conn, $queryod);
              $row90 = mysqli_fetch_assoc($ses_sq44);
              $paraa2 = $row90['ORDID'];
              $paraa3 = $row90['PMYSTAT'];
              $paraa4 = $row90['SHPMODE'];
              $paraa5 = $row90['SHPSTAT'];
        $quer5="insert into t(temp) values('$paraa2')";
        mysqli_query($conn, $quer5);}
$a=",";
 
    echo '</form>';
if(isset($_POST['submitn']))
  {
    $updtname = ($_POST['inputn']);
    $qqq="select temp from t where tee=(select max(tee) from t)";
 $ses_sq44 = mysqli_query($conn, $qqq);
 $row90 = mysqli_fetch_assoc($ses_sq44);
 $oidv8 = $row90['temp'];
    $updatequery1 = "UPDATE strorders set PMYSTAT='$updtname' where ORDID=$oidv8";mysqli_query($conn, $updatequery1);
    header("location: dorders.php");
  }
  if(isset($_POST['submitpt']))
  {$updtname = ($_POST['inputpt']);
$qqq="select temp from t where tee=(select max(tee) from t)";
 $ses_sq44 = mysqli_query($conn, $qqq);
 $row90 = mysqli_fetch_assoc($ses_sq44);
 $oidv8 = $row90['temp'];
    $updatequery1 = "UPDATE strorders set SHPMODE='$updtname' where ORDID=$oidv8";mysqli_query($conn, $updatequery1);
    header("location: dorders.php");
  }
  if(isset($_POST['submitprt']))
  {$updtname = ($_POST['inputprt']);
$qqq="select temp from t where tee=(select max(tee) from t)";
 $ses_sq44 = mysqli_query($conn, $qqq);
 $row90 = mysqli_fetch_assoc($ses_sq44);
 $oidv8 = $row90['temp'];
    $updatequery1 = "UPDATE strorders set SHPSTAT='$updtname' where ORDID=$oidv8";mysqli_query($conn, $updatequery1);
    header("location: dorders.php");
  }
?>
<form method="POST"; action="">
  
<table style="width:70%">
    <tr>
    <td>Order_ ID:</td><td><?php echo "$paraa2"?></td>
    <td>Not Allowed</td>
   </tr>
   <tr>
    <td>Payment Status:</td>
    <td><input type="text" name="inputn" placeholder="<?php echo "$paraa3"?>"></td>
    <td><input type="submit" name="submitn"></td>
   </tr>
      <tr>
    <td>Shipment Mode:</td>
    <td><input type="text" name="inputpt" placeholder="<?php echo "$paraa4"?>"></td>
    <td><input type="submit" name="submitpt"></td>
  </tr>
     <tr>
    <td>Shipment Status:</td>
    <td><input type="text" name="inputprt" placeholder="<?php echo "$paraa5"?>"></td>
    <td><input type="submit" name="submitprt"></td>
  </tr>
  </table>
</form></div></center>
  <br><br>
    </center>
    <br>
</div>
<br><br><br>

  
</body>
</html>