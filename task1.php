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
		
		<?php include 'frontend/doja/navbar.inc'; ?>

		<div class="space-large"></div>
		<div class="space-large"></div>

		<div class="row">
			
			<div class="col-lg-3 pl-4">
				
				<?php include 'frontend/doja/sidebar.inc'; ?>

			</div>
			<div class="col-lg-6 container-fluid">

				<div class="card border-success">
					
					<div class="card-header">
						
						<span class="app-max-text">
							Donate Funds
						</span>

					</div>
					<div class="card-body">
						
					<?php

						if(!isset($_GET['action'])){
							header("location: task1.php?action=donate");
						}

						$errors = [];

						if(isset($_POST['donateBtn'])){

							function clean($text){
								return trim($text);
							}

							$name 		= clean($_POST['name']);
							$surname 	= clean($_POST['surname']);
							$email		= clean($_POST['email']);
							$amount 	= clean($_POST['amount']);
							$cardName = clean($_POST['cardName']);
							$cardCVV  = clean($_POST['cardCVV']);
							$cardNumber = clean($_POST['cardNumber']);

							require 'backend/include/query.php';

							if($query->insert("INSERT INTO funders VALUES('$name', '$surname', '$email', '$amount', '$cardName', '$cardNumber', '$cardCVV', NULL)")){

								include 'frontend/doja/successful.inc';

							}else{

								include 'frontend/doja/fail.inc';

								include 'frontend/doja/donate_form.inc';

							}

						}else{

							include 'frontend/doja/donate_form.inc';

						}

					?>

					</div>

				</div>

				<div class="space-large"></div>
				<div class="space-large"></div>
		
			</div>
			<div class="col-lg-3"></div>

		</div>

	</div>

</body>
</html>