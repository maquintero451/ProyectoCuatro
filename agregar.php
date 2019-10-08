<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<div class="container">
		<form method="" id="form">
			<div class="row my-2">
				<div class="col-6">
					<input type="textbox" name="nombre" class="form-control" autofocus placeholder="degite el nombre">
				</div>
				<div class="col-6">
					<input type="textbox" name="apellido" class="form-control"  placeholder="degite el apellido">
				</div>
			</div>
			<div class="row my-2">
				<div class="col">
					<input type="button" value="enviar" name="btnEnviar" class="btn btn-dark" id="btnEnviar">
				</div>
			</div>
		</form>
		<div class="row">
			<div class="col">
				<table class="table">
					<thead>
						<tr>
							<th>Nombre</th>
							<th>Apellido</th>
						</tr>
					</thead>
					<tbody>
						
					</tbody>
				</table>
			</div>
		</div>

	</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="ajax.js"></script>
</body>
</html>