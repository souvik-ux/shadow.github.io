<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		.card{
			height: auto;
			width:400px;
			float:left;
			margin-left: 20px;
			margin-top: 20px;
		}
	</style>
</head>
<body>
	<?php include_once'header.php'; ?>
	<?php
$host="localhost";
$db_user="root";
$db_pwd="";
$db_name="shoping";

$con=mysqli_connect($host,$db_user,$db_pwd,$db_name);
$sql="SELECT * FROM items";

$qry=mysqli_query($con, $sql);

while($bag=mysqli_fetch_array($qry)){
	?>
	<div class="card">
		<p>Name:-<?php echo $bag['name'] ?></p>
		<p><img src="<?php echo "../admin/".$bag['pic'] ?>" height="400px"></p>
		<p>Price:-<?php echo $bag['price'] ?> </p>
		<a href="order.php?id=<?php echo $bag['id'] ?>">Order</a>
	</div>


<?php
}
?>
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







	
	 <?php include_once'footer.php'; ?>
</body>
</html>