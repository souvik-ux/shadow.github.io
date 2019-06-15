<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="jquery-3.3.1.slim.min.js"></script>
	<title></title>
	<style type="text/css">
		.btn{
			width:70px;
			height: 25px;
			border: 2px solid red;
		}
	</style>
</head>
<body>
	<table cellpadding="8" cellspacing="8" border="1" align="center">
		<thead>
			<tr>
				<th>SL NO</th>
				<th>NAME</th>
				<th>Pic</th>
				<th>price</th>
				<th>status</th>
				<th>DELETE</th>
			</tr>
		</thead>
		<tbody>
<?php 
$host="localhost";
$db_user="root";
$db_pwd="";
$db_name="shoping";
$sl=1;
$con=mysqli_connect($host,$db_user,$db_pwd,$db_name);
$sql="SELECT * FROM items ";
$qry=mysqli_query($con, $sql);
while($bag=mysqli_fetch_array($qry)){
?>
	<tr>
		<td><?php echo $sl; ?></td>
		<td onblur="savetodb(this,'<?php echo $bag['id'] ?>','name')"><?php echo $bag['name'] ?></td>
		<td onblur="savetodb(this,'<?php echo $bag['id'] ?>','pic')"><?php echo $bag['pic'] ?></td>
		<td onblur="savetodb(this,'<?php echo $bag['id'] ?>','price')"><?php echo $bag['price'] ?></td>
		<td onblur="savetodb(this,'<?php echo $bag['id'] ?>','status')"><?php echo $bag['status'] ?></td>
		<td><a href="delete.php?id=<?php echo $bag['id'] ?>" class="btn">Delete</a></td>
		<td>
			<button id="edit" onclick="editData('<?php echo $bag['id'] ?>')">Edit</button>
			<button id="save" onclick="saveData('<?php echo $bag['id'] ?>')">Save</button>
		</td>
	</tr>
		<?php
$sl++;
		 } ?>
		</tbody>
	</table>	
</body>
<script type="text/javascript">
	$(document).ready(function(){
		$("#save").hide();	});
	function editData(id) {
		$("#save").show();
			$("#edit").hide();
			$("td").attr('contenteditable', 'true');
			$("td").css('border','2px solid red');
	}
	function saveData(id) {
		$("#edit").show();
			$("#save").hide();
			$("td").attr('contenteditable', 'false');
			$("td").css('border','2px solid green');
			alert("Data Updated");

	}
	
	function savetodb(obj,id,col){
		var data=obj.innerHTML;
		$.ajax({
			url: "update.php",
			type: "get",
			data: {name:data, id:id, col:col},
			success: function(response){
				
			}
		});
	}
</script>
</html>











