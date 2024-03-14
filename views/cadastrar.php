<!doctype html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="../css/style.css">

	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body style="background-color: rgb(238, 238, 238);">
<?php 
        include "../inc/navbarInside.php";
		require	"../alerts/alerts.php";
	?>
	<section class="ftco-section">
		<div class="container">

			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
						<div class="img" style="background-image: url(https://i.pinimg.com/originals/0e/4d/fa/0e4dfa13eea59e804dc066948025f2b7.jpg);"></div>
						<div class="login-wrap p-4 p-md-5">
							<div class="d-flex">
								<div class="w-100">
									<h3 class="mb-4">Cadastrar</h3>
								</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#"
											class="social-icon d-flex align-items-center justify-content-center"><span
												class="fa fa-facebook"></span></a>
										<a href="#"
											class="social-icon d-flex align-items-center justify-content-center"><span
												class="fa fa-twitter"></span></a>
									</p>
								</div>
							</div>
							<form action="../usuario/processar-cadastro.php" method="post" class="signin-form">
								<div class="form-group mt-3">
									<input type="text" class="form-control" name="nome" id="nome" required>
									<label class="form-control-placeholder" for="nome">Nome</label>
								</div>
								<div class="form-group mt-3">
									<input type="email" class="form-control" name="email" id="email" required>
									<label class="form-control-placeholder" for="email">Email</label>
								</div>
								<div class="form-group">
									<input id="password-field" type="password" name="senha" id="senha" class="form-control"  required>
									<label class="form-control-placeholder" for="senha">Senha</label>
									<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
								</div>
								<div class="form-group">
									<input type="submit" name="cadastro" class="botao-cadastrar form-control btn btn-primary rounded submit px-3" value="Cadastrar usuário"/>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php include "../inc/footer.php"; ?>

	<script src="../js/jquery.min.js"></script>
	<script src="../js/popper.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/main.js"></script>

</body>

</html>