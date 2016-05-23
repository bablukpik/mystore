<?php include("header.php"); ?>
			<div class="promo floatright">
				<?php 
					if(isset($_SESSION['user_name'])){
						$cat_id=1;
						if(isset($_GET['cat_id'])){
							$cat_id=$_GET['cat_id'];
						}
						$sql="select * from products where category_id=$cat_id";
						$result=mysql_query($sql,$link);
						while($row=mysql_fetch_array($result))
						{
							echo "<b>$row[product_name]</b><br>";
							echo "<img width='400' height='300' src='$row[product_image]'><br>";
							echo "<b>$row[description]</b><br>";
							echo "<b>$row[unit_price]</b><br>";
							echo "<b>$row[total_unit]</b><br>";
							echo "<br><br>";
						 }
					}else{
						echo "You have to login first to view products";
					}
				?>
			</div>
<?php include("footer.php"); ?>			
		