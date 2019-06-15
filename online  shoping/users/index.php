<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php include_once 'header.php'; ?>
<p><h1>viper</p></h1>
	
<p><h1>YOUR PRODUCTS</h1></p>
<div>
	<p><h4>But nothing the copy said could convince her and so it didn't take long until a few insidious copy writers ambushed her,made her drunk with long and parole and dragged her into their agency,where they abused her for their.</p></h4>
</div>	
<p><h1>REFUND POLICY</h1></p>
<p><h4>Even the all-powerful pointing has not control about blind texts it is an almost unorthographic.</p></h4>
<p><h1>PREMIUM PACKAGING</h1></p>
<p><h4>Even the alll-powerfull pointing has no control about the blind texts it is an almost unothographic</p></h4>
<p><h1>SUPERIOR QUALITY</h1></p>
<p><h4>Even the all powerful pointing has no control about the blind texes it is an almost unthograpjic.</p></h4>
<img src="bg_4.jpg"  height="300px"  width="1500px" alt=""/>
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
	<div class="card"><center>
		<h3><?php echo $bag['name'] ?></h3>
		<p><img src="<?php echo "../admin/".$bag['pic'] ?>" height="300px"></p>
		<p>Price:- Rs.<?php echo $bag['price'] ?> </p>
		<a href="order.php?id=<?php echo $bag['id'] ?>">Order</a></center>
	
	</div>
	<?php
}

?>
<img src="souvik.jpg" height="30%"  width="30%" alt=""/>

      
	            <p><h3>Address:silda,jhargram,pin-721515</p></h3>
	  
          
          
          	
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