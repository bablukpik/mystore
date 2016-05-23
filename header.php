<?php
	session_start();
	include("admin/config.php");
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="style.css" />
</head>
<body>
	<div class="header_area">
		<div class="header wrapper">
			<div class="logo floatleft"><img src="images/logo.png" alt="logo" /></div>
		</div>
	</div>
	
	<div class="menu_area">
		<div class="menu wrapper">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="products.php">Products</a></li>
				<li><a href="registration.php">Registration</a></li>
				<?php 
					if(isset($_SESSION['user_name'])){
						echo "<li><a href='logout.php'>Logout</a></li>";
					}else{
						echo "<li><a href='login.php'>Login</a></li>";
					}
				?>	
				<li><a href="#">Contact us</a></li>
			</ul>
		</div>
	</div>
	
	<div class="content_area">
		<div class="content wrapper">
			<div class="left_sidebar floatleft">
				<div class="sidebar_menu">
					<ul>
					 <?php
						$sql="select * from category";
						$result=mysql_query($sql, $link);
						while($row=mysql_fetch_array($result)){
							echo "<li><a href='products.php?cat_id=$row[category_id]'>$row[category_name]</a></li>";
						}
					 ?>
					</ul>
				</div>
			</div>