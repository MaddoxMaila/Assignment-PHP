
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">

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
	    <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" required>
	    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
	  </div>

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

		 <div class="space-large"></div>
		  
	  <button type="submit" name="donateBtn" class="btn btn-success btn-block btn-lg">Submit</button>

	</form>