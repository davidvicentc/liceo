<?php
	$titulo = "Hola mundo";
	include_once 'plantillas/documento-inicio.inc.php'; 
	include_once 'plantillas/navbar.inc.php'; 
?>
	<section class="portada">
		<div class="container">
			<div class="presentation">
				<h1 class="titulo">29 De Junio</h1>
				<h3 class="title-a">Liceo de guatire, disciplina, respeto y amor.</h3>
			</div>
		</div>
	</section>
	<section class="description" id="sobre-mi">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 align="center" class="page-header">Noticias</h2>
					<article class="sobre-david">
						<div class="text-description">
							
						</div>
					</article>
				</div>
				</div>
		</div>
	</section>
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="contacto">
						<img src="images/29dj.png" height="200">
						<a href="mailto:djassiell@gmail.com"><strong>Correo electronico</strong><span>djassiell@gmail.com</span></a>
					</div>
				</div>
				<div class="col-md-6">
					<form class="form-dj" id="contacto">
						<div class="form-group">
						<label>Nombre</label>
						<input type="text" name="name" class="form-control">
						</div>
						<div class="form-group">
						<label>Correo electronico</label>
						<input type="email" name="email" class="form-control">
						</div>
						<div class="form-group">
						<label>Mensaje</label>
						<textarea type="text" name="message" class="form-control"></textarea>
						</div>
						<div class="form-group">
						<input type="submit" name="submit" class="button">
						</div>
					</form>
				</div>
			</div>
		</div>
	</footer>

	<?php include_once 'plantillas/documento-cierre.inc.php'; ?>

</body>
</html>