<?php
session_start();
$account_no = $_SESSION['account_no'];
$con = mysqli_connect("localhost","root","","bank");
$result = mysqli_query($con, "SELECT * FROM register WHERE account_no = '$account_no'");
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$firstname = $row['firstname'];
$lastname = $row['lastname'];
$email = $row['email'];
$phone = $row['phone'];
$father = $row['father'];
$mother = $row['mother'];
$address1 = $row['address1'];
$address2 = $row['address2'];
$city = $row['city'];
$state = $row['state'];
$nationality = $row['nationality'];
?>
<!DOCTYPE html>
<html>
<head>
  <title>Singhal Bank</title>
  <link rel="icon" href="../img/l.png" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../css/response.css">
<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
<style type="text/css">
  table { border: 1px solid black; border-collapse: collapse; }
  table td {border: 1px solid black; border-right: 1px solid white; border-left: 1px solid white}
</style>
</head>
<body>

<div class="topnav" id="myTopnav">
  <img style="float:right; right:1" src="../img/lg.png" height="44" width="204.8">
  <a href="dashboard.php"><i class="fa fa-fw fa-calculator "></i>Dashboard</a>
  <a href="profile.php" class="active"><i class="fa fa-fw fa-id-card-o "></i>Profile</a>
  <a href="transfer.php"><i class="fa fa-fw fa-cogs "></i>Transfer Money</a>
  <a href="transactions.php"><i class="fa fa-fw fa-file-text "></i>Transactions</a>
  <a href="limit.php"><i class="fa fa-fw fa-sliders "></i>Set Limit</a>
  <a href="logout.php" style="float: right"><i class="fa fa-fw fa-sign-out "></i>Logout</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<br><br>
<center>
  <div style="background-color: #4CAF50; height: 45px; width: 100%; color: white; "><h1>My Profile</h1></div>
  <table cellpadding="10">
    <col width="400">
    <col width="600">
    <tr>
      <td colspan="2" align="right" style="border-top: 1px solid white;"><input type="button" name="changepwd" value="CHANGE PASSWORD" onclick="window.location.href='password/password.php'" style="height: 40px; width: 180px; color: white; background-color: #cc33ff"><input type="button" name="editprofile" value="EDIT PROFILE" onclick="window.location.href='editprofile.php'" style="height: 40px; width: 150px; color: white; background-color: #cc33ff"></td>
    </tr>
    <tr bgcolor="#ffffe6">
      <td><b>Name : </b></td>
      <td><?php echo $firstname . " " . $lastname ?></td>
    </tr>
    <tr>
      <td><b>Account Number : </b></td>
      <td><?php echo $account_no ?></td>
    </tr>
    <tr bgcolor="#ffffe6">
      <td><b>Email ID : </b></td>
      <td><?php echo $email ?></td>
    </tr>
    <tr>
      <td><b>Phone Number : </b></td>
      <td><?php echo $phone ?></td>
    </tr>
    <tr bgcolor="#ffffe6">
      <td><b>Father's Name : </b></td>
      <td><?php echo $father ?></td>
    </tr>
    <tr>
      <td><b>Mother's Name : </b></td>
      <td><?php echo $mother ?></td>
    </tr>
    <tr bgcolor="#ffffe6">
      <td><b>Address : </b></td>
      <td><?php echo $address1 . " " . $address2 ?></td>
    </tr>
    <tr>
      <td><b>City : </b></td>
      <td><?php echo $city ?></td>
    </tr>
    <tr bgcolor="#ffffe6">
      <td><b>State : </b></td>
      <td><?php echo $state ?></td>
    </tr>
    <tr>
      <td><b>Nationality : </b></td>
      <td><?php echo $nationality ?></td>
    </tr>
  </table>
</center>
</body>
</html>
