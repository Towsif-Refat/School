<?php  include('model.php');?>
<?php include "controller/HeaderL.php"; ?>
<?php  include('header_footer/Sidebar.php');?>

 <title>Notification</title>


			<h1>Notice From Admin</h1>
			
<?php
	
	$result=NoticeFromAdmin();

	
	if(mysqli_num_rows($result)>0){?>
	
		<ul>
		<?php while($row=mysqli_fetch_assoc($result)){?>
			<li><input type="button" value="<?php echo $row['title'];?>" onclick="shownotice('<?php echo $row['notice'];?>')" /></li>
	<?php } ?> </ul>
	
	<?php
	}else
	{
		echo "You Have No Notice!";
	}


	
	?>
			
		<script>

		function shownotice(i){
			// var x=i;
			alert(i);
		}
		</script>
