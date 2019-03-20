<?php

	$nome =(isset($_POST['nome'])) ? $_POST['nome'] : '';

	print $nome;
?>

<form action="index.php" method="post">
	<input type="text" name="nome" id="nome">
</form>


<!doctype html>
 <html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS cosa vuoi guardare? -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
 </head>
 <body> 
 	<div class="container">
 		<div class="alert alert-primary" role="alert">
 			<?php
 			foreach ($_POST as $key => $value) {
 			print $key . ': ' . $value . '<br>';
 			}
 			?>
 		</div>
 	</div>
 </body>
		<form action="index.php" method="post">
		   <div class="form-group">
		    <label for="exampleInputNome">inserisci il tuo nome</label>
		    <input type="text" name="nome" class="form-control" id="exampleInputNome"" placeholder="Enter your name">
		   </div>
		   <div class="form-group">
		     <label for="exampleInputNome">inserisci il tuo cognome</label>
		    <input type="text" name="cognome" class="form-control" id="exampleInputcognome" placeholder="Enter your surname">
		   </div>
		   
		 
		  

		    <div class="form-group">
		    	<label for="exampleFormControlTextarea1">indirizzo</label>
		      	<textarea name="indirizzo" class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
		    </div>


			<div class="form-group">
    			<label for="exampleFormControlTextarea1">Example textarea</label>
    			<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
				<small id="emailHelp"class="form-text text-muted"> we 'll never share your email with anyone else.</small>	
			</div>

		 	<button type="submit" class="btn btn-primary">invia</button>

 		</form>  
	</div>
		  
	
		  



   <!-- Optional JavaScript scemo chi legge :) ;) -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>

 </body>
</html>