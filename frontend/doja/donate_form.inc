
	<form action="<?php echo app_SERVER['PHP_SELF']; ?>?action=donate" method="POST">

		<div class="form-group">
	    <label for="name">Name</label>
	    <input type="text" class="form-control" id="name" placeholder="Donors Name" name="name" required>
	  </div>

	  <div class="form-group">
	    <label for="surname">Surname</label>
	    <input type="text" class="form-control" id="surname" placeholder="Donors Surname" name="surname" required value="Maila">
	  </div>

	  <div class="form-group">
	    <label for="email">Email address</label>
	    <input type="text" class="form-control" id="email" placeholder="Enter Email" name="email" required>
	    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
	  </div>

	  <div class="choose-method">
	  	
	  	<div class="row">
	  		
	  		<div class="col-6">
	  			
	  			<button type="button" class="cash-btn btn btn-outline-success btn-block choose-btns">Donate Cash</button>

	  		</div>
	  		<div class="col-6">
	  			
	  			<button type="button" class="service-btn btn btn-outline-success btn-block choose-btns">Acts Of Service</button>

	  		</div>

	  	</div>

	  </div>

	  <div class="space-large"></div>
	  <div class="acts-service" style="display:none;">
	  	
	  	<div class="form-group">
	  		
	  		<span class="app-max-text">Acts Of Service</span>

	  		<div class="space-medium"></div>

	  		<label>Your Acts Of Service</label>
	  		<textarea class="form-control" id="acts-input" rows="3" placeholder="Detailed Explation Of Your Acts Of Service"></textarea>

	  	</div>

	  </div>

	  <div class="card-wrapper" style="display:none;">
	  	
	  	<span class="app-max-text">
		  	Card Details
		  </span>
		  <div class="space-medium"></div>

		  <div class="form-group">
		    <label for="amount">Amount</label>
		    <input type="number" class="form-control" id="amount" name="amount" placeholder="Amount To Donate" required value="1200">
		  </div>

			  <div class="form-row">
			    <div class="col-3">
			      <input type="text" name="cardName" class="form-control" placeholder="Name On Card" required value="T Maila" />
			    </div>
			    <div class="col-3">
			      <input type="number" name="cardCVV" class="form-control" placeholder="CVV" required value="122" />
			    </div>
			    <div class="col-6">
			      <input type="number" name="cardNumber" class="form-control" placeholder="Card Number" required value="23244" />
			    </div>
			  </div>

	  </div>

		 <div class="space-large"></div>
		  
	  <button type="submit" name="donateBtn" class="btn btn-success btn-block btn-lg">Submit</button>

	</form>


	<script type="text/javascript">
		
		((app) => {

			function toggleDonation(where){

				if(where === 'cards'){

					app.get('.acts-service').style.display = 'none'
					app.get('.card-wrapper').style.display = 'block'

				}else if(where === 'service'){

					app.get('.acts-service').style.display = 'block'
					app.get('.card-wrapper').style.display = 'none'

				}

				console.log(where)

			}

			app.gets('.choose-btns').forEach((btn, i) => {

				btn.onclick = () => {
					toggleDonation(i == 0 ? 'cards' : 'service')
				}

			})

		})(app);

	</script>