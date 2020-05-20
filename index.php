<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title>Видання білетів</title>

	    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700;800&display=swap" rel="stylesheet">

	    <!-- Bootstrap CSS CDN -->
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

	    <!-- Our Custom CSS -->
	    <link rel="stylesheet" href="style.css">

	    <!-- Font Awesome JS -->
	    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
	</head>
	<body class="font">
		<div class="container">
				
			<div class="row mt-3">
				<div class="col-12 text-center">
					<h1>Сервіс видачі екзаменаційних білетів<h1>
				</div>
				<div class="col-12 text-center mb-5">
					<small class="text-muted">та насолоди муками студентів на екзаменах</small>
				</div>
				<div class="col-md-4 col-xs-12">
					<div class="form-group">
						<textarea id="persons" class="form-control" rows="10"></textarea>
					</div>
				</div>
				<div class="col-md-4 col-xs-12 text-center">
					<p class="text-left text-muted text-monospace">1. Введіть у поле праворуч список осіб, яким потрібно роздати білет. Кожну нову особу вводьте з нового рядка, натискаючи клавішу <kbd>Enter</kbd></p>
					<p class="text-left text-muted text-monospace">2. Натисніть кнопку "Роздати білети".</p>
					<button class="btn button btn-dark py-2 px-4 border-0 my-2" id="give_tickets">Роздати білети</button>
					<p class="text-left text-muted text-monospace">3. Вуаля:)</p>
				</div>
				<div class="col-md-4 col-xs-12" id="result">
					
				</div>
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
		<script type="text/javascript" src="ticket-mix.js"></script>
	</body>
</html>