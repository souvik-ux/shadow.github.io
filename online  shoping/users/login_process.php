<?php
session_start();
if(isset($_POST['login'])){
	$email=$_POST['email'];
	$pwd=$_POST['pwd'];

	$host="localhost";
	$db_user="root";
	$db_pwd="";
	$db_name="shoping";
	$con=mysqli_connect($host,$db_user,$db_pwd,$db_name);

$sql="SELECT * FROM users WHERE email='$email' AND pwd='$pwd'";
	$qry=mysqli_query($con,$sql);
	$c=mysqli_num_rows($qry);
$bag=mysqli_fetch_array($qry);
if($c==1){
	$_SESSION['users']=$bag;
	echo"login success";
  }else{
  echo"invalid email or password";
  }
}

?>