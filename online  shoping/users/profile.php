<?DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<?php
session_start();
if(!isset($_SESSION['users'])){
	header("location: login.php");
}
?>
<div class="caed">
<p>Name:-<?php echo $_SESSION['users']['name']?></p>
<p>email:-<?php echo $_SESSION['users']['email']?></p>
<p>password:-<?php echo $_SESSION['users']['pwd']?></p>
<p>phone:-<?php echo $_SESSION['users']['phone']?></p>
<p>address:-<?php echo $_SESSION['users']['address']?></p>
</div>
</body>
</html>