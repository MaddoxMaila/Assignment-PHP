<div class="nav navbar fixed-top bg-white">
			
			<div class="media">
				
				<div class="media-left align-self-center linear-menu">
					
					<span class="app-max-text">
						SMU FUNDERS
					</span>

				</div>
				<div class="media-body align-self-center search-wrapper pl-4 pr-4">
					
					<div class="row">
						
						<div class="col-4">
							
							<div class="input-group">
							  <div class="input-group-prepend">
							    <span class="input-group-text" id="basic-addon1">Search</span>
							  </div>
							  <input type="text" class="form-control" placeholder="" aria-label="search" aria-describedby="basic-addon1">
							</div>

						</div>
						<div class="col-4"></div>
						<div class="col-4"></div>

					</div>

				</div>

				<?php

					function showActive($where){

						return $_GET['action'] == $where ? "active" : "";

					}

				?>

				<div class="media-right align-self-center linear-menu">
					
					<ul class="nav nav-tabs">
					  <li class="nav-item">
					    <a class="nav-link <?php echo showActive('donate'); ?>" href="task1.php?action=donate">Task 1</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link <?php echo showActive('update'); ?>" href="task2.php?action=update">Task 2</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link <?php echo showActive('delete'); ?>" href="task3.php?action=delete">Task 3</a>
					  </li>
					</ul>

				</div>

			</div>

		</div>