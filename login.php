<?php include("header.php"); ?>
<?php
if(isset($_GET['form_userName']) && !empty($_GET['form_userName'])){
	$form_userName=$_GET['form_userName'];
	$form_password=$_GET['form_password'];
	$sql="SELECT * FROM user WHERE user_name = '$form_userName'";
	$result=mysql_query($sql, $link);
	$row=mysql_fetch_array($result);
		if($row['user_name']!=null){
			 $_SESSION['user_name']=$row['user_name'];
			 echo "<div class='promo floatright'>Welcome <b>$row[user_name]</b>. You can buy products from our store</div>";
		}else{
			echo "Login failed";
		}
	
}else {?>
<div class="promo floatright">
	<form id="contact_form" action="<?php $_SERVER['PHP_SELF']; ?>" method="get" enctype="multipart/form-data">
		<div class="row">
			<label for="name">Username:</label><br />
			<input id="name" class="input" name="form_userName" type="text"  size="30" /><br />
		</div>
		
		<div class="row">
			<label for="email">Password:</label><br />
			<input id="email" class="input" name="form_password" type="password" value="" size="30" /><br />
		</div>
		
		<input id="submit_button" type="submit" value="Send email" />
	</form>		
</div>
<?php } ?>
<?php include("footer.php"); ?>			
		