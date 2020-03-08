<div class="row">

	<div class="container">

		<br>
		<br>
		<br>
		<br>
		<br>


		<div class="col-4 offset-4">

			<h4>Agregar usuario</h4>


			<?php echo form_open('users/store') ?>


			<input type="text" class="form-control" name="first_name" placeholder="first name">
			<br>

			<input type="text" class="form-control" name="last_name" placeholder="last name">
			<br>

			<input type="text" class="form-control" name="email" placeholder="email">
			<br>

			<input type="text" class="form-control" name="password" placeholder="password">
			<br>


			<button type="submit" class="btn btn-info">Enviar</button>


			<?php echo form_close()  ?>

		</div>

	</div>

</div>
<br>
<br>
<br>
<br>
<br>