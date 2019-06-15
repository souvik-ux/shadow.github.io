<?php
$users_name=$_POST['name'];
$users_email=$_POST['mail'];
$users_pwd=$_POST['pwd'];
$users_phone=$_POST['ph'];
$users_address=$_POST['address'];
$host="localhost";//data location
$db_user="root";
$db_pwd="";//data base password
$db_name="shoping";//database name


$con=mysqli_connect($host,$db_user,$db_pwd,$db_name);
$sql="INSERT INTO  users VALUES('0','$users_name','$users_email','$users_pwd','$users_phone','$users_address')";

$qry=mysqli_query($con,$sql);
if($qry){
	echo"shoping data inserted";
}else{
	echo"error".mysqli_error($con);
}
?>
