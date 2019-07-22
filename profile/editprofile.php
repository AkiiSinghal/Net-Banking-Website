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
$address1 = $row['address1'];
$address2 = $row['address2'];
$city = $row['city'];
$state = $row['state'];
$country = $row['country'];
$father = $row['father'];
$mother = $row['mother'];
$nationality = $row['nationality'];
if($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $address1 = $_POST['address1'];
  $address2 = $_POST['address2'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $country = $_POST['country'];
  $father = $_POST['father'];
  $mother = $_POST['mother'];
  $nationality = $_POST['nationality'];
  $c = mysqli_multi_query($con, "update register set firstname = '$firstname', lastname = '$lastname', email = '$email', phone = '$phone', address1 = '$address1', address2 = '$address2', city = '$city', state = '$state', country = '$country', father = '$father', mother = '$mother', nationality = '$nationality' where account_no = '$account_no'; update login set id = '$email' where account_no = '$account_no';");
  if($c) {header("refresh:0;url=profile.php"); } else { echo "no";}
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
<link rel="stylesheet" href="../css/style.css">
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
  <div style="background-color: #4CAF50; height: 45px; width: 100%; color: white; "><h1>Edit Profile</h1></div>
  <form action="" method="POST">
    <table width="80%">
      <tr>
        <td>
          <input type="text" name="firstname" class="question" id="firstname" value="<?php echo $firstname ?>" required autocomplete="off" />
          <label for="firstname"><span>First Name*</span></label>
        </td>
        <td>
          <input type="text" name="lastname" class="question" id="lastname" value="<?php echo $lastname ?>" required autocomplete="off" />
          <label for="lastname"><span>Last Name*</span></label>
        </td>
      </tr>
    </table>
    <hr width="80%">
    <table width="80%">
      <tr>
        <td>
          <input type="text" name="email" class="question" id="email" value="<?php echo $email ?>" required autocomplete="off" />
          <label for="email"><span>Email*</span></label>
        </td>
        <td>
          <input type="text" name="phone" class="question" id="phone" value="<?php echo $phone ?>" required autocomplete="off" />
          <label for="phone"><span>Mobile Number*</span></label>
        </td>
      </tr>
    </table>
    <hr width="80%">
    <table width="80%">
      <tr>
        <td>
          <input type="text" name="address1" class="question" id="address1" value="<?php echo $address1 ?>" required autocomplete="off" />
          <label for="address1"><span>Address Line 1*</span></label>
        </td>
      </tr>
    </table>
    <hr width="80%">
    <table width="80%">
      <tr>
        <td>
          <input type="text" name="address2" class="question" id="address2" value="<?php echo $address2 ?>" required autocomplete="off" />
          <label for="address2"><span>Address Line 2*</span></label>
        </td>
      </tr>
    </table>
    <hr width="80%">
    <table width="80%">
      <tr>
        <td>
          <input type="text" name="city" class="question" id="city" value="<?php echo $city ?>" required autocomplete="off" />
          <label for="city"><span>City*</span></label>
        </td>
        <td>
          <input type="text" name="state" class="question" id="state" value="<?php echo $state ?>" required autocomplete="off" />
          <label for="state"><span>State*</span></label>
        </td>
        <td>
          <input type="text" name="country" class="question" id="country" value="<?php echo $country ?>" required autocomplete="off" />
          <label for="country"><span>Country*</span></label>
        </td>
      </tr>
    </table>
    <hr width="80%">
    <table width="80%">
      <tr>
        <td>
          <input type="text" name="father" class="question" id="father" value="<?php echo $father ?>" required autocomplete="off" />
          <label for="father"><span>Father's Name*</span></label>
        </td>
        <td>
          <input type="text" name="mother" class="question" id="mother" value="<?php echo $mother ?>" required autocomplete="off" />
          <label for="mother"><span>Mother's Name*</span></label>
        </td>
        <td>
          <input type="text" name="nationality" class="question" id="nationality" value="<?php echo $nationality ?>" required autocomplete="off" />
          <label for="nationality"><span>Nationality*</span></label>
        </td>
      </tr>
    </table>
    <hr width="80%">
    <table width="80%">
      <tr>
        <td colspan="2" align="right" style="border-top: 1px solid white;"><input type="submit" name="submit" value="SUBMIT" style="height: 40px; width: 150px; color: white; background-color: #4CAF50"></td>
      </tr>
    </table>
  </form>
</center>
</body>
</html>
