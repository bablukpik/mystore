<?php include("header.php"); ?>
			<div class="promo floatright">
				
				<?php 
				if(isset($_SESSION['user_name'])){
					echo $_SESSION['user_name']; 
				}else 
					echo 'You have not login yet, Login first';
				?>
			</div>
<?php include("footer.php"); ?>			
		