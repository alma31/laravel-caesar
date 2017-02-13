<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>formulaire</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.css">
</head>
<body>
	<form action="/" method="POST">
		{{csrf_field()}}
		<input name="message" placeholder="Texte a crypter" type="text" name="text">
		<input name="decalage" placeholder="Nombre de decalage" type="number">
		<input class="ui button" value="Crypter le texte" type="submit">

	</form>
</body>
</html>