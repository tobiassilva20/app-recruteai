<?php 


?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Novo processo</title>
 	<meta charset="utf-8">
 	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
 	<link rel="apple-touch-icon" sizes="180x180" href="App/Assets//apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="App/Assets/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="App/Assets//favicon-16x16.png">
	<link rel="manifest" href="App/Assets//site.webmanifest">
 </head>
 <body>
 	<section class="section mx-5 py-5">
 		<div class="container has-text-centered notification is-primary is-size-3">
 			<p>Novo processo seletivo</p>
 		</div>
 	</section>
 	<section class="section py-3">
 		<div class="container">
 			<div class="columns is-centered">
 				<div class="column is-one-third">
          <!-- Form que será processado pelo adicionar.php-->
 					<form action="../actions/saveProcess.php" method="POST">
 						<div class="field">
  							<label class="label">Título:</label>
  							<div class="control">
    							<input class="input is-primary" type="text" name="title" placeholder="título do processo" required>
  							</div>
						</div>
						<div class="field">
  							<label class="label">Descrição:</label>
  							<div class="control">
    							<textarea class="textarea is-primary" name="description" placeholder="Descrição detalhada do produto..." required></textarea>
  							</div>
						</div>
						<div class="field is-grouped">
  						<div class="control">
    							<input type="submit" class="button is-primary" name="saveProcess" value="Salvar"/>
  						</div>  						
  					</div>
 					</form>
 				</div>
  			</div>
 		</div>
 	</section>
 	
 </body>
 </html>