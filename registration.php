<?php include("header.php");?>

<?php
if(!empty($_GET['form_userName'])){
	$form_userName=$_GET['form_userName'];
	$form_password=$_GET['form_password'];
	$form_fullName=$_GET['form_fullName'];
	
	$sql="INSERT INTO `user` (`user_name`, `password`, `full_name`) VALUES('$form_userName', '$form_password', '$form_fullName')";

	$result=mysql_query($sql,$link);
	if($result!=null){
		echo "Welcome $form_userName";
	}else{
		echo "Try Again";
	}
}else{
?>

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
					
					<div class="row">
						<label for="message">Full Name:</label><br />
						<input type="text" id="message" class="input" name="form_fullName" />
					</div>
					
					<input id="submit_button" type="submit" value="Send email" />
				</form>						
			</div>
	<?php }?> 
<?php include("footer.php"); ?>	
		
 