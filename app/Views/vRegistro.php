	<div class="container">
		<form method="POST" action="<?php echo base_url(); ?>/Home/insertarForm">
			<div class="mb-3 row">
	    		<label for="email" class="col-sm-2 col-form-label">Email</label>
	    		<div class="col-sm-10">
	      			<input type="email" class="form-control" id="email" name="email"  placeholder="email@example.com">
	    		</div>
	  		</div>
	  		<div class="mb-3 row">
	    		<label for="password" class="col-sm-2 col-form-label">Password</label>
	    		<div class="col-sm-10">
	      			<input type="password" class="form-control" id="password" name="password">
	    		</div>
	  		</div>
	  		<div class="mb-3 row">
	    		<button type="submit" class="btn btn-primary mb-3">Registrar</button>
	  		</div>
	  	</form>
	</div>