<?php
session_start();
$account_no = $_SESSION['account_no'];
$con = mysqli_connect("localhost","root","","bank");
$result = mysqli_query($con, "SELECT * FROM balance WHERE account_no = '$account_no'");
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$online_limit = $row['online_limit'];
$card_limit = $row['card_limit'];
$upi_limit = $row['upi_limit'];
$online_no = $row['online_no'];
$card_no = $row['card_no'];
$upi_no = $row['upi_no'];
if($_SERVER["REQUEST_METHOD"] == "POST") {
  $online_limit = $_POST['onlinelimit'];
  $card_limit = $_POST['cardlimit'];
  $upi_limit = $_POST['upilimit'];
  $online_no = $_POST['onlineno'];
  $card_no = $_POST['cardno'];
  $upi_no = $_POST['upino'];
  $c = mysqli_query($con, "update balance set online_limit = '$online_limit', card_limit = '$card_limit', upi_limit = '$upi_limit', online_no = '$online_no', card_no = '$card_no', upi_no = '$upi_no' where account_no = '$account_no';");
  if($c) {header("refresh:0;url=dashboard.php"); } else { echo "no";}
}
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
  table th{border: 1px solid black; font-size: 18px;}
  table td{font-size: 18px;}
  input{font-size: 25px;}
</style>
</head>
<body>

<div class="topnav" id="myTopnav">
  <img style="float:right; right:1" src="../img/lg.png" height="44" width="204.8">
  <a href="dashboard.php"><i class="fa fa-fw fa-calculator "></i>Dashboard</a>
  <a href="profile.php"><i class="fa fa-fw fa-id-card-o "></i>Profile</a>
  <a href="transfer.php"><i class="fa fa-fw fa-cogs "></i>Transfer Money</a>
  <a href="transactions.php"><i class="fa fa-fw fa-file-text "></i>Transactions</a>
  <a href="limit.php" class="active"><i class="fa fa-fw fa-sliders "></i>Set Limit</a>
  <a href="logout.php" style="float: right"><i class="fa fa-fw fa-sign-out "></i>Logout</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<br><br>
<center>
  <div style="background-color: #4CAF50; height: 45px; width: 100%; color: white; "><h1>Set Limit</h1></div>
  <br><br>
  <form action="" method="POST">
  <table cellpadding="20" width="80%">
    <tr>
      <th align="center">Transaction Type</th>
      <th align="center">Amount Limit</th>
      <th align="center">Number Of Transactions Permitted (maximum 5)</th>
    </tr>
    <tr>
      <td align="center">UPI Transaction</td>
      <td align="center"><input size="5" type="text" name="upilimit" id="upilimit" value="<?php echo $upi_limit ?>"></td>
      <td align="center"><input size="5" type="text" name="upino" id="upino" value="<?php echo $upi_no ?>"></td>
    </tr>
    <tr>
      <td align="center">Online Transaction</td>
      <td align="center"><input size="5" type="text" name="onlinelimit" id="onlinelimit" value="<?php echo $online_limit ?>"></td>
      <td align="center"><input size="5" type="text" name="onlineno" id="onlineno" value="<?php echo $online_no ?>"></td>
    </tr>
    <tr>
      <td align="center">Card Transaction</td>
      <td align="center"><input size="5" type="text" name="cardlimit" id="cardlimit" value="<?php echo $card_limit ?>"></td>
      <td align="center"><input size="5" type="text" name="cardno" id="cardno" value="<?php echo $card_no ?>"></td>
    </tr>
  </table>
  <br>
  <table style="border: white;" width="80%">
    <tr>
      <td style="border: white;" align="center"><input type="submit" name="submit" value="Continue" style="height: 40px; width: 150px; font-size: 20px; color: white; background-color: #4CAF50"></td>
    </tr>
  </table>
  </form>
</center>
</body>
</html>
