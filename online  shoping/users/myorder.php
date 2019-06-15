<?php
session_start();

if(!isset($_SESSION['users'])){
	header("location: login.php");
}


?>
<!DOCTYPE html>
<html>
<head>

	<title></title>
	
	
</head>
<body>
	<table cellpadding="8" cellspacing="8" border="1" align="center">
		<thead>
			<tr>
				<th>SL NO</th>
				<th>qty</th>
				<th>price</th>
				<th>delivery_address</th>
				<th>phone</th>
				<th>status</th>
			</tr>
		</thead>
		<tbody>
<?php 
$host="localhost";
$db_user="root";
$db_pwd="";
$db_name="shoping";
$sl=1;
$cid=$_SESSION['users']['id'];
$con=mysqli_connect($host,$db_user,$db_pwd,$db_name);
$sql="SELECT * FROM orders WHERE cid='$cid'";
$qry=mysqli_query($con, $sql);
while($bag=mysqli_fetch_array($qry)){
?>
	<tr>
		<td><?php echo $sl; ?></td>
		<td><?php echo $bag['Qty'] ?></td>
		<td><?php echo $bag['price'] ?></td>
		<td><?php echo $bag['delivery_address'] ?></td>
		<td><?php echo $bag['phone'] ?></td>
		<?php if($bag['status']==0){ ?>
		<td>Processing</td>
		<?php }else{ ?>
		<td>Delevered</td>
		<?php } ?>

	</tr>
		<?php
		$sl++;
	} ?>
		</tbody>
	</table>	
</body>

</html>
