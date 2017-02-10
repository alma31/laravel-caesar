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
		<input placeholder="Texte a crypter" type="text">
		<input class="ui button" value="Crypter le texte" type="submit">
	</form>
</body>
</html>