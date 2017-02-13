<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>encrypt</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.css">
</head>
<body>
	<table class='ui inverted olive table'>
		<th>id</th>
		<th>Texte Chiffre</th>
		@foreach ($chiffre as $value)
		<tr>

			<td>{{$value->id}}</td>
			<td>{{$value->text}}</td>

		</tr>

		@endforeach
	</table>


<a href="/formCrypt"><button class="ui button">Crypter un message</button></a>


</body>
</html>