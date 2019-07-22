<?php
$id = $_POST['id'];
$password = $_POST['password'];
session_start();
$con = mysqli_connect("localhost","root","","bank");
$result = mysqli_query($con, "SELECT * FROM login WHERE id='$id' && pwd='$password'");
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$accno = $row['account_no'];
$count = mysqli_num_rows($result);
if($count==1)
{
	$_SESSION['account_no'] = $accno;
	header("refresh:0;url=../profile/dashboard.php");
}
else
{
	header("refresh:0;url=../login/loginW.html");
}
?>