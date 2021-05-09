
<div class="wrapp">
	
<?php	

		$action = $_GET['action'];

		function getButton($event, $id){

			switch($event){

				case 'update' :
						echo '
						<button name="update-'.$id.'" class="btn btn-success">Update</button>
						';
					break;

				case 'delete' :
						echo '
						<button name="delete-'.$id.'" class="btn btn-danger">Delete</button>
						';
					break;

				default :
						echo "No Specified Action";
				 break;

			}

	  }
	
		if($query->count("SELECT count(funder_id) FROM funders")){

			$funders = $query->rows("SELECT * FROM funders");

			while ($funder = $query->assoc($funders)) {

				echo '
				<div class="card">
					
						<div class="card-header media">
						
						<div class="media-body align-self-center">
							<span class="app-max-text block-text">'.$funder["name"].'</span>
							<span class="app-grey-text-lg">'.$funder["surname"].'</span>
						</div>
						<div class="media-right align-self-center">
							
						</div>

					</div> 
					<div class="card-body">
						
						<div class="media">
							
							<div class="media-body align-self-center">';

								if($action == 'update'){
								updateForm($funder['funder_id'], $funder['name'], $funder['email'], $funder['amount']);
							}

							echo '</div>
							<div class="media-right align-self-end pl-2">
							<form action="'.$_SERVER['PHP_SELF'].'?action='.$action.'" method="POST">';
								
								getButton($action, $funder['funder_id']);

							echo '
							</form>
							</div>

						</div>

					</div>

				</div>
				<div class="space-medium"></div> 
				';

				if(isset($_POST["delete-".$funder['funder_id']])){

					deleter($query, $funder['funder_id']);

				}

				if(isset($_POST["update-".$funder['funder_id']])){

					updater($query, $funder['funder_id'], $funder['name'], $funder['email'], $funder['amount']);

				}

			}

		}else{

			echo '<div class="alert alert-danger" role="alert">
						  <h4 class="alert-heading">Opps There Are No Fundings At The Moment!</h4>
						  
						</div>
						<div class="space-medium"></div>';

		}
	
?>

</div>