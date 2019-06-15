<?php
$admin_name=$_POST['name'];

	$file_name=$_FILES['pic']['name'];
	$file_location="images/".rand().$file_name;

$admin_price=$_POST['price'];
$admin_status=$_POST['status'];
$host="localhost";//data location
$db_user="root";
$db_pwd="";//data base password	$name=$_POST['name'];
$db_name="shoping";//database name


$con=mysqli_connect($host,$db_user,$db_pwd,$db_name);
$sql="INSERT INTO  items VALUES('0','$admin_name','$file_location','$admin_price','$admin_status')";
$qry=mysqli_query($con,$sql);

if($qry){
$upload=move_uploaded_file($_FILES['pic']['tmp_name'],$file_location);
	echo"shoping data inserted";
}else{
	echo"error".mysqli_error($con);
}
?>
