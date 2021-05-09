<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="frontend/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="frontend/css/tunepik.styles.css" />
	<link rel="stylesheet" type="text/css" href="frontend/css/appstyles.css" />
	<style type="text/css">
	

		.media{
			width: 100%;
		}

	</style>
</head>
<body>

	<script type="text/javascript" src="frontend/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="frontend/js/bootstrap.js"></script>

	<div class="root">
		
		<?php

			if(!isset($_GET['action'])){
				header("location: home.php?action=home");
			}

			include 'frontend/doja/navbar.inc'; 

		?>

		<div class="space-large"></div>
		<div class="space-large"></div>

		<div class="row">
			
			<div class="col-lg-3 pl-4">
				
				<?php include 'frontend/doja/sidebar.inc'; ?>

			</div>
			<div class="col-lg-6">
				
				

			</div>
			<div class="col-lg-3"></div>

		</div>

	</div>

</body>
</html>