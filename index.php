<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title>Видача екзаменаційних білетів</title>

	    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700;800&display=swap" rel="stylesheet">

	    <!-- Bootstrap CSS CDN -->
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

	    <!-- Our Custom CSS -->
	    <link rel="stylesheet" href="style.css">

	    <!-- Font Awesome -->
	    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
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
					<p class="text-left text-muted text-monospace">1. Введіть у відповідне поле список осіб, яким потрібно роздати білет. Кожну нову особу вводьте з нового рядка, натискаючи клавішу <kbd>Enter</kbd>.</p>
					<p class="text-left text-muted text-monospace">2. Розкажіть байку про щасливий білет.</p>
					<p class="text-left text-muted text-monospace">3. Натисніть кнопку "Роздати білети".</p>
					<input type="text" id="tickets_count" placeholder="Кількість білетів">
					<button class="btn button btn-dark py-2 px-4 border-0" id="give_tickets">Роздати білети</button>
					<p class="text-left text-muted text-monospace pt-3">4. Вуаля:) Насолоджуйтесь криками відчаю та благаннями взяти інший білет</p>
					<p class="text-left text-muted text-monospace mb-5">5 (за бажанням). Порадьте сервіс колегам.</p>
					
				</div>
				<div class="col-md-4 col-xs-12" id="result">
					
				</div>
				<div class="col-12 text-center">
					<p class="text-center text-muted text-monospace pt-5">developed by <a href="http://spacedesign.in.ua" target="_blank">frstshmn</a></p>
				</div>
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
		<script type="text/javascript" src="ticket-mix.js"></script>
	</body>
</html>