<!DOCTYPE html>
<html>
<head>
	<title>order</title>
</head>
<?php include_once 'header.php';?>
<body>

</body>
</html>

<?php
session_start();
if(!isset($_SESSION['users'])){
	header("location: login.php");
}
if(!isset($_GET['id'])){
	header("location: items.php");
}
$cid=$_SESSION['users']['id'];
$iid=$_GET['id'];

$sql="SELECT * FROM items WHERE id='$iid'";
$host="localhost";
$db_user="root";
$db_pwd="";//data base password	$name=$_POST['name'];
$db_name="shoping";//database name


$con=mysqli_connect($host,$db_user,$db_pwd,$db_name);

$qry=mysqli_query($con,$sql);
$bag=mysqli_fetch_array($qry);
$item_name=$bag['name'];
?>
<html>
<title>order</title>
<link rel="stylesheet" type="text/css" href="style.css">

<head></head>
<body>
<h1>You are Ordering:- <?php echo $item_name; ?></h1>
<form method="post"enctype="multipart/form-data"action="order_process.php">

<input type="hidden" name="cid" value="<?php echo $cid  ?>" readonly>
<input type="hidden" name="iid" value="<?php echo $iid ?>" readonly>
Price:- <input type="number" name="price" value="<?php echo $bag['price']  ?>" readonly><br>
qty:-<input type="text"name="qty"><br>
Phone:-<input type="text" name="ph"><br>
address:-<input type="text" name="address">
<input type="submit"value="order">


</form>
<img src="image_6.jpg" height="auto" width="100%" alt=""/>









">

 <p><h4>Address:silda,jhargram,pin-721515</p></h4>
	  
          
          
          	
	            <p><h4>Phone: <a href="#" >8597820526</a></p></h4>
	          
       
                                                                                       
	            <p><h4>Email: <a href="#">souikg629@gmail.com</a></p></h4>
	          
          
	            <p><h4>Website: <a href="#">viper.com</a></p></h4>
	          
              
             
        	<p><h2>viper</p></h2>
        	<p><h4>If you want to know more about this  website, you can follow  </p></h4>
              <ul>
              	<li><a href="#"><h4>facebook</a></li></h4>
              	<li><a href="#"><h4>instagram</a></li></h4>
              </ul>
            
              <h2>Menu</h2>
              <ul>
                <li><a href="register.php"><h4>Register</a></li></h4>
                <li><a href="login.php"><h4>Login</a></li></h4>
                <li><a href="items.php"><h4>view Product</a></li></h4>
                <li><a href="order.php" ><h4>orders</a></li></h4>
                <li><a href="about.php"><h4>About us</a></li></h4>
                <li><a href="contact.php"><h4>Contact us</a></li></h>
              </ul>
            </div>
         
              <h2>Help</h2>

	              <ul>
	                <li><a href="#"><h4>shipping informatoin</a></li></h4>
	                <li><a href="#"><h4>Returns &amp; Exchange</a></li></h4>
	                <li><a href="#"><h4>Terms &amp; Conditions</a></li></h4>
	                <li><a  href="#"><h4>Privacy Policy</a></li></h4>
	                <li><a href="#" ><h4>FAQs</a></li></h4>
	                <li><a href="#"><h4>Contact</a></li></h4>
	              </ul>
	            </div>
            <div>
               <h2 >Have any Questions?</h2>
	              <ul>
	                <li><h4>contact us</li></h4>
	            </ul>
          </div>





<?php include_once 'footer.php'; ?>
</body>
</html>