<?php
$users_cid=$_POST['cid'];
$users_iid=$_POST['iid'];
$users_qty=$_POST['qty'];
$users_price=$_POST['price'];
$users_phone=$_POST['ph'];
$users_address=$_POST['address'];

$host="localhost";//data location
$db_user="root";
$db_pwd="";//data base password
$db_name="shoping";//database name


$con=mysqli_connect($host,$db_user,$db_pwd,$db_name);
$sql="INSERT INTO  `orders` VALUES('0','$users_cid','$users_iid','$users_qty','$users_price','$users_address','$users_phone','0')";

$qry=mysqli_query($con,$sql);
if($qry){
	echo"shoping data inserted";
}else{
	echo"error".mysqli_error($con);
}
?>