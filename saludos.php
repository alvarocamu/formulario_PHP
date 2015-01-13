		<?php include ("includes/header.php") ?>
		<div class="container">
			
			<form class="form-horizontal" method="post" action="prosal.php">
			  <div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
				<div class="col-sm-10">
				  <input type="text" name="nombre" class="form-control" id="inputEmail3" placeholder="nombre">
				</div>
			  </div>
			  <div class="form-group">
				<label for="email" class="col-sm-2 control-label">Email</label>
				<div class="col-sm-10">
				  <input type="email" name="email" class="form-control" id="inputPassword3" placeholder="email">
				</div>
			  </div>
			  <div class="form-group">
				<label for="poblacion" class="col-sm-2 control-label">Poblacion</label>
				<div class="col-sm-10">
				  <input type="text" name="poblacion" class="form-control" id="inputPassword3" placeholder="Escribe tu ciudad">
				</div>
			  </div>
			  <div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
				  <div class="checkbox">
					<label>
					  <input type="checkbox"> Remember me
					</label>
				  </div>
				</div>
			  </div>
			  <div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
				  <button class="btn btn-warning">Enviar</button>
				</div>
			  </div>
			</form>
		</div>	
		<hr/>
		<?php include ("includes/footer.php") ?>