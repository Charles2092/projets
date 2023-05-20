<!DOCTYPE html>
<html>
<head>
	<title>Paiement</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
	<script>
		var stripe = Stripe('Votre clé publique');
		var elements = stripe.elements();
		var card = elements.create('card');
		card.mount('#card-element');

		var form = document.getElementById('payment-form');
		form.addEventListener('submit', function(event) {
			event.preventDefault();
			stripe.createToken(card).then(function(result) {
				if (result.error) {
					var errorElement = document.getElementById('card-errors');
					errorElement.textContent = result.error.message;
				} else {
					stripeTokenHandler(result.token);
				}
			});
		});

		function stripeTokenHandler(token) {
			var form = document.getElementById('payment-form');
			var hiddenInput = document.createElement('input');
			hiddenInput.setAttribute('type', 'hidden');
			hiddenInput.setAttribute('name', 'stripeToken');
			hiddenInput.setAttribute('value', token.id);
			form.appendChild(hiddenInput);
			form.submit();
		}
	</script>
</head>
<body>
	<h1>Paiement</h1>

	<form action="process-payment.php" method="post" id="payment-form">
	<label for="carte de credit">carte de credit:</label>
		<input type="text" name="carte de credit" required>
		<br>
		<div id="card-element">
			<!-- Element où le widget de saisie de la carte sera placé -->
		</div>

		<div id="card-errors" role="alert"></div>

		<button type="submit">Payer</button>
	</form>
</body>
</html>

