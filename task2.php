<?php
	if(!isset($_GET['action'])){
		header("location: task2.php?action=update");
	}
?>

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
	<script type="text/javascript" src="frontend/js/attack.js"></script>

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

							require 'backend/include/query.php';

							function updater($conn, $id, $name, $email, $amount){
								
							  	if($conn->update("UPDATE funders SET name = '$name', email = '$email', amount = '$amount' WHERE funder_id = '$id'")){

							  		/* Update Successful */
							  		echo '<div class="alert alert-success" role="alert">
													  <h4 class="alert-heading">Update Successful</h4>
													</div>';

							  	}else{

							  		/* Update Failure */
							  		echo '<div class="alert alert-danger" role="alert">
													  <h4 class="alert-heading">Update Failed</h4>
													</div>';

							  	}

							  }

							  function updateForm($id, $name, $email, $amount){

							  	echo '
							  		<div class="form-row">
								    <div class="col-4">
								    	<label>Name</label>
								      <input type="text" name="name-'.$id.'" class="form-control" placeholder="Edit Name" required value="'.$name.'" />
								    </div>
								    <div class="col-6">
								    	<label>Email</label>
								      <input type="email" name="email-'.$id.'" class="form-control" placeholder="Edit Email" required value="'.$email.'" />
								    </div>
								    <div class="col-2">
								    	<label>Amount</label>
								      <input type="number" name="amount-'.$id.'" class="form-control" placeholder="Edit Amount" required value="'.$amount.'" />
								    </div>
								  </div>
							  	';

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

		<div class="row">
			
			<div class="col-lg-6">
				
				<iframe src="task2.txt"  height="500px" width="100%"></iframe>

			</div>
			<div class="col-lg-6">
				
				<iframe src="frontend/doja/view_funders.txt"  height="500px" width="100%"></iframe>

			</div>

		</div>

	</div>

</body>
</html>