<?php

	if(empty($_COOKIE['ddos_key']))
	{
		header ('Location: ddos.php');
	}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Die oberen 3 Zeilen MÜSSEN als erstes im Header sein, alles andere kann hier nach kommen.-->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>DDoS Protection by Socialicous - Erfolgreich!</title>

	<!-- Letzte kompilierte CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optionales Design -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<script   src="https://code.jquery.com/jquery-2.2.3.min.js"   integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo="   crossorigin="anonymous"></script>
	<!-- Letztes kompiliertes JAVASCRIPT -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	
	
	
  </head>

  <body>

    <!-- Anfang der Seite -->
    <div class="container text-center">
		<div class="grid">
			<div class="row">
				<div class="alert alert-success" role="alert">
				  <a href="#" class="alert-link">Super! Du hast deine eigene Session gesetzt! aktuelle Session ID: <?php echo $_COOKIE['ddos_key']; ?></a>
				</div>
			</div>
		</div>
    </div>


  </body>
</html>
