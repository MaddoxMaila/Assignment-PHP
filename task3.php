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
							Update Funding
						</span>

					</div>
					<div class="card-body">
						
						<?php 

							if(!isset($_GET['action'])){
								header("location: task3.php?action=delete");
							}

							require 'backend/include/query.php';


							function deleter($query, $id){

						  	if($query->delete("DELETE FROM funders WHERE funder_id = '$id'")){
						  		
						  		/* On Successful Deletion Of Row */

						  		echo '<div class="alert alert-success" role="alert">
												  <h4 class="alert-heading">Deletion Successful</h4>
												</div>';

						  	}else{

						  		/* On Failure To Delete */
						  		echo '<div class="alert alert-danger" role="alert">
												  <h4 class="alert-heading">Deletion Failed</h4>
												</div>';

						  	}

						  }

							include 'frontend/doja/view_funders.inc'; 

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