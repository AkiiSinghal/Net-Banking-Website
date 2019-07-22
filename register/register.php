<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
  $fname = $_POST['firstname'];
  $lname = $_POST['lastname'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  session_start();
    $_SESSION['firstname'] = $fname;
    $_SESSION['lastname'] = $lname;
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    header("refresh:0;url=register2.php");
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
function validate() {
      var v1 = document.getElementById("password").value;
      var v2 = document.getElementById("password_confirmation").value;
      if(v1 != v2) {
        document.getElementById("msg").innerHTML = "Password do not match";
      }
      else {
        document.getElementById("msg").innerHTML = "";
      }
    }
</script>
</head>
<body>

<div class="topnav" id="myTopnav">
  <img src="../img/lg.png" height="44" width="204.8">
  <a href="../index.html" class="active"><i class="fa fa-fw fa-home "></i>Home</a>
  <a href="../login/login.html" style="float: right"><i class="fa fa-fw fa-sign-in "></i>Login</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<br><br>
  <center>
    <div style="background-color: #4CAF50; height: 80px; width: 100%; align-items: center; color: white "><h1>New User Registration</h1>
  <p>* All Field are Mandatory</p></div>
  <br><br>
  <hr class="colorgraph">
  <form action="" method="POST">
    <table cellspacing="20">
      <col width="400">
      <tr>
        <td>
          <input type="text" name="firstname" class="question" id="firstname" required autocomplete="off" />
          <label for="firstname"><span>First Name*</span></label>
        </td>
        <td>
          <input type="text" name="lastname" class="question" id="lastname" required autocomplete="off" />
          <label for="lastname"><span>Last Name*</span></label>
        </td>
      </tr>
      <tr>
        <td colspan="2">
          <input type="text" name="email" class="question" id="email" required autocomplete="off" />
          <label for="email"><span>Email Address*</span></label>
        </td>
      </tr>
      <tr>
        <td>
          <input type="password" name="password" class="question" id="password" required autocomplete="off" />
          <label for="password"><span>Password*</span></label>
        </td>
        <td>
          <input type="password" name="password_confirmation" oninput="validate()" class="question" id="password_confirmation" required autocomplete="off" />
          <label for="password_confirmation"><span>Confirm Password*</span></label>
          <div style="color: red;" id="msg"></div>
        </td>
      </tr>
      <tr>
        <td><a style="color: blue" onmouseover="this.style.color = 'red'" onmouseleave="this.style.color = 'blue'" href="../login/login.html">Already A User?</a></td>
      </tr>
    </table>
    <hr class="colorgraph">
    <br>
    <input type="submit" name="submit" value="Submit" style="height: 45px; width: 250px; font-size: 25px; color: white; background-color: #4CAF50">
  </form>
  </center>
</body>
</html>
