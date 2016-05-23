<?php include("header.php"); ?>
			<div class="promo floatright">
				
				<?php 
				if(isset($_SESSION['user_name'])){
					echo $_SESSION['user_name']; 
				}
				?>
			</div>
<?php include("footer.php"); ?>			
		