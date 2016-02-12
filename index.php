
<!DOCTYPE HTML>
<html lang="es">
	<head>
		<link rel="stylesheet" href="http://localhost:82/ApiTwitter/template/CSS/bootstrap.css" />
		<link rel="stylesheet" href="http://localhost:82/ApiTwitter/template/CSS/bootstrap.min.css" />
		<link rel="stylesheet" href="http://localhost:82/ApiTwitter/tweet.css" />
	
		<meta charset="UTF-8" />
		<title>Api Twitter</title>
		<script src="http://code.jquery.com/jquery-2.2.0.min.js"></script>
		<script src="js/Myjquery.js"></script>
	</head>
	<body>
		
		<div class="container">
			<div class="row vertical-offset-100">
				<div class="col-md-4 col-md-offset-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="row-fluid user-row">
								<h6>Obten Tweets</h6>
							</div>
						</div>
						<div class="panel-body">
							<form class="form-horizontal" method="post" type="text">
								<div class="form-group">
									
									<input name="tweet" type="text" class="form-control" placeholder="Escribe algo" required="" maxlength="10" min="3" id="campo">
								</div>
								<div class="form-group">
								</div>
							</form>
							<div class="col-sm-offset-2 col-sm-10">
										<input id="submit" value="obtener tweets" class="btn btn-success" type="button"/>
									</div>			
						</div>
					</div>
				</div>
			</div>
		</div>
		Resultado: <table class="table table-striped" border="1" id="resultado">
			
		</table>
	</body>
</html>